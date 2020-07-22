<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use File;
use App\Item;
use App\Type;
use App\CatOfTypes;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($deal = Item::where('hot_deal',true)->first()) {
            
            Alert::image('Hot Deal Of The Week!',$deal['item'],'storage/inventory/'.$deal['image'],'','',);
        }

        $items      = Item::all();
        $deal   = Item::where('hot_deal',true)->first();
        return view ('user.index')
                ->with('items',$items)
                ->with('hot_deal',$deal);
    }

    public function about(){
    	return view ('user.about');
    }

    public function laptop(){
        $type_id    = Type::getTypeId('Laptop');
        $items      = Type::find($type_id)->items;
        $type       = Type::find($type_id)->type;
        return view ('user.view_items_by_type_id')
            ->with('items',$items)
            ->with('type',$type);
    }

    public function desktop(){
        $type_id    = Type::getTypeId('Desktop');
        $items      = Type::find($type_id)->items;
        $type       = Type::find($type_id)->type;
        return view ('user.view_items_by_type_id')
            ->with('items',$items)
            ->with('type',$type);
    }

        public function computerparts(){
        $computer_parts         = CatOfTypes::itemsByCategory('Computer Part');
        $grouped_computer_parts = $computer_parts->groupBy(function ($item, $key) {
                                                        return Str::upper(substr($item['type'], 0, 1));
                                                        });
    	return view ('user.computerparts')->with('types',$grouped_computer_parts);
    }

    public function electricitems(){
        $electric_items         = CatOfTypes::itemsByCategory('Electric Item');
        $grouped_electric_items = $electric_items->groupBy(function ($item, $key) {
                                                    return Str::upper(substr($item['type'], 0, 1));
                                                    });
    	return view ('user.electric_items')->with('types',$grouped_electric_items);
    }
   public function tabs(){
        $tabs           = CatOfTypes::itemsByCategory('Tabs & Phones');
        $grouped_tabs = $tabs->groupBy(function ($item, $key) {
                                        return Str::upper(substr($item['type'], 0, 1));
                                        });
        return view ('user.tabs')->with('types',$grouped_tabs);
    }

    public function contact(){
    	return view ('user.contact');
    }

    public function product($id){
        $item       = Item::find($id);
        return view ('user.product')
                ->with('item',$item);
    }

    public function cat_items($cat_id){
        $category   = Category::find($cat_id);
        $items      = Inventory::where('category',$category->category)->get();
        return view ('user.cat_items')
                ->with('category',$category)
                ->with('inventories',$items);
    }

    public function view_item_by_type($type_id){
        $items  = Type::find($type_id)->items;
        $type   = Type::find($type_id)->type;
        return view ('user.view_items_by_type_id')
            ->with('items',$items)
            ->with('type',$type);
        
    }

    // public function computerpartsbrandnew(){
    //     $id         = CatOfTypes::getCatId('Computer Part');
    //     $computer_parts = CatOfTypes::find($id)->types;
    //     dd($computer_parts);
    //     $letter     = Letter::orderBy('letter','ASC')->get();
    //     $category   = Category::where('cat_code',2)->orderBy('category','ASC')->get();
    //     $f_letter   = Category::distinct()->select('f_letter')->orderBy('f_letter','ASC')->get();
    //     $item       = Inventory::where(['cat_id'=>2,'condition'=>'brand_new'])->get();
    //     $cat_code   = 2;
    //     return view ('user.computerpartsbrandnew')
    //             ->with('category',$category)
    //             ->with('f_letter',$f_letter)
    //             ->with('letter',$letter)
    //             ->with('cat_code',$cat_code);
    // }

    // public function computerpartsused(){
    // 	$letter     = Letter::orderBy('letter','ASC')->get();
    //     $category   = Category::where('cat_code',2)->orderBy('category','ASC')->get();
    //     $f_letter   = Category::distinct()->select('f_letter')->orderBy('f_letter','ASC')->get();
    //     $item       = Inventory::where(['cat_id'=>2,'condition'=>'used'])->get();
    //     $cat_code   = 2;
    //     return view ('user.computerpartsused')
    //             ->with('category',$category)
    //             ->with('f_letter',$f_letter)
    //             ->with('letter',$letter)
    //             ->with('cat_code',$cat_code);
    // }



    // public function mobilephone(){
    // 	return view ('user.mobilephone');
    // }

    // public function mobilephoneparts(){
    // 	return view ('user.mobilephoneparts');
    // }

 
}

