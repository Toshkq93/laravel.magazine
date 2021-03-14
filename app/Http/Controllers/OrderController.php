<?php

namespace App\Http\Controllers;

use App\Http\Helpers\OrderHelper;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function saveOrder(Request $request)
    {
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'currency' => session('currency.code'),
            'country_id' => $request->country_id,
            'region_id' => $request->region_id,
            'city_id' => $request->city_id,
            'coupon_code' => $request->coupon_code,
            'gift_voucher' => $request->gift_voucher,
        ]);
        OrderHelper::saveOrder($order);
        session()->forget('cart');
        session()->forget('cartSum');
        session()->forget('cartQty');
        return redirect()->route('home')->with('success', 'Спасибо за Ваш заказ. В ближайшее время с Вами свяжется менеджер для согласования заказа');
    }
}
