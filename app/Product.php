<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name','catagory_id','supplier_id','product_code','product_garage','product_route','product_image','buy_date','exp_date','buying_price','selling_price'
    ];

    public function catagory(){
    	return $this->belongsTo('App\Catagory');
    }

    public function supplier(){
    	return $this->belongsTo('App\Supplier');
    }
}
