<?php

namespace App\Http\Controllers\admin;

use App\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyStoreRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{

    public function index()
    {
        /*840-USD, 978-EUR, 643-RUB, 980-UAH*/
        /*$url = 'https://developerhub.alfabank.by:8273/partner/1.0.0/public/nationalRates?currencyCode=840,978,643,980';
        $response = (Http::get($url)->json())['rates'];
        @dd($response);*/

        return view('admin.currency.index',['currencies' => Currency::get()]);
    }

    public function create()
    {
        return view('admin.currency.create');
    }

    public function store(CurrencyStoreRequest $request)
    {
        Currency::create($request->all());
        return redirect()->route('currencies.index')->with('success', 'Валюта успешно добавлена');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.currency.edit', ['currency' => Currency::findOrFail($id)]);
    }

    public function update(CurrencyStoreRequest $request, $id)
    {
        $currency = Currency::findOrFail($id);
        $currency->update($request->all());
        return redirect()->route('currencies.index')->with('success', 'Ваши изменения успешно добавлены');
    }

    public function destroy($id)
    {
        $currency = Currency::findOrFail($id);
        $currency->delete();
        return redirect()->route('currencies.index')->with('success', 'Валюта успешно удалена');
    }
}
