<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_name','product_cat','shop_id','total_product','total_sold','price'
    ];
}
