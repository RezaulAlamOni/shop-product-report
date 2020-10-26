<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientShop extends Model
{
    protected $fillable = [
        'shop_name', 'description'
    ];

    public function products()
    {
        return $this->hasMany(Products::class,'shop_id','id');
    }
}
