<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use Notifiable;
    protected $fillable = [
       'name','image', 'price', 'cat',
       'introdoction', 'count', 'discount','color'
    ];

    protected $primaryKey='product_id';


}
