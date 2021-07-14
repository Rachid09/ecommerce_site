@extends('layouts.client')
@section('top-header')
 @include('client.includes.top-header')
@endsection
@section('bottom-header')
@include('client.includes.bottom-header')
@endsection
@section('mobile-header')
@include('client.includes.mobile-header')
@endsection
@section('breadcrumb')

@endsection

@section('content')

        <div class="full-row p-0 bg-light">
            <div id="slider" style="width:1200px; height:650px; margin:0 auto; margin-bottom:0px;">
                <!-- Slide 1-->
                <div class="ls-slide" data-ls="duration:8000; transition2d:4; kenburnsscale:1.2;">
                    <img width="1920" height="750" src="assets/images/slider/22.png" class="ls-bg" alt="" style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:100%;" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.5; position:fixed;">

                    <p style="width:450px; font-size:80px; line-height:60px; top:40%; left:100px; white-space:normal;" class="ls-l higlight-font font-700 ls-hide-phone text-dark" data-ls="offsetyin:150; durationin:700; delayin:500; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                        Beauty Care
                    </p>
                    <p style="font-size:14px; letter-spacing: 2px; line-height:20px; top:28%; left:100px;" class="ls-l ordenery-font text-dark text-uppercase font-700 ls-hide-phone" data-ls="offsetyin:150; durationin:700; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">Deal Upto 30%</p>

                    <p style="width:580px; font-weight:600; font-size:15px; line-height:30px; top:58%; left:120px; white-space:normal;" class="ls-l ls-hide-phone text-dark ordenery-font text-uppercase" data-ls="offsetxin:150; durationin:700; easingin:easeOutBack; rotatexin:20; scalexin:1; offsetyout:600; durationout:400; parallaxlevel:0; delayin:900;">Price Starting<br>From <span class="text-primary font-600 font-large"> $29.99</span></p>

                    <div style="width:3px; height:60px; border-radius:0; top:58%; left:100px;" class="ls-l ls-hide-phone bg-primary" data-ls="offsetxin:100; easingin:easeOutBack; delayin:700; durationout:400; offsetxout:-20; parallax:false; parallaxlevel:1;"></div>

                    <a class="ls-l ls-hide-phone" href="#" target="_self" data-ls="offsetyin:150; durationin:700; delayin:1200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; hover:true; hoveropacity:1; hoverbgcolor:#e74c3c ; parallaxlevel:0;">
                        <p style="cursor:pointer;padding-top:8px; padding-bottom:8px; font-weight: 500; font-size:14px; top:72%; left:100px; padding-right:25px; padding-left:25px; line-height:28px;" class="bg-dark text-white">SHOP NOW</p>
                    </a>
                </div>

                <!-- Slide 2-->
                <div class="ls-slide" data-ls="duration:8000; transition2d:4; kenburnsscale:1.2;">
                    <img width="1920" height="750" src="assets/images/slider/22.png" class="ls-bg" alt="" style="top:50%; left:50%; text-align:initial; font-weight:400; font-style:normal; text-decoration:none; mix-blend-mode:normal; width:100%;" data-ls="showinfo:1; durationin:2000; easingin:easeOutExpo; scalexin:1.5; scaleyin:1.5; position:fixed;">

                    <p style="width:450px; font-size:80px; line-height:60px; top:40%; left:100px; white-space:normal;" class="ls-l higlight-font font-700 ls-hide-phone text-dark" data-ls="offsetyin:150; durationin:700; delayin:500; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                        Beauty Care
                    </p>
                    <p style="font-size:14px; letter-spacing: 2px; line-height:20px; top:28%; left:100px;" class="ls-l ordenery-font text-dark text-uppercase font-700 ls-hide-phone" data-ls="offsetyin:150; durationin:700; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">Deal Upto 30%</p>

                    <p style="width:580px; font-weight:600; font-size:15px; line-height:30px; top:58%; left:120px; white-space:normal;" class="ls-l ls-hide-phone text-dark ordenery-font text-uppercase" data-ls="offsetxin:150; durationin:700; easingin:easeOutBack; rotatexin:20; scalexin:1; offsetyout:600; durationout:400; parallaxlevel:0; delayin:900;">Price Starting<br>From <span class="text-primary font-600 font-large"> $29.99</span></p>

                    <div style="width:3px; height:60px; border-radius:0; top:58%; left:100px;" class="ls-l ls-hide-phone bg-primary" data-ls="offsetxin:100; easingin:easeOutBack; delayin:700; durationout:400; offsetxout:-20; parallax:false; parallaxlevel:1;"></div>

                    <a class="ls-l ls-hide-phone" href="#" target="_self" data-ls="offsetyin:150; durationin:700; delayin:1200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; hover:true; hoveropacity:1; hoverbgcolor:#e74c3c ; parallaxlevel:0;">
                        <p style="cursor:pointer;padding-top:8px; padding-bottom:8px; font-weight: 500; font-size:14px; top:72%; left:100px; padding-right:25px; padding-left:25px; line-height:28px;" class="bg-dark text-white">SHOP NOW</p>
                    </a>
                </div>
            </div>
        </div>
        <!--==================== Slider Section End ====================-->

        <!--==================== Shop By Categories Section Start ====================-->
        <div class="full-row pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-head d-flex justify-content-between align-items-center pb-20">
                            <h3 class="text-secondary mb-0">Shop By Categories</h3>
                            <a href="#" class="btn-link-down-line text-uppercase font-small">See More Categories</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row row-cols-lg-2 row-cols-1">
                            @foreach ($maincategories as $cat)
                            <div class="col">
                                <div class="banner-wrapper hover-img-zoom banner-one custom-class-113">
                                    <div class="banner-image overflow-hidden transation" style="height:400px"><img src="{{$cat->photo}}" alt="Banner Image" style="object-fit: cover"></div>
                                    <div class="banner-content position-absolute">
                                        <span class="d-block font-500 font-small text-uppercase mb-2">Sale Upto 50%</span>
                                        <h4><a href="#" class="text-primary text-decoration-none">{{$cat->libelle}}</a></h4>
                                        <a href="#" class="btn-link-down-line mt-20 text-uppercase">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                                {{-- <div class="banner-wrapper hover-img-zoom banner-one custom-class-113">
                                    <div class="banner-image overflow-hidden transation"><img src="{{asset('public/images/CHABICHIC_MARS21_300dpi_josephouechen-2_2048x.jpg')}}" alt="Banner Image"></div>
                                    <div class="banner-content position-absolute">
                                        <span class="font-500 font-small text-uppercase d-block mb-2">Fat Loss</span>
                                        <h4><a href="#" class="text-primary text-decoration-none">Organic Tea</a></h4>
                                        <a href="#" class="btn-link-down-line mt-20 text-uppercase">Shop Now</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Shop By Categories Section End ====================-->

        <!--==================== Exclusive Product Section Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="text-primary text-center pb-2 d-table mx-auto tagline text-uppercase font-small">Prduits exclusives</span>
                        <h3 class="mb-4 w-50 text-center mx-auto w-sm-100 font-700 text-dark">Les dernieres produits</h3>
                    </div>
                </div>
				<div class="row">
					<div class="col-12">
						<div class="products product-style-3">
							<div class="row g-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-image-bg-light e-hover-image-zoom e-btn-set-hover-primary">

                                @foreach ($latest_prod as $item)
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="{{$item->main_image}}" alt="Product Image"></a>
                                                <div class="product-labels">
                                                    <div class="badge1"><span>Nouveau</span></div>
                                                </div>
                                                <div class="on-sale">-60%</div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-title"><a href="#">{{$item->name}}</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>{{$item->price}}Dh</ins>
                                                        {{-- <del>$98.00</del> --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div> --}}
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(563)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>65</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    {{-- <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                    </div> --}}
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
        <!--==================== Exclusive Product Section End ====================-->

        <!--==================== Special Offer Section Start ====================-->
        <div class="full-row" style="background: url(assets/images/background/1.png) no-repeat center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="p-50 text-white bg-primary">
                            <div class="text-uppercase text-white font-500">Special Offer</div>
                            <h1 class="text-white my-4">Special Beauty Care Available</h1>
                            <div class="font-medium w-75">
                                <p>On purchases with your City Furniture Credit Card from 6/16/2021 – 7/6/2021.</p>
                            </div>
                            <a href="#" class="btn btn-dark mt-4">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Special Offer Section End ====================-->

        <!--==================== Trending Products Section Start ====================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <span class="text-primary text-center pb-2 d-table mx-auto tagline text-uppercase font-small">Top</span> --}}
                        <h3 class="mb-4 w-50 text-center mx-auto w-sm-100 font-700 text-dark">Top produits</h3>
                    </div>
                </div>
				<div class="row">
					<div class="col-12">
						<div class="products product-style-3">
							<div class="row g-3 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-image-bg-light e-hover-image-zoom e-btn-set-hover-primary">

                                @foreach ($featured as $item)
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="{{$item->main_image}}" alt="Product Image"></a>
                                                <div class="product-labels">
                                                    <div class="badge1"><span>On top</span></div>
                                                </div>
                                                <div class="on-sale">-60%</div>
                                            </div>
                                            <div class="product-info">
                                                <h3 class="product-title"><a href="#">{{$item->name}}</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>{{$item->price}}Dh</ins>
                                                        {{-- <del>$98.00</del> --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div> --}}
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(563)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>65</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    {{-- <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                    </div> --}}
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
        <!--==================== Trending Products Section End ====================-->

        <!--==================== Banner Section Start ====================-->
        {{-- <div class="full-row p-0 d-none d-sm-block">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-1 g-3">
                    <div class="col">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-112">
                            <div class="banner-image overflow-hidden transation"><img src="assets/images/banner/63.png" alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <span class="text-dark font-500 font-small text-uppercase d-block mb-2">Natural Product</span>
                                <h4><a href="#" class="text-dark font-700 text-decoration-none">Beauty Essintial Product</a></h4>
                                <div class="font-fifteen">
                                    <p>Turpis pulvinar amet sodales. Dui eget interdum molestie vivamus tempus.</p>
                                </div>
                                <a href="#" class="btn-link-down-line mt-20 text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-112">
                            <div class="banner-image overflow-hidden transation"><img src="assets/images/banner/64.png" alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <span class="text-dark font-500 font-small text-uppercase d-block mb-2">Sale Upto 30%</span>
                                <h4><a href="#" class="text-dark font-700 text-decoration-none">Beauty Essintial Product</a></h4>
                                <div class="font-fifteen">
                                    <p>Turpis pulvinar amet sodales. Dui eget interdum molestie vivamus tempus.</p>
                                </div>
                                <a href="#" class="btn-link-down-line mt-20 text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--==================== Banner Section End ====================-->

        <!--==================== Best Selling Products Section Start ====================-->
        {{-- <div class="full-row pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-head d-flex justify-content-between align-items-center pb-20">
                            <h3 class="font-700 text-secondary mb-0 down-line">Best Selling Products</h3>
                            <a href="#" class="btn-link-down-line text-uppercase font-small">View all products</a>
                        </div>
                    </div>
                </div>
                <div class="row g-3 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-1 product-list e-hover-image-zoom e-btn-set-two">
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-229.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Beauty Bee Harbal</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$27.50</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-230.png" alt="Product Image"></a>
                                    <div class="on-sale">- 10%</div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Hawaiian Tropic</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$18.00</ins>
                                            <del>$28.00</del>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-231.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Ariana Grande Ari</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$31.00</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-232.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Women Night Cream</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$17.99</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-233.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Harbal Facial Jel</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$12.00</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-223.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Organic Facial</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$38.70</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-234.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Make Up For Ever</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$25.00</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-235.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Advice Smoothing</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$20.00</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-236.png" alt="Product Image"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="#">Makeup Utility</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$20.25</ins>
                                        </div>
                                    </div>
                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                    <div class="shipping-feed-back">
                                        <div class="star-rating">
                                            <div class="rating-wrap">
                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                            </div>
                                            <div class="rating-counts-wrap">
                                                <a href="#">(563)</a>
                                            </div>
                                        </div>
                                        <div class="sold-items">
                                            <span>65</span> <span>Sold</span>
                                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--==================== Best Selling Products Section End ====================-->

        <div class="full-row pb-0">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="owl-carousel dot-disable nav-disable six-carousel">
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-221.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-221.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-222.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-222.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-223.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-223.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-224.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-224.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-225.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-225.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-226.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-226.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-227.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-227.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-228.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-228.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="hover-img-zoom overflow-hidden transation">
                                    <a href="assets/images/products/squire-229.png" data-fancybox="gallery" data-caption="Caption for single image">
                                        <img class="transation" src="assets/images/products/squire-229.png" alt="Image not found!">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
