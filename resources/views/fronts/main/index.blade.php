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
                                <p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
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
                                    <h3 class="title-group-2 gfont-1">Electronic</h3>
                                </div>

                                <ul role="tablist">
                                    <li role="presentation" class=" active"><a href="#display-1-1" role="tab" data-toggle="tab">Speaker</a></li>
                                    <li role="presentation"><a href="#display-1-2" role="tab" data-toggle="tab">TV</a></li>
                                    <li role="presentation"><a href="#display-1-3"  role="tab" data-toggle="tab">Mobile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <div class="clear"></div>
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/12.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/12bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
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
                                                                    <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                </div>
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/12bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/12.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-1-1 -->
                                    <!-- Start Product = display-1-2 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-1-2">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/4.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-1-2 -->
                                    <!-- Start Product = di3play-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-1-3">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/4.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-1-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
                <!-- END PRODUCT-AREA (1) -->
                <!-- START PRODUCT-AREA (2) -->
                <div class="product-area">
                    <!-- Start Product-Menu -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product-menu  border-red">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Computer</h3>
                                </div>

                                <ul role="tablist">
                                    <li role="presentation" class=" active"><a href="#display-2-1" role="tab" data-toggle="tab">Dell</a></li>
                                    <li role="presentation"><a href="#display-2-2" role="tab" data-toggle="tab">Hp</a></li>
                                    <li role="presentation"><a href="#display-2-3"  role="tab" data-toggle="tab">Apple</a></li>
                                    <li role="presentation"><a href="#display-2-4"  role="tab" data-toggle="tab">Sony</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Start Product = display-2-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-35%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-45%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-2-1 -->
                                    <!-- Start Product = display-2-2 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-2-2">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-2-2 -->
                                    <!-- Start Product = display-2-3 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-2-3">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-2-3 -->
                                    <!-- Start Product = display-2-4 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-2-4">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-2-4 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
                <!-- END PRODUCT-AREA (2) -->
                <!-- START PRODUCT-AREA (3) -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-2 gfont-1">Smart Phone</h3>
                                </div>

                                <ul role="tablist">
                                    <li role="presentation" class=" active"><a href="#display-3-1" role="tab" data-toggle="tab">Sony</a></li>
                                    <li role="presentation"><a href="#display-3-2" role="tab" data-toggle="tab">Apple</a></li>
                                    <li role="presentation"><a href="#display-3-3"  role="tab" data-toggle="tab">Samsung</a></li>
                                    <li role="presentation"><a href="#display-3-4"  role="tab" data-toggle="tab">Nokia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Start Product = display-3-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-35%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-45%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/4.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-3-1 -->
                                    <!-- Start Product = display-3-2 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-3-2">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/4.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-3-2 -->
                                    <!-- Start Product = display-3-3 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-3-3">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/4.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-3-3 -->
                                    <!-- Start Product = display-3-4 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-3-4">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-55%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="label_new">
                                                            <span class="new">new</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/4.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-20%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/5.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="sale-off">
                                                            <span class="sale-percent">-25%</span>
                                                        </div>
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/mediam/6.jpg" alt="Product">
                                                                <img class="secondary-img" src="img/product/mediam/4bg.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button">
                                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                                    </div>
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-3-4 -->
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA (3) -->
                <!-- START PRODUCT-BANNER -->
                <div class="product-banner">
                    <div class="row">
                        <div class="col-md-7 banner-box1">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/5.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-1">
                                    <h2>ApBle 4s</h2>
                                    <p>Vibrant colors beautifully designed</p>
                                    <span>$888.66</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 banner-box2">
                            <div class="single-product-banner">
                                <a href="#"><img src="img/banner/6.jpg" alt="Product Banner"></a>
                                <div class="banner-text banner-2">
                                    <h2>Htc <span>N8.</span></h2>
                                    <p>lumina n85</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-BANNER -->
                <!-- START  -->
                <!-- START SMALL-PRODUCT-AREA (1) -->
                <div class="small-product-area">
                    <!-- Start Product-Menu -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product-menu">
                                <ul role="tablist">
                                    <li role="presentation" class=" active"><a href="#display-4-1" role="tab" data-toggle="tab">Latest</a></li>
                                    <li role="presentation"><a href="#display-4-2" role="tab" data-toggle="tab">Sale</a></li>
                                    <li role="presentation"><a href="#display-4-3"  role="tab" data-toggle="tab">Random</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Product = display-4-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-4-1">
                                        <div class="row">
                                            <div class="active-small-product">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="product-button-2">
                                                                    <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-4-1 -->
                                    <!-- Start Product = display-4-2 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-4-2">
                                        <div class="row">
                                            <div class="active-small-product">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-4-2 -->
                                    <!-- Start Product = display-4-3 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-4-3">
                                        <div class="row">
                                            <div class="active-small-product">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$105.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/1.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Trid Palm</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$99.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/5.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Established Fact</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$85.00</span>
                                                                <span class="old-price">$110.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="#">
                                                                <img class="primary-img" src="img/product/small/3.jpg" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <h5><a href="#">Various Versions</a></h5>
                                                            <div class="price-box">
                                                                <span class="price">$90.00</span>
                                                                <span class="old-price">$120.00</span>
                                                            </div>
                                                            <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                            <div class="product-action">
                                                                <div class="button-group">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-4-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
                <!-- END SMALL-PRODUCT-AREA (1) -->
            </div>
        </div>
    </div>
    <!-- START SUBSCRIBE-AREA -->
    {{--<div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                    <div class="subscribe">
                        <form action="#">
                            <input type="text" placeholder="Enter Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="social-media">
                        <a href="#"><i class="fa fa-facebook fb"></i></a>
                        <a href="#"><i class="fa fa-google-plus gp"></i></a>
                        <a href="#"><i class="fa fa-twitter tt"></i></a>
                        <a href="#"><i class="fa fa-youtube yt"></i></a>
                        <a href="#"><i class="fa fa-linkedin li"></i></a>
                        <a href="#"><i class="fa fa-rss rs"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- END SUBSCRIBE-AREA -->
@endsection
