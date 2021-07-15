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
                            <div id="woocommerce_product_categories-4" class="widget woocommerce widget_product_categories widget-toggle">
                                <h2 class="widget-title">Product categories</h2>
                                <ul class="product-categories">
                                    @foreach ($categories as $cat)
                                    <li class="cat-item cat-parent">
                                        <a href="{{route('shop.categoryProducts',['name'=>$cat->libelle,'id'=>$cat->id])}}">{{$cat->libelle}}<span class="count">(7)</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="bigbazar-price-filter-list-1" class="widget bigbazar_widget_price_filter_list widget_layered_nav widget-toggle">
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
                            <div id="bigbazar-attributes-filter-3" class="widget woocommerce bigbazar-attributes-filter widget_layered_nav widget-toggle">
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
                                    <div class="section-head border-bottom d-flex justify-content-between align-items-center mt-30">
                                        <div class="d-flex section-head-side-title">
                                            <h5 class="font-700 text-dark mb-0">Recent Product</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-style-2 owl-carousel owl-nav-hover-primary nav-top-right single-carousel dot-disable product-list e-bg-white">
                                        <div class="item">
                                            <div class="row row-cols-1">
                                                @foreach ($latest_products as $item)
                                                      <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="{{$item->main_image}}" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Fanqieliu Real 925 Sterling Silver Drop  Earrings Flower Purple</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$6.00</ins>
                                                                        <del>$10.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>40</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.95</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(273)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row row-cols-1">
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-37.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Game The Legend of Zelda Solid Color Printed T-shirt</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$17.96 - 25.50</ins>
                                                                    </div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(343)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-40.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Anti-static Comb Large Wide Toothed  Comb Salon Hair Comb for T</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$35.00</ins>
                                                                        <del>$50.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>30</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(163)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-38.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Ladies Tops Shirt Blusas Mujer Women  Blouse 2019 Autumn Causal</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$25.00</ins>
                                                                        <del>$50.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>50</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.8</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(374)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-39.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Luxury Brand Handbag New Fashion  Simple Square bag Quality</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$20.00</ins>
                                                                        <del>$25.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>20</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.8</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(264)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row row-cols-1">
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-44.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">CNYISHE Elegant Satin  V-neck Ladies Christmas Party Night Dress</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$45.00</ins>
                                                                        <del>$50.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>10</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.75</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(538)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-45.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Men Genuine Leather Handbags Business Travel Shoulder Bag</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$15.00</ins>
                                                                        <del>$25.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>40</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(216)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-36.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Women Ice Silk Sleepwear Female Nightgown Women Nightwear</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$36.00</ins>
                                                                        <del>$50.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>28</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.95</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(263)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-46.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Mini Wireless Bluetooth  5.0 Earphone in Ear Sport</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$3.00</ins>
                                                                        <del>$5.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>40</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(253)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row row-cols-1">
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-23.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Fashion Mens Suit Jackets Slim  3 Pieces Suit Blazer Business</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$30.00</ins>
                                                                        <del>$50.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>40</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(63)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-47.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Single ButtonWomen's Winter Jackets And Coats Thicken Long Plus Size</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$3.00</ins>
                                                                        <del>$5.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>40</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(253)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-24.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Brand android television TV 32 40 46</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$700.00</ins>
                                                                        <del>$1000.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>30</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(97)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="product type-product">
                                                        <div class="product-wrapper">
                                                            <div class="product-image">
                                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-14.png" alt="Product Image"></a>
                                                                <div class="wishlist-view">
                                                                    <div class="quickview-button">
                                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                                    </div>
                                                                    <div class="whishlist-button">
                                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title"><a href="single-shop.html">Men LED Digital Watches Women Sport Silicone</a></h3>
                                                                <div class="product-price">
                                                                    <div class="price">
                                                                        <ins>$65.00</ins>
                                                                        <del>$100.00</del>
                                                                    </div>
                                                                    <div class="on-sale"><span>35</span><span>% off</span></div>
                                                                </div>
                                                                <div class="shipping-feed-back">
                                                                    <div class="star-rating">
                                                                        <div class="rating-wrap">
                                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7</span></a>
                                                                        </div>
                                                                        <div class="rating-counts-wrap">
                                                                            <a href="#">(73)</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="products-header d-flex justify-content-between align-items-center py-10 px-20 bg-light md-mt-30">
                            <div class="products-header-left d-flex align-items-center">
                                <h6 class="woocommerce-products-header__title page-title">{{$navbarTitle}}</h6>
                                <div class="woocommerce-result-count"> (1 – 28 produits parmi {{$totalProducts}} produits )</div>
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
                                    <a class="grid-view active" data-shopview="grid-view" href=""><i class="flaticon-menu-1 flat-mini"></i></a>
                                    {{-- <a class="list-view" data-shopview="list-view" href="shop-list-left-sidebar.html"><i class="flaticon-list flat-mini"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="showing-products pt-30 pb-50 border-2 border-bottom border-light">
                            <div class="row row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 product-style-1 e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">
                                @foreach ($products as $item)
                                    <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="{{route('shop.productDetails',['name'=>$item->name,'id'=>$item->id])}}" class="woocommerce-LoopProduct-link"><img src="{{$item->main_image}}" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="on-sale">- 20%</div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-title"><a href="single-shop.html">{{$item->name}}</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>{{$item->price}}Dh</ins>
                                                        <del>32.28Dh</del>
                                                    </div>
                                                </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-3">
                            <div class="showing-result">Voir 1 – 28 parmi {{$totalProducts}} resultats</div>
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
                        <div class="row mt-50">
                            <div class="col-12">
                                <div class="section-head d-flex justify-content-between align-items-end">
                                    <div class="d-flex">
                                        <h4 class="font-600 text-secondary mb-0 pb-1">Recomended For You</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-style-1 owl-carousel owl-item-mb-50 owl-mx-5 owl-nav-hover-primary nav-top-right four-carousel product-carousel dot-disable e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/height-12.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="on-sale">- 20%</div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="single-shop.html">Women Fish Cut Cloth</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$17.00</ins>
                                                            <del>$32.28</del>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/height-13.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="single-shop.html">Blazar Jins Coat</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$25.62.00</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/height-14.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="product-labels">
                                                        <div class="badge1"><span>New</span></div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="single-shop.html">Fashion Summer Cloth</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$34.88</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/height-15.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="product-labels">
                                                        <div class="badge1"><span>New</span></div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="single-shop.html">Women Modern Bags</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$32.88</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/height-11.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="product-labels">
                                                        <div class="badge1"><span>New</span></div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="single-shop.html">Women Fish Cut Cloth</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$106.88</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/height-8.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="product-labels">
                                                        <div class="badge1"><span>New</span></div>
                                                    </div>
                                                    <div class="on-sale">- 20%</div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Cart" aria-label="Add to Cart">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-title"><a href="single-shop.html">Blazar Jins Coat</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$38.00</ins>
                                                            <del>$40.00</del>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7 (35)</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--==================== Recomended For You Section End ====================-->
                    </div>
                </div>
            </div>
        </div>



         {{-- <!--============== Modal Start ==============-->
        <div class="overlay-dark modal fade quick-view-modal" id="quick-view">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="close view-close">
                        <i class="flaticon-cancel"></i>
                    </div>
                    <div class="modal-body property-block summary p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="e-hover-image-zoom e-image-bg-light">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-2.png" alt="Product Image"></a>
                                                <ul class="position-absolute quick-meta">
                                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Transfer" aria-label="Transfer"><i class="flaticon-transfer flat-mini"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Wishlist" aria-label="Wishlist"><i class="flaticon-like flat-mini"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Share" aria-label="Share"><i class="flaticon-share flat-mini"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print" aria-label="Print"><i class="flaticon-printer flat-mini"></i></a></li>
                                                </ul>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="e-hover-image-zoom e-image-bg-light">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Apparel Accessories</a></div>
                                                <h3 class="product-title"><a href="single-shop.html">Osteoarthrit Anti Arthritis Health Compression Therapy Gloves</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$15.00 - 22.92</ins>
                                                    </div>
                                                    <span class="text-white font-mini px-2 rounded product-status ms-5 my-1 bg-primary"><i class="fas fa-check"></i> Available</span>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$1.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(543)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>142</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="product-offers mt-3">
                                                    <ul class="product-offers-list">
                                                        <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                                        <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                                        <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                                    </ul>
                                                </div>
                                                <h5 class="text-secondary my-3">Description</h5>
                                                <p>Bibendum purus aenean mus aenean eu interdum nonummy ipsum ad consequat. Dui eros donec faucibus convallis tempus rutrum id donec mus hymenaeos placerat congue curae mauris turpis</p>
                                                <div class="short-description d-flex">
                                                    <span class="me-4"><b>Highlights:</b></span>
                                                    <div class="short-description">
                                                        <ul class="list-style-tick">
                                                            <li>Regular Fit.</li>
                                                            <li>Full sleeves.</li>
                                                            <li>Machine wash, tumble dry.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="compare-button">
                                                        <a href="#">Compare</a>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
@endsection






