<?php

namespace App;
use App\Item;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type','type_id'];

    public function items()
    {
        return $this->hasMany('App\Item', 'type_id', 'id');
    }
//--------------------------------------------------------------

    public function CatOfType()
    {
        return $this->belongsTo('App\CatOfTypes', 'type_id','id');
    }

    public static function getTypeId($type){
        return Type::where('type',$type)->pluck('id')->first();
    }
}
