<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

// Frontend
Route::get('/',['uses'=>'FrontendController@index'])->name('index');
Route::get('tabs',['uses'=>'FrontendController@tabs'])->name('tabs');
Route::get('about',['uses'=>'FrontendController@about'])->name('about');
Route::get('index',['uses'=>'FrontendController@index'])->name('index');
Route::get('laptop',['uses'=>'FrontendController@laptop'])->name('laptop');
Route::get('desktop',['uses'=>'FrontendController@desktop'])->name('desktop');
Route::get('contact',['uses'=>'FrontendController@contact'])->name('contact');
Route::get('/product/{id}',['uses'=>'FrontendController@product'])->name('product');
Route::get('computerparts',['uses'=>'FrontendController@computerparts'])->name('computerparts');
Route::get('electricitems',['uses'=>'FrontendController@electricitems'])->name('electricitems');
Route::get('view_item_by_type,{type_id}',['uses'=>'FrontendController@view_item_by_type'])->name('view_item_by_type');


// Backend outes
Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/home', 'HomeController@index')->name('home');

    // Items
    Route::get('inventory','ItemController@edit')->name('inventory');
    Route::get('view_item/{id}',['uses'=>'ItemController@show'])->name('view_item');
    Route::get('add_inventory',['uses'=>'ItemController@view'])->name('add_inventory');
    Route::post('update_item/{id}',['uses'=>'ItemController@update'])->name('update_item');
    Route::post('add_inventory',['uses'=>'ItemController@store'])->name('add_inventory');
    Route::post('delete_item/{id}',['uses'=>'ItemController@destroy'])->name('delete_item');
    
    
    // Category
    Route::post('add_type',['uses'=>'TypeController@store'])->name('add_type');
    Route::get('show_category_items/{id}',['uses'=>'InventoryController@show_category_items'])->name('show_category_items');
    Route::post('out_of_stock_arrivals',['uses'=>'InventoryController@out_of_stock_arrivals'])->name('out_of_stock_arrivals');
    
    
    // hot deal
    Route::post('add_hotDeal/{id}',['uses'=>'ItemController@add_hotDeal'])->name('add_hotDeal');
    Route::post('delete_hotdeal/{id}',['uses'=>'ItemController@delete_hotdeal'])->name('delete_hotdeal');
});
