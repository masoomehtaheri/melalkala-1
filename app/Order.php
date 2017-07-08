<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $primaryKey='order_id';
    protected $dates='Date_order';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','user_id');
    }
    public function products_orders()
    {
        return $this->hasMany(products::class, 'product_id','product_id');
    }
}

