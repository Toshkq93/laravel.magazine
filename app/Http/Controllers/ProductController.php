<?php

namespace App\Http\Controllers;


use App\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('fronts.product.show', ['product' => $product]);
    }
}
