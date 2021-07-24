@extends('layouts.client')
@section('custom-css')
<link rel="stylesheet" href="{{asset("public/css/category/minimal.css")}}">
@endsection
@section('top-header')
@include('client.includes.shopTopHeader')
@endsection
@section('bottom-header')
@endsection
@section('mobile-header')
@include('client.includes.shopMobileHeader')
@endsection
@section('breadcrumb')
@include('client.includes.breadcrumb',['title'=>$title])
@endsection

@section('content')
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div id="sidebar" class="widget-title-bordered-full">
                    <div id="woocommerce_product_categories-4"
                        class="widget woocommerce widget_product_categories widget-toggle">
                        <h2 class="widget-title">Product categories</h2>
                        <ul class="product-categories">
                            @foreach ($categories as $cat)
                            <li class="cat-item cat-parent">
                                <a href="{{route('shop.categoryProducts',['name'=>$cat->libelle,'id'=>$cat->id])}}">{{$cat->libelle}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="bigbazar-price-filter-list-1"
                        class="widget bigbazar_widget_price_filter_list widget_layered_nav widget-toggle">
                        <h2 class="widget-title">Filter by Price</h2>
                        <ul class="price-filter-list">
                            <li class="wc-layered-nav-term">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>0.00</bdi>
                                </span> -
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>50.00</bdi>
                                </span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>50.00</bdi>
                                </span> -
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>100.00</bdi>
                                </span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>100.00</bdi>
                                </span> -
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>200.00</bdi>
                                </span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>200.00</bdi>
                                </span> -
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>400.00</bdi>
                                </span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>400.00</bdi>
                                </span> -
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>800.00</bdi>
                                </span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="woocommerce-Price-amount amount">
                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>800.00 +</bdi>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div id="bigbazar-attributes-filter-3"
                        class="widget woocommerce bigbazar-attributes-filter widget_layered_nav widget-toggle">
                        <h2 class="widget-title">Colors</h2>
                        <ul class="swatch-filter-pa_color">
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Black</span>
                                <span class="count">(3)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Blue</span>
                                <span class="count">(4)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Dark Blue</span>
                                <span class="count">(5)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Grey</span>
                                <span class="count">(3)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Red</span>
                                <span class="count">(4)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Silver</span>
                                <span class="count">(2)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Black</span>
                                <span class="count">(3)</span>
                            </li>
                            <li class="wc-layered-nav-term">
                                <span class="nav-title">Blue</span>
                                <span class="count">(4)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="md-mt-0">
                                <img class="img-fluid w-100" src="assets/images/banner/18.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="section-head border-bottom d-flex justify-content-between align-items-center mt-30">
                                <div class="d-flex section-head-side-title">
                                    <h5 class="font-700 text-dark mb-0">Dernières produits</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="product-style-2 owl-carousel owl-nav-hover-primary nav-top-right single-carousel dot-disable product-list e-bg-white">
                                <div class="item">
                                    <div class="row row-cols-1">
                                        @foreach ($latest_products as $item)
                                        <div class="col">
                                            <div class="product type-product">
                                                <div class="product-wrapper">
                                                    <div class="product-image">
                                                        <a href="{{route('shop.productDetails',['name'=>$item->name,'id'=>$item->id])}}"
                                                            class="woocommerce-LoopProduct-link"><img
                                                                src="{{$item->main_image}}" alt="Product Image"></a>
                                                        <div class="wishlist-view">
                                                            <div class="quickview-button">

                                                            </div>
                                                            <div class="whishlist-button">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="product-title"><a
                                                                href="{{route('shop.productDetails',['name'=>$item->name,'id'=>$item->id])}}">{{$item->name}}</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <div class="price">
                                                                @if (!$item->discount)
                                                                <ins>{{$item->price}}.00DH</ins>
                                                                @else
                                                                <ins>{{calculatePriceAfterDiscount($item->price,$item->discount)}}DH</ins>
                                                                <del>{{$item->price}}.00DH</del>
                                                                @endif
                                                            </div>
                                                            <div class="on-sale"><span>{{$item->discount}}</span><span>% off</span></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div
                    class="products-header d-flex justify-content-between align-items-center py-10 px-20 bg-light md-mt-30">
                    <div class="products-header-left d-flex align-items-center">
                        <h6 class="woocommerce-products-header__title page-title">{{$navbarTitle}}</h6>
                        <div class="woocommerce-result-count"> (1 – {{$totalProducts}} produits )
                        </div>
                    </div>
                    <div class="products-header-right">
                        <div class="product-show">
                            <span class="h6 font-500 text-secondary mb-0">Show:</span>
                            <select class="show-number">
                                <option value="1">6</option>
                                <option value="2">9</option>
                                <option value="3" selected="selected">12</option>
                                <option value="4">24</option>
                                <option value="5">36</option>
                                <option value="6">48</option>
                            </select>
                        </div>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="1" selected="selected">Default sorting</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by average rating</option>
                                <option value="4">Sort by latest</option>
                                <option value="5">Sort by price: low to high</option>
                                <option value="6">Sort by price: high to low</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                            <input type="hidden" name="shop-page-layout" value="left-sidebar">
                        </form>
                        <div class="products-view">
                            <a class="grid-view active" data-shopview="grid-view" href=""><i
                                    class="flaticon-menu-1 flat-mini"></i></a>
                            {{-- <a class="list-view" data-shopview="list-view" href="shop-list-left-sidebar.html"><i class="flaticon-list flat-mini"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="showing-products pt-30 pb-50 border-2 border-bottom border-light">
                    <div
                        class="row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 product-style-1 e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">
                        @foreach ($products as $item)
                        <div class="col">
                            <div class="product type-product">
                                <div class="product-wrapper">
                                    <div class="product-image">
                                        <a href="{{route('shop.productDetails',['name'=>$item->name,'id'=>$item->id])}}"
                                            class="woocommerce-LoopProduct-link"><img src="{{$item->main_image}}"
                                                alt="Product Image"></a>
                                        <div class="product-variations">
                                            <span class="active"><a href="#"
                                                    style="background-color: #b78269;"></a></span>
                                            <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                            <span><a href="#" style="background-color: #31749e;"></a></span>
                                            <span><a href="#" style="background-color: #672a4f;"></a></span>
                                        </div>
                                        <div class="on-sale"><span>{{$item->discount}}</span><span>% off</span></div>
                                        <div class="hover-area">
                                            <div class="cart-button">
                                                <form action="{{route('shopping-cart.add')}}" method="post"
                                                    id="add-to-cart-form{{$item->id}}">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$item->id}}">

                                                    <div class="cart-button">
                                                        <a href="{{route('shopping-cart.add')}}"
                                                            onclick="event.preventDefault();
                                                       document.getElementById('add-to-cart-form{{$item->id}}').submit();" class="button add_to_cart_button"
                                                            data-bs-toggle="tooltip" data-bs-placement="right" title=""
                                                            data-bs-original-title="Add to Cart"
                                                            aria-label="Add to Cart">Add to
                                                            Cart</a>
                                                    </div>
                                                </form>






                                            </div>
                                            <div class="wishlist-button">
                                                <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title=""
                                                    data-bs-original-title="Add to Wishlist"
                                                    aria-label="Add to Wishlist">Wishlist</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a
                                                href="{{route('shop.productDetails',['name'=>$item->name,'id'=>$item->id])}}">{{$item->name}}</a>
                                        </h3>
                                         <div class="product-price">
                                                            <div class="price">
                                                                @if (!$item->discount)
                                                                <ins>{{$item->price}}.00DH</ins>
                                                                @else
                                                                <ins>{{calculatePriceAfterDiscount($item->price,$item->discount)}}DH</ins>
                                                                <del>{{$item->price}}.00DH</del>
                                                                @endif
                                                            </div>
                                                            <div class="on-sale"><span>{{$item->discount}}</span><span>% off</span></div>
                                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-3">
                    <div class="showing-result">(1 – {{$totalProducts}} produits )</div>
                    <div class="pagination-style-one">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                <!--==================== Recomended For You Section Start ====================-->
                @if (Auth::guard('web')->check())

                <div class="row mt-50">
                    <div class="col-12">
                        <div class="section-head d-flex justify-content-between align-items-end">
                            <div class="d-flex">
                                <h4 class="font-600 text-secondary mb-0 pb-1">Recomendeés Pour Vous</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                        @foreach ($recommended_products as $item)

                        @endforeach
                            class="product-style-1 owl-carousel owl-item-mb-50 owl-mx-5 owl-nav-hover-primary nav-top-right four-carousel product-carousel dot-disable e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">
                            <div class="item">
                                <div class="product type-product">
                                    <div class="product-wrapper">
                                        <div class="product-image">
                                            <a href="{{route('shop.productDetails',['name'=>$item['product']['name'],'id'=>$item['product_id']])}}" class="woocommerce-LoopProduct-link"><img
                                                    src="{{asset($item['product']['main_image'])}}" alt="Product Image"></a>
                                            <div class="product-variations">
                                                <span class="active"><a href="#"
                                                        style="background-color: #b78269;"></a></span>
                                                <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                <span><a href="#" style="background-color: #31749e;"></a></span>
                                                <span><a href="#" style="background-color: #672a4f;"></a></span>
                                            </div>
                                            <div class="on-sale"><span>{{$item['product']['discount']}}</span><span>% off</span></div>
                                            <div class="hover-area">
                                                <form action="{{route('shopping-cart.add')}}" method="post"
                                                    id="add-to-cart-form{{$item['product_id']}}">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$item['product_id']}}">

                                                    <div class="cart-button">
                                                        <a href="{{route('shopping-cart.add')}}"
                                                            onclick="event.preventDefault();
                                                       document.getElementById('add-to-cart-form{{$item['product_id']}}').submit();" class="button add_to_cart_button"
                                                            data-bs-toggle="tooltip" data-bs-placement="right" title=""
                                                            data-bs-original-title="Add to Cart"
                                                            aria-label="Add to Cart">Add to
                                                            Cart</a>
                                                    </div>
                                                </form>
                                                <div class="wishlist-button">
                                                    <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" title=""
                                                        data-bs-original-title="Add to Wishlist"
                                                        aria-label="Add to Wishlist">Wishlist</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="{{route('shop.productDetails',['name'=>$item['product']['name'],'id'=>$item['product_id']])}}">{{$item['product']['name']}}</a></h3>
                                            <div class="product-price">
                                                <div class="price">
                                                   @if (!$item['product']['discount'])
                                                                <ins>{{$item['product']['price']}}.00DH</ins>
                                                                @else
                                                                <ins>{{calculatePriceAfterDiscount($item['product']['price'],$item['product']['discount'])}}DH</ins>
                                                                <del>{{$item['product']['price']}}.00DH</del>
                                                                @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endif
                <!--==================== Recomended For You Section End ====================-->
            </div>
        </div>
    </div>
</div>

@endsection
