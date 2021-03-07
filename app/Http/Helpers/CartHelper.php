<?php


namespace App\Http\Helpers;


abstract class CartHelper
{

    public static function addToCart($product, $qty = 1, $mod = null)
    {
        if (!empty($mod)) {
            $id = "$product->id ({$mod})";
            $title = "{$product->title} ({$mod})";
            $price = $product->price;
        } else {
            $id = $product->id;
            $title = $product->title;
            $price = $product->price;
        }
        if (session()->has("cart.$id")) {
            $qtyProduct = session("cart.$id.qty");
            session()->put("cart.$id.qty", $qtyProduct + $qty);
        } else {
            session()->put(["cart.$id" => [
                'qty' => $qty,
                'title' => $title,
                'alias' => $product->slug,
                'price' => $price,
                'img' => $product->img
            ]]);
        }
        session()->has('cartQty') ? session()->put('cartQty', $qty + session('cartQty')) : session()->put('cartQty', $qty);
        session()->has('cartSum') ? session()->put('cartSum', $qty * $product->price + session('cartSum')) : session()->put('cartSum', $qty * $product->price);
    }

}
