<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;


class Products extends Controller
{
    public function save(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        echo $product->save();
    }
}
