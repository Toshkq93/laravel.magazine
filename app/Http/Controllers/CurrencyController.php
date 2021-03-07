<?php

namespace App\Http\Controllers;

use App\Currency;

class CurrencyController extends Controller
{
    public function change($id)
    {
        $currency = Currency::find($id);
        session()->put(['currency' => $currency]);
        return redirect()->back();
    }
}
