<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', ['orders' => Order::orders()->get()]);
    }

    public function edit($id)
    {
        return view('admin.order.edit', [
            'order' => Order::order()->findOrFail($id),
            'order_products' => OrderProduct::where('order_id', $id)->get(),
            'qty' => OrderProduct::select('qty')->where('order_id', $id)->sum('qty')
        ]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        if ($request->status) {
            return redirect()->route('orders')->with('success', 'Заказ успешно одобрен!');
        } else {
            return redirect()->route('orders')->with('success', 'Заказ вернули на доработку');
        }
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        OrderProduct::where('order_id', $id)->delete();
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Заказ успешно удален');
    }
}
