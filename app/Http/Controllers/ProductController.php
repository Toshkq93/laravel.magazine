<?php

namespace App\Http\Controllers;


use App\Product;
use App\RelatedProduct;

class ProductController extends Controller
{
    public function show($slug)
    {
        return view('fronts.product.show', [
            'product' => Product::where('slug', $slug)->first(),
            'related' => RelatedProduct::related()->get(),
        ]);
    }
}
