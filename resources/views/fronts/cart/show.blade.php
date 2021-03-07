@extends('fronts.layout.layout')

@section('content')
    <div class="container">
        @if(session()->has('cart'))
    <div class="shopping-cart">
        <div class="row">
            <div class="col-md-9" style="float: left">
                <div class="cart-title">
                    <h2 class="entry-title">Shopping Cart</h2>
                </div>
                <!-- Start Table -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(session('cart') as $id => $product)
                        <tr>
                            <td class="text-center">
                                <a href="#"><img class="img-thumbnail" src="{{ \App\Http\Helpers\ProductHelper::getImage($product['img']) }}" alt="#" /></a>
                            </td>
                            <td class="text-left">
                                <a href="#">{{ $product['title'] }}</a>
                            </td>
                            <td class="text-left">
                                <div class="btn-block cart-put">
                                    <input class="form-control" type="number" placeholder="1" value="{{ $product['qty'] }}"/>
                                    <div class="input-group-btn cart-buttons">
                                        <button class="btn btn-primary" data-toggle="tooltip" title="Update">
                                            <i class="fa fa-refresh"></i>
                                        </button>
                                        <button class="btn btn-danger" data-toggle="tooltip" title="Remove">
                                            <i class="fa fa-times-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">{{ round($product['price'] / session('currency.value'), 2) }} {{ session('currency.code') }}</td>
                            <td class="text-right">{{ round($product['qty'] * $product['price'] / session('currency.value'), 2) }} {{ session('currency.code') }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
                <h3 class="title-group-3 gfont-1">What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                <!-- Accordion start -->
                <div class="accordion-cart">
                    <div class="panel-group" id="accordion">
                        <!-- Start Coupon -->
                        <div class="panel panel_default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#coupon">Use Coupon Code<i class="fa fa-caret-down"></i> </a>
                                </h4>
                            </div>
                            <div id="coupon" class="collapse in">
                                <div class="panel-body">
                                    <div class="col-sm-2">
                                        <p>Enter your coupon here</p>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Enter your coupon here" />
                                        <button type="submit" class="btn btn-primary">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Coupon -->
                        <!-- Start Voucher -->
                        <div class="panel panel_default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#voucher">Use Gift Voucher <i class="fa fa-caret-down"></i> </a>
                                </h4>
                            </div>
                            <div id="voucher" class="collapse">
                                <div class="panel-body">
                                    <div class="col-sm-2">
                                        <p>Enter your gift voucher code here</p>
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Enter your gift voucher code here" />
                                        <button type="submit" class="btn btn-primary">Apply Voucher</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Voucher -->
                        <!-- Start Shipping -->
                        <div class="panel panel_default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping">Estimate Shipping & Taxes <i class="fa fa-caret-down"></i> </a>
                                </h4>
                            </div>
                            <div id="shipping" class="collapse">
                                <div class="panel-body">
                                    <div class="col-sm-12">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><sup>*</sup>Country</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option> --- Please Select --- </option>
                                                    <option> Bangladesh </option>
                                                    <option> United States </option>
                                                    <option> United Kingdom </option>
                                                    <option> Canada </option>
                                                    <option> Malaysia </option>
                                                    <option> United Arab Emirates </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><sup>*</sup>Region / State</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option> --- Please Select --- </option>
                                                    <option> Aberdeen </option>
                                                    <option> Bedfordshire </option>
                                                    <option> Caerphilly </option>
                                                    <option> Denbighshire </option>
                                                    <option> East Ayrshire </option>
                                                    <option> Falkirk </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><sup>*</sup>Post Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="Post Code" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Shipping -->
                    </div>
                </div>
                <!-- Accordion end -->
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td class="text-right">
                                    <strong>Quantity result:</strong>
                                </td>
                                <td class="text-right">{{ session('cartQty') }}</td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <strong>Total:</strong>
                                </td>
                                <td class="text-right">{{ round(session('cartSum') / session('currency.value'), 2) }} {{ session('currency.code') }}</td>
                            </tr>
                            </tbody>
                        </table>
                        rm -rf ~/.config/JetBrains/PhpStorm*/eval
                        sed -i '/evlsprt/d' ~/.config/JetBrains/PhpStorm*/options/other.xml
                        rm -rf ~/.java/.userPrefs/jetbrains/phpstorm
                    </div>
                </div>
                <div class="shopping-checkout">
                    <a href="#" class="btn btn-default pull-left">Continue Shopping</a>
                    <a href="#" class="btn btn-primary pull-right">Checkout</a>
                </div>
            </div>
        </div>
    </div>
        @else
            <div class="text-center">Корзина пуста</div>
        @endif
    </div>
@endsection
