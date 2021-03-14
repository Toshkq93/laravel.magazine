<?php


namespace App\Http\Helpers;


use App\OrderProduct;

abstract class OrderHelper
{
    public static function saveOrder($order)
    {
        foreach (session('cart') as $id => $orderProduct) {
            OrderProduct::create([
               'order_id' => $order->id,
               'product_id' => (int)$id,
               'qty' => $orderProduct['qty'],
                'title' => $orderProduct['title'],
                'price' => $orderProduct['price'],
            ]);
        }

    }

}
