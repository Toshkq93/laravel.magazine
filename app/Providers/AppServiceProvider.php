<?php

namespace App\Providers;

use App\Category;
use App\Currency;
use App\HotDeals;
use App\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('fronts.layout.sidebar', function ($view) {
            $categories = Cache::remember('categories', 3600, function () {
                return Category::whereNull('parent_id')->with('children')->get();
            });

            $hotdeals = HotDeals::with('product')->get();

            $bestsellers = Product::where([
                'status' => true,
                'bestseller' => true
            ])->get();

            $view->with([
                'categories' => $categories,
                'hotdeals' => $hotdeals,
                'bestsellers' => $bestsellers
            ]);
        });

        view()->composer('fronts.layout.header', function ($view) {
            $currencies = Currency::select('id', 'code')->get();
            $currBase = Currency::where('code', 'BYN')->first();

            $view->with([
                'currencies' => $currencies,
                'currBase' => $currBase,
                ]);
        });

        view()->composer('fronts.layout.layout', function ($view) {
            if (session()->has('currency')){
                session('currency');
            }else{
                session()->put(['currency' => Currency::where('code', 'BYN')->first()]);
            }
        });
    }
}
