@extends('fronts.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <!-- START PRODUCT-AREA (1) -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">{{ $category->title }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product">
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active">
                                        <div class="row">
                                        @if($products->count())
                                            <!-- Start Single-Product -->
                                                @foreach($products as $product)
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="single-product">
                                                            @if($product->old_price)
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">{{ -round(100 - ($product->price * 100 / $product->old_price)) }}%</span>
                                                                </div>
                                                            @endif
                                                            <div class="product-img">
                                                                <a href="{{ route('product.index', ['slug' => $product->slug]) }}">
                                                                    <img class="primary-img"
                                                                         src="{{ \App\Http\Helpers\ProductHelper::getImage($product->img) }}"
                                                                         alt="Product">
                                                                    <img class="secondary-img"
                                                                         src="{{ \App\Http\Helpers\ProductHelper::getImage($product->gallery->first()->img) }}"
                                                                         alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">{{ $product->title }}</a></h5>
                                                                <div class="price-box">
                                                                    @if($product->old_price)
                                                                        <span class="price" id="base-price"
                                                                              data-base="{{ round($product->price / session('currency.value'), 2) }}">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                                                        <span
                                                                            class="old-price">{{ round($product->old_price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                                                    @else
                                                                        <span class="price" id="base-price"
                                                                              data-base="{{ round($product->price / session('currency.value'), 2) }}">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                                                    @endif
                                                                </div>
                                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            </div>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button class="toch-add-cart"
                                                                                data-id="{{ $product->id }}"><i
                                                                                class="fa fa-shopping-cart"></i> Add
                                                                            to Cart
                                                                        </button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                           title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                           title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                        <a class="modal-view"
                                                                           data-id="{{ $product->id }}"
                                                                           data-href="{{ route('product.index', ['slug' => $product->slug]) }}"
                                                                           data-toggle="modal"
                                                                           data-target="#productModal">
                                                                            <i class="fa fa-search-plus"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="text-center"><br><br><br>
                                            <h4>В данной категории отсутствуют продукты</h4>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-1 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product -->
            </div>
        </div>
    </div>

    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img style="width: 100%;" id="img-product" alt="#"
                                         src="{{ asset('img/product/quickview-photo.jpg') }}"/>
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1 id="title-product">Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <hr/>
                                    <div class="s-price-box">
                                        <span class="new-price" id="price-product">$160.00</span>
                                        <span class="old-price" id="old_price-product">$190.00</span>
                                    </div>
                                    <hr/>
                                </div>
                                <a id="href-product" href="shop.html" class="see-all">See more details</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc" id="content-product">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Facebook" href="#"
                                                   class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#"
                                                   class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Google +" href="#"
                                                   class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" title="LinkedIn" href="#"
                                                   class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
@endsection
