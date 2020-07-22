<?php

namespace App;
use App\Type;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'type_id',
        'item',
        'desc',
        'condition',
        'price',
        'sale_price',
        'image',
        'brand',
        'hot_deal',
    ];

    /**
     *Get type of item.
     *
     */
    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id', 'id');
    }

    public function getItemType($type){
        return Type::where('type',$type)->pluck('id');
    }
//---------------------------------------------------------- Price
    public function calDiscount(){
        if ($this->getPrice() < number_format((float)$this['price'],2,'.',',')) {
            $discount_rate    = 100 * ($this->price - $this->sale_price) / $this->price;
            $ret              = number_format((float)$discount_rate,2,'.',',');
            return $ret;
        }
    }

    public function getPrice(){
        if ($this['sale_price'] == null) {
            return number_format((float)$this['price'],2,'.',',');
        }else{
            return number_format((float)$this['sale_price'],2,'.',',');
        }
    }


//----------------------------------------------------Date
    public function calDiff(){
        return Carbon::parse($this['created_at'])->diffInDays(Carbon::now());
    }

//-----------------------------------------------Hot deal
    public function check_hotDeal(){
        if ($this['hot_deal'] == 1) {
            return true;
        }else{
            return false;
        }
    }
    
    public function set_hotDeal(){
        $this->update(['hot_deal'=>true]);
    }
    
    public function delete_hotDeal(){
        $this->update(['hot_deal'=>false]);
    }

//----------------------------------------------------Condition
    public function getCondition(){
        if ($this['condition'] == true) {
            return 'Brand New';
        }else{
            return 'Used';
        }
    }
}
