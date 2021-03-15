<?php

namespace App\Http\Controllers;

use App\Http\Helpers\OrderHelper;
use App\Mail\OrderMail;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        Mail::to(Auth::user()->email)->send(new OrderMail());
        session()->forget('cart');
        session()->forget('cartSum');
        session()->forget('cartQty');
        return redirect()->route('home')->with('success', 'Спасибо за Ваш заказ.Письмо отправлено на вашу почту. В ближайшее время с Вами свяжется менеджер для согласования заказа');
    }
}
