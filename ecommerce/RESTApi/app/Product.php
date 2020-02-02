<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    const AVAIABLE_PRODUCT = 'available';
    const UNAVAIABLE_PRODUCT = 'unavailable';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',
    ];

    public function isAvailable() 
    {
        return $this->status == Product::AVAIABLE_PRODUCT;
    }
}
