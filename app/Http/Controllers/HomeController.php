<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Inventory;
use App\Category;
use App\Item;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items    = Item::latest('created_at')->paginate(10);
        $hot_deal   = Item::where('hot_deal',true)->first();
        $date     = Carbon::now();
        return view('admin.new_home')
            ->with('items',$items)
            ->with('hot_deal',$hot_deal)
            ->with('date',$date);
    }
}
