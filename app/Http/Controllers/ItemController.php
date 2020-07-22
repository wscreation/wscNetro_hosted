<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use App\CatOfTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = request()->validate([
            'type_id'       => 'required|numeric',
            'item'          => 'required|max:255',
            'desc'          => 'required',
            'condition'     => 'required',
            'price'         => 'required|numeric',
            'sale_price'    => 'nullable|numeric',
            'image'         => 'image|nullable|max:1999',
            'brand'         => 'alpha_num|nullable',
        ]);
        
        
        if ($request->hasFile('image')) {
            $filename        = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/inventory', $filename);
            $item['image'] = $filename;
        }
        Item::create($item);

        return redirect()->back()->with('success', 'New Item added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('user.product')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $items      = Item::latest()->get();
        $types      = Type::orderBy('type','ASC')->get();
        $hot_deal   = Item::where('hot_deal',true)->first();
        $grouped_items = Item::all()->groupBy( function($item,$key){
            return ($item['type_id']);
        } );

        return view('admin.inventory')
                ->with('grouped_items', $grouped_items)
                ->with('items', $items)
                ->with('hot_deal', $hot_deal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item_new   = request()->validate([
            'type'  => 'required',
            'item'  => 'required|max:255',
            'desc'  => 'required',
            'price' => 'required|numeric',
            'sale_price'    => 'nullable|numeric',
            'image' => 'nullable|image|max:1999',
        ]);

        
        if($request->hasFile('image')){
            // dd($request);
            Storage::delete('public/inventory/' . $item['image']);
            $filename        = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/inventory', $filename);
            $item_new['image'] = $filename;
        }
        Item::find($id)->update($item_new);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);;
        if (!($item['image'] == "blank.jpg")) {
            Storage::delete('public/inventory/' . $item['image']);  //delete current image
        }
        $item->delete();
        return redirect()->back();
    }

    public function view(){
        $types = Type::orderBy('type', 'ASC')->get();
        $catOfTypes = CatOfTypes::orderBy('category','ASC')->get();
        return view('admin.add_inventory')
                ->with('types', $types)
                ->with('catoftypes',$catOfTypes);
    }

    public function add_hotDeal($id){
        foreach (Item::all() as $item) {
            if($item->check_hotDeal()){
                $item->delete_hotDeal();
            }
        }
        Item::find($id)->set_hotDeal();
        return redirect()->back();
    }

    public function delete_hotdeal($id){
        Item::find($id)->delete_hotDeal();
        return redirect()->back();
    }
}
