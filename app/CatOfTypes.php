<?php

namespace App;
use App\CatOfTypes;
use App\Type;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CatOfTypes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category'];

    public function types()
    {
        return $this->hasMany('App\Type','type_id','id');
    }
//--------------------------------------------------------------


    public static function getCatId($category){
        return CatOfTypes::where('category',$category)->pluck('id')->first();
    }

    public static function itemsByCategory($category){
        return CatOfTypes::find( CatOfTypes::getCatId($category) )->types->sortBy('type');
    }
     
}