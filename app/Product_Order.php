<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Order extends Model
{
    protected $table='product__orders';
    protected $primaryKey='product__orders_id';


    public function order()
    {
        return $this->belongsTo(Order::class, 'product_id','product_id');
    }
    public function product()
    {
        return $this->belongsTo(products::class, 'product_id','product_id');
    }
}
