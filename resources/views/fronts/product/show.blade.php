@extends('fronts.layout.layout')
@section('content')
    @if($product->count())
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!-- Start Toch-Prond-Area -->
                    <div class="toch-prond-area">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="clear"></div>
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-{{ $product->slug }}">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-photo">
                                                    <a href="#"><img src="{{ \App\Http\Helpers\ProductHelper::getImage($product->img) }}" style="width: 100%" data-imagezoom="true" alt="#"/></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-1-1 -->
                                    <!-- Start Product = display-1-2 -->
                                    @foreach($product->gallery as $item)
                                    <div role="tabpanel" class="tab-pane fade" id="display-{{ $item->id }}">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-photo">
                                                    <a href="#"><img src="{{ \App\Http\Helpers\ProductHelper::getImage($item->img) }}" style="width: 100%" data-imagezoom="true" alt="#"/></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Start Toch-prond-Menu -->
                                <div class="toch-prond-menu">
                                    <ul role="tablist">
                                        <li role="presentation" class=" active">
                                            <a href="#display-{{ $product->slug }}" role="tab" data-toggle="tab">
                                                <img src="{{ \App\Http\Helpers\ProductHelper::getImage($product->img) }}" alt="#"/>
                                            </a>
                                        </li>
                                        @foreach($product->gallery as $item)
                                        <li role="presentation">
                                            <a href="#display-{{ $item->id }}" role="tab" data-toggle="tab">
                                                <img src="{{ \App\Http\Helpers\ProductHelper::getImage($item->img) }}" alt="#"/>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- End Toch-prond-Menu -->
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <h2 class="title-product">{{ $product->title }}</h2>
                                <div class="about-toch-prond">
                                    <p>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
                                        <a href="#">1 reviews</a>
                                        /
                                        <a href="#">Write a review</a>
                                    </p>
                                    <hr/>
                                    <p class="short-description">{{ $product->content }}</p>
                                    <hr/>
                                    @if($product->old_price)
                                    <span class="current-price"><strike>{{ round($product->old_price / session('currency.value'), 2) }} {{ session('currency.code') }}</strike></span><br>
                                        <span class="current-price" id="base-price" data-base="{{ round($product->price / session('currency.value'), 2) }}">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                    @else
                                        <span class="current-price" id="base-price" data-base="{{ round($product->price / session('currency.value'), 2) }}">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                    @endif
                                </div>
                                <div class="about-product">
                                    @if($product->modifications->count())
                                    <div class="product-select">
                                        <label>Color</label>
                                        <select class="form-control">
                                            <option> --- Please Select ---</option>
                                            @foreach($product->modifications as $modification)
<option value="{{ $modification->id }}" data-title="{{ $modification->title }}" data-price="{{ round($modification->price / session('currency.value'), 2) }}">{{ $modification->title }} (+{{ round($modification->price / session('currency.value'), 2) }} {{ session('currency.code') }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif
                                </div>
                                <div class="product-quantity">
                                    <span>Qty</span>
                                    <input type="number" placeholder="1"/>
                                    <button type="submit" class="toch-button toch-add-cart">Add to Cart</button>
                                    <button type="submit" class="toch-button toch-wishlist">wishlist</button>
                                </div>
                            </div>
                        </div>
                        <!-- Start Toch-Box -->
                        <div class="toch-box">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- Start Toch-Menu -->
                                    <div class="toch-menu">
                                        <ul role="tablist">
                                            <li role="presentation" class=" active"><a href="#description" role="tab"
                                                                                       data-toggle="tab">Description</a>
                                            </li>
                                            <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews
                                                    (1)</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Toch-Menu -->
                                    <div class="tab-content toch-description-review">
                                        <!-- Start display-description -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="description">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="toch-description">
                                                        <p>{{ $product->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End display-description -->
                                        <!-- Start display-reviews -->
                                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="toch-reviews">
                                                        <div class="toch-table">
                                                            <table class="table table-striped table-bordered">
                                                                <tbody>
                                                                <tr>
                                                                    <td><strong>plaza theme</strong></td>
                                                                    <td class="text-right"><strong>16/02/2016</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <p>It is part of Australia's network of offshore
                                                                            processing centres for irregular migrants
                                                                            who arrive by boat, and also houses New
                                                                            Zealanders facing deportation from
                                                                            Australia.</p>
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star"></i></span>
                                                                        <span><i class="fa fa-star-o"></i></span>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="toch-review-title">
                                                            <h2>Write a review</h2>
                                                        </div>
                                                        <div class="review-message">
                                                            <div class="col-xs-12">
                                                                <p><sup>*</sup>Your Name <br>
                                                                    <input type="text" class="form-control"/>
                                                                </p>
                                                                <p><sup>*</sup>Your Name <br>
                                                                    <textarea class="form-control"></textarea>
                                                                </p>
                                                            </div>
                                                            <div class="help-block">
                                                                <span class="note">Note:</span>
                                                                HTML is not translated!
                                                            </div>
                                                            <div class="get-rating">
                                                                <span><sup>*</sup>Rating </span>
                                                                Bad
                                                                <input type="radio" value="1" name="rating"/>
                                                                <input type="radio" value="2" name="rating"/>
                                                                <input type="radio" value="3" name="rating"/>
                                                                <input type="radio" value="4" name="rating"/>
                                                                <input type="radio" value="5" name="rating"/>
                                                                Good
                                                            </div>
                                                            <div class="buttons clearfix">
                                                                <button class="btn btn-primary pull-right">Continue
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-reviews -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Toch-Box -->
                        <!-- START PRODUCT-AREA -->
                        <div class="product-area">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <!-- Start Product-Menu -->
                                    <div class="product-menu">
                                        <div class="product-title">
                                            <h3 class="title-group-2 gfont-1">Related Products</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                            <!-- Start Product -->
                            <div class="product carosel-navigation">
                                <div class="row">
                                    <div class="active-product-carosel">
                                        <!-- Start Single-Product -->
                                        @foreach($related as $prod)
                                        <div class="col-xs-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-img"
                                                             src="{{ \App\Http\Helpers\ProductHelper::getImage($prod->img) }}"
                                                             alt="Product">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <h5><a href="#">{{ $prod->title }}</a></h5>
                                                    <div class="price-box">
                                                        <span class="price">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End Single-Product -->
                                    </div>
                                </div>

                            </div>
                            <!-- End Product -->
                        </div>
                        <!-- END PRODUCT-AREA -->
                    </div>
                    <!-- End Toch-Prond-Area -->
                </div>
            </div>
        </div>
    @endif
@endsection
