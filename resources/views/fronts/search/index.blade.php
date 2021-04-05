@extends('fronts.layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 filter">
                <!-- CATEGORY-MENU-LIST START -->

                <!-- END CATEGORY-MENU-LIST -->
                <!-- shop-filter start -->
                <form action="{{ route('search.index') }}" method="get">
                    <div class="shop-filter">
                        <div class="area-title">
                            <h3 class="title-group gfont-1">Filters Products</h3>
                        </div>
                        <h4 class="shop-price-title">Price</h4>
                        <div class="info_widget">
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                    <input type="submit" id="filter" value="Filter"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- shop-filter start -->
                <!-- filter-by start -->
                <div class="accordion_one">
                    <h4><a class="accordion-trigger" data-toggle="collapse" href="#divone">Color</a></h4>
                    <div id="divone" class="collapse in">
                        <div class="filter-menu">
                                    <label class="checkbox">
                                        <input type="checkbox">Black (2)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Blue (2)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Brown (3)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Green (3)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Orange (2)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Pink (2)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Red (11)
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox">Yellow (3)
                                    </label>
                        </div>
                    </div>
                    <h4><a class="accordion-trigger" data-toggle="collapse" href="#div2">manufacture</a></h4>
                    <div id="div2" class="collapse in">
                        <div class="filter-menu">
                            <label class="checkbox">
                                <input type="checkbox">Chanel (2)
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Christian Dior (2)
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Ermenegildo Zegna (2)
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Ferragamo (1)
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Hermes (2)
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Louis Vuitton (3)
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Prada (1)
                            </label>
                        </div>
                    </div>
                </div>
                <!-- filter-by end -->
            </div>
            <div class="col-md-9">
                <!-- START PRODUCT-AREA -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-3 gfont-1">Search in
                                        category: {{ $category->title ?? 'all' }}</h3>
                                </div>
                            </div>
                            <div class="product-filter">
                                <div class="sort">
                                    <label>Sort By:</label>
                                    <select>
                                        <option value="#">Default</option>
                                        <option value="#">Name (A - Z)</option>
                                        <option value="#">Name (Z - A)</option>
                                        <option value="#">Price (Low > High)</option>
                                        <option value="#">Rating (Highest)</option>
                                        <option value="#">Rating (Lowest)</option>
                                        <option value="#">Name (A - Z)</option>
                                        <option value="#">Model (Z - A))</option>
                                        <option value="#">Model (A - Z)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <!-- Start Product -->
                            <div class="product">
                                <div class="tab-content">
                                    <!-- Product -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                        <div class="row">
                                            <div class="listview">
                                                <!-- Start Single-Product -->
                                                @foreach($products as $product)
                                                    <div class="single-product">
                                                        <div class="col-md-3 col-sm-4 col-xs-12">

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
                                                        </div>
                                                        <div class="col-md-9 col-sm-8 col-xs-12">
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
                                                                <p class="description">{{ $product->description }}</p>
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
                                                    </div>
                                                    <!-- End Single-Product -->
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- Start Pagination Area -->
                                        <div class="pagination-area">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="pagination">
                                                        <ul>
                                                            {{ $products->links() }}
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="product-result">
                                                        <span>Showing {{ $products->perPage() }} to {{ $products->total() }} of {{ $products->currentPage() }} ({{ round($products->total() / $products->perPage()) }} Pages)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Pagination Area -->
                                    </div>
                                    <!-- End Product -->
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA -->
            </div>
        </div>
    </div>
    <div class="preloader"><img src="{{ asset('img/ring.svg') }}" alt=""></div>
@endsection
