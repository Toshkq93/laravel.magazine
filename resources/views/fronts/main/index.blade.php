@extends('fronts.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="slider-area">
                    <div class="bend niceties preview-1">
                        <div id="ensign-nivoslider" class="slides">
                            <img src="img/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
                            <img src="img/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
                            <img src="img/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3"/><!--
									<img src="img/sliders/slider-1/bg4.jpg" alt="" title="#slider-direction-4"/>  -->
                        </div>
                        <!-- direction 1 -->
                        <div id="slider-direction-1" class="t-lfr slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-1-1 ">
                                <h1 class="title1">LUMIA 888 DESIGN</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2">
                                <p class="title2">Elegant design for business</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <h2 class="title3">$966.82</h2>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-1-4">
                                <a href="#" class="title4">shopping now</a>
                            </div>
                        </div>
                        <!-- direction 2 -->
                        <div id="slider-direction-2" class="slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-2-1">
                                <h1 class="title1">WATERPROOF SMARTPHONE</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2-2">
                                <p class="title2">RODUCTS ARE EYE-CATCHING DESIGN. YOU CAN TAKE PHOTOS EVEN WHEN Y</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-2-3">
                                <a href="#" class="title3">shopping now</a>
                            </div>
                        </div>
                        <!-- direction 3 -->
                        <div id="slider-direction-3" class="slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-3-1">
                                <h2 class="title1">BUY AIR LACOTE</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-3-2">
                                <h1 class="title2">SUPER TABLET, SUPER GIFT</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3-3">
                                <p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et.</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-3-4">
                                <a href="#" class="title4">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- START PRODUCT-BANNER -->
                <div class="product-banner home1-banner">
                    <div class="row">
                        <div class="col-md-7 banner-box1">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/3.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-1">
                                    <h2>head phone 2015</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 banner-box2">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/4.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-2">
                                    <h2>Deals <span>50%</span></h2>
                                    <p>lumina n85</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-BANNER -->
                <!-- START PRODUCT-AREA (1) -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Latest</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                @foreach($products as $product)
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            @if($product->old_price)
                                                            <div class="sale-off">
                                                                <span class="sale-percent">{{ -round(100 - ($product->price * 100 / $product->old_price)) }}%</span>
                                                            </div>
                                                            @endif
                                                            <div class="product-img">
                                                                <a href="{{ route('product.index', ['slug' => $product->slug]) }}">
                                                                    <img class="primary-img"
                                                                         src="{{ \App\Http\Helpers\ProductHelper::getImage($product->img) }}" alt="Product">
                                                                    <img class="secondary-img"
                                                                         src="{{ \App\Http\Helpers\ProductHelper::getImage($product->gallery->first()->img) }}"
                                                                         alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">{{ $product->title }}</a></h5>
                                                                <div class="price-box">
                                                                    @if($product->old_price)
                                                                    <span class="price">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                                                    <span class="old-price">{{ round($product->old_price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                                                    @else
                                                                        <span class="price">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
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
                        <button><i class="fa fa-shopping-cart"></i> Add
                            to Cart
                        </button>
                    </div>
                    <div class="product-button-2">
                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                        <a class="modal-view" data-id ="{{ $product->id }}" data-href = "{{ route('product.index', ['slug' => $product->slug]) }}"
                           data-toggle="modal" data-target="#productModal">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
                                                    </div>
                                                @endforeach
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
    </div>

    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img style="width: 100%;" id="img-product" alt="#" src="{{ asset('img/product/quickview-photo.jpg') }}"/>
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1 id="title-product">Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <hr />
                                    <div class="s-price-box">
                                        <span class="new-price" id="price-product">$160.00</span>
                                        <span class="old-price" id="old_price-product">$190.00</span>
                                    </div>
                                    <hr />
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
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
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
