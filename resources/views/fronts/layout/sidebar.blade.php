{{--@if(!\Illuminate\Support\Facades\Request::is('/'))
    <div class="row">
        <div class="col-md-12">
            <ul class="page-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">cameras & photography</a></li>
                <li class="active"><a href="#">Toch Prond</a></li>
            </ul>
        </div>
    </div>
@endif--}}
@if(!\Illuminate\Support\Facades\Request::is('login') && !\Illuminate\Support\Facades\Request::is('register') && !\Illuminate\Support\Facades\Request::is('search'))
    <div class="col-md-3 col-sm-3">
        <div class="left-category-menu hidden-sm hidden-xs">
            <div class="left-product-cat">
                <div class="category-heading">
                    <h2>Categories</h2>
                </div>
                <div class="category-menu-list">
                    @include('fronts.menu.menu')
                </div>
            </div>
        </div>
        <!-- START HOT-DEALS-AREA -->
        <div class="hot-deals-area carosel-circle">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group border-red gfont-1">Hot Deals</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-hot-deals">
                    @if($hotdeals->count())
                        @foreach($hotdeals as $product)
                            <div class="col-xs-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="{{ route('product.index', ['slug' => $product->product->slug]) }}"><img
                                                src="{{ \App\Http\Helpers\ProductHelper::getImage($product->product->img) }}"
                                                alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div
                                                data-countdown="{{ \App\Http\Helpers\ProductHelper::getDate($product->timer) }}"></div>
                                        </div>
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="{{ route('product.index', ['slug' => $product->product->slug]) }}"
                                               class="name-group">{{ $product->product->title }}</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span
                                                class="price gfont-2">{{ round($product->product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                            <span
                                                class="old-price gfont-2">{{ round($product->product->old_price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- END HOT-DEALS-AREA -->
        <!-- START SMALL-PRODUCT-AREA -->
        <div class="small-product-area carosel-navigation">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group gfont-1">Bestseller</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-bestseller sidebar">
                    @foreach($bestsellers->chunk(4) as $bestseller)
                        <div class="col-xs-12">
                        @foreach($bestseller as $product)
                            <!-- Start Single-Product -->
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="{{ route('product.index', ['slug' => $product->slug]) }}">
                                            <img class="primary-img"
                                                 src="{{ \App\Http\Helpers\ProductHelper::getImage($product->img) }}"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="product-description">
                                        <h5>
                                            <a href="{{ route('product.index', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
                                        </h5>
                                        <div class="price-box">
                                            <span
                                                class="price">{{ round($product->price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                            <span
                                                class="old-price">{{ round($product->old_price / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
                                        </div>
                                        <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                                    </div>
                                </div>
                                <!-- End Single-Product -->
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
        <!-- END SMALL-PRODUCT-AREA -->
        <!-- START SIDEBAR-BANNER -->
        <div class="sidebar-banner">
            <div class="active-sidebar-banner">
                <div class="single-sidebar-banner">
                    <a href="#"><img src="{{ asset('img/banner/1.jpg') }}" alt="Product Banner"></a>
                </div>
                <div class="single-sidebar-banner">
                    <a href="#"><img src="{{ asset('img/banner/2.jpg') }}" alt="Product Banner"></a>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR-BANNER -->
        <!-- START RECENT-POSTS -->
    {{--<div class="shop-blog-area sidebar">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-group border-red gfont-1">RECENT POSTS </h3>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-posts carosel-circle">
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="img/posts/1.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="img/posts/2.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="img/posts/3.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="img/posts/4.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="img/posts/1.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
            </div>
        </div>
    </div>--}}
    <!-- END RECENT-POSTS -->
    </div>
@endif
