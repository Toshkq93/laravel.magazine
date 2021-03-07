<?php

namespace App\Http\Controllers;

use App\Http\Helpers\CartHelper;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        if ($request->ajax()){
            $product = Product::find($request->id);
            $product->price = $request->price;
            $modification = $product->modifications()->where([
                'product_id' => $product->id,
                'modification_id' => $request->mod,
            ])->pluck('title')->first();
            CartHelper::addToCart($product, $request->qty, $modification);
        }
    }

    public function show()
    {
        return view('fronts.cart.show');
    }
}
