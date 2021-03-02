<?php

namespace App\Http\Controllers;


use App\Http\Helpers\ProductHelper;
use App\Product;
use App\RelatedProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug)
    {
        return view('fronts.product.show', [
            'product' => Product::where('slug', $slug)->first(),
            'related' => RelatedProduct::related()->get(),
        ]);
    }

    public function modal(Request $request)
    {
        if ($request->ajax()){
            $product = Product::find($request->id);
            $product->img = ProductHelper::getImage($product->img);
            return response()->json($product);
        }

    }
}
