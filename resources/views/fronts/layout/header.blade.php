<!-- HEADER-TOP START -->
<div class="header-top hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="top-menu">
                    <!-- Start Language -->
                    <ul class="language">
                        <li><a href="#"><img class="right-5" src="{{ asset('img/flags/gb.png') }}" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
                            <ul>
                                <li><a href="#"><img class="right-5" src="{{ asset('img/flags/fr.png') }}" alt="#">French</a></li>
                                <li><a href="#"><img class="right-5" src="{{ asset('img/flags/gb.png') }}" alt="#">English</a></li>
                                <li><a href="#"><img class="right-5" src="{{ asset('img/flags/gb.png') }}" alt="#">English</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Language -->
                    <!-- Start Currency -->
                    <ul class="currency" id="currency">
                        <li><a><strong>{{ session()->get('currency.code')  }}</strong><i class="fa fa-caret-down left-5"></i></a>
                            <ul>
                                @foreach($currencies as $currency)
                                <li><a href="{{ route('currency', ['id' => $currency->id]) }}">{{ $currency->code }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <!-- End Currency -->
                    <p class="welcome-msg">Welcome {{ \Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->name : 'guest' }}!</p>
                </div>
                <!-- Start Top-Link -->
                <div class="top-link">
                    <ul class="link">
                        @auth
                            @if(\Illuminate\Support\Facades\Auth::user()->is_admin)
                                <li><a href="{{ route('admin.home') }}"><i class="fa fa-user-secret"></i> Admin LTE</a></li>
                            @endif
                            <li><a href=""><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href=""><i class="fa fa-heart"></i> Wish List (0)</a></li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>Log out</a></li>
                        @endauth
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-registered"></i> Register</a></li>
                        @endguest
                    </ul>
                </div>
                <!-- End Top-Link -->
            </div>
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<div class="header-middle">
    <div class="container">
        <!-- Start Support-Client -->
        <div class="support-client hidden-xs">
            <div class="row">
                <!-- Start Single-Support -->
                <div class="col-md-3 hidden-sm">
                    <div class="single-support">
                        <div class="support-content">
                            <i class="fa fa-clock-o"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">working time</h1>
                                <p>Mon- Sun: 8.00 - 18.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-Support -->
                <!-- Start Single-Support -->
                <div class="col-md-3 col-sm-4">
                    <div class="single-support">
                        <i class="fa fa-truck"></i>
                        <div class="support-text">
                            <h1 class="zero gfont-1">Free shipping</h1>
                            <p>On order over $199</p>
                        </div>
                    </div>
                </div>
                <!-- End Single-Support -->
                <!-- Start Single-Support -->
                <div class="col-md-3 col-sm-4">
                    <div class="single-support">
                        <i class="fa fa-money"></i>
                        <div class="support-text">
                            <h1 class="zero gfont-1">Money back 100%</h1>
                            <p>Within 30 Days after delivery</p>
                        </div>
                    </div>
                </div>
                <!-- End Single-Support -->
                <!-- Start Single-Support -->
                <div class="col-md-3 col-sm-4">
                    <div class="single-support">
                        <i class="fa fa-phone-square"></i>
                        <div class="support-text">
                            <h1 class="zero gfont-1">Phone: 0123456789</h1>
                            <p>Order Online Now !</p>
                        </div>
                    </div>
                </div>
                <!-- End Single-Support -->
            </div>
        </div>
        <!-- End Support-Client -->
        <!-- Start logo & Search Box -->
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href="{{ route('home') }}" title="Malias"><img src="{{ asset('img/logo.png') }}" alt="Malias"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="quick-access">
                    <div class="search-by-category">
                        <div class="search-container">
                            <select>
                                <option class="all-cate">All Categories</option>
                                <optgroup  class="cate-item-head" label="Cameras & Photography">
                                    <option class="cate-item-title">Handbags</option>
                                    <option class="c-item">Blouses And Shirts</option>
                                    <option class="c-item">Clouthes</option>
                                </optgroup>
                                <optgroup  class="cate-item-head" label="Laptop & Computer">
                                    <option class="cate-item-title">Apple</option>
                                    <option class="c-item">Dell</option>
                                    <option class="c-item">Hp</option>
                                    <option class="c-item">Sony</option>
                                </optgroup>
                                <optgroup  class="cate-item-head" label="Electronic">
                                    <option class="c-item">Mobile</option>
                                    <option class="c-item">Speaker</option>
                                    <option class="c-item">Headphone</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="top-cart">
                        <ul>
                            <li>
                                <a href="{{ route('cart.show') }}">
                                    <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                    <span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
				                    				<span class="cart-item">{{ session('cartQty') ?? 0}} item(s)- </span>
				                    				<span class="top-cart-price">{{ round(session('cartSum') / session('currency.value'), 2) }} {{ session('currency.code') }}</span>
			                    				</span>
                                </a>
                                <div class="mini-cart-content">
                                    @if(session()->has('cart'))
                                        @foreach(session('cart') as $id => $product)
                                    <div class="cart-img-details">
                                        <div class="cart-img-photo">
                                            <a href="{{--{{ route('product.index', ['slug' => $product['alias']]) }}--}}"><img src="{{ \App\Http\Helpers\ProductHelper::getImage($product['img']) }}" alt="#"></a>
                                        </div>
                                        <div class="cart-img-content">
                                            <a href="#"><h4>{{ $product['title'] }}</h4></a>
                                            <span>
															<strong class="text-right">{{ $product['qty'] }} x</strong>
															<strong class="cart-price text-right">{{ round($product['price'] / session('currency.value'), 2) }} {{ session('currency.code') }}</strong>
														</span>
                                        </div>
                                        <div class="pro-del">
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                        @endforeach
                                    <div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">{{ round(session('cartSum') / session('currency.value') ?? 1, 2) }} {{ session('currency.code') }}</span>
													</span>
                                        <span class="cart-button-top">
														<a href="{{ route('cart.show') }}">View Cart</a>
														<a href="checkout.html">Checkout</a>
													</span>
                                    </div>
                                    @else
                                    <div class="text-center">Корзина пуста</div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End logo & Search Box -->
    </div>
</div>
<!-- HEADER-MIDDLE END -->
<!-- START MAINMENU-AREA -->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mainmenu hidden-sm hidden-xs">
                    <nav>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="hot"><a href="shop.html">Bestseller Products</a></li>
                            <li class="new"><a href="shop-list.html">New Products</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN-MENU-AREA -->
<!-- Start Mobile-menu -->
<div class="mobile-menu-area hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav id="mobile-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="shop.html">Bestseller Products</a></li>
                        <li><a href="shop-list.html">New Products</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- End Mobile-menu -->
