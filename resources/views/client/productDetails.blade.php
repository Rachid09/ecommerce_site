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
{{-- @section('breadcrumb')
@include('client.includes.breadcrumb',['title'=>$title])
@endsection --}}

@section('content')
<div class="full-row">
    <div class="container">
        <div class="row single-product-wrapper">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="product-images">
                    <div class="images-inner">
                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                            data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                            <figure class="woocommerce-product-gallery__wrapper">
                                <div class="bg-light">
                                    <img id="single-image-zoom" src="{{$product['main_image']}}" alt="Thumb Image"
                                        data-zoom-image="{{$product['main_image']}}" />
                                </div>

                                <div id="gallery_09" class="product-slide-thumb">
                                    <div class="owl-carousel four-carousel dot-disable nav-arrow-middle owl-mx-5">
                                        @foreach ($product['product_images'] as $item)
                                        <div class="item">
                                            <a class="active" href="#" data-image="{{$item['product_image']}}"
                                                data-zoom-image="{{$item['product_image']}}">
                                                <img src="{{$item['product_image']}}" alt="Thumb Image" />
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-7">
                <div class="summary entry-summary">
                    <div class="summary-inner">
                        <div class="product-navigation-share">
                            <div class="product-share bigbazar-arrow">
                                <div class="bigbazar-social">
                                    <a href="#" class="social-facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="social-telegram"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" class="social-pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="entry-breadcrumbs">
                            <nav class="breadcrumb-divider-slash" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('shop.all-products')}}">Shop</a></li>

                                    <li class="breadcrumb-item"><a
                                            href="{{route('shop.categoryProducts',['name'=>$product['maincategory']['libelle'],'id'=>$product['maincategory_id']])}}">{{$product['maincategory']['libelle']}}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$product['name']}}</li>
                                </ol>
                            </nav>
                        </div>
                        <h1 class="product_title entry-title">{{$product['name']}}</h1>
                        {{-- <div class="woocommerce-product-rating">
                                    <div class="fancy-star-rating">
                                         <div class="rating-wrap"> <span class="fancy-rating good">5 ★</span>
                                        </div>
                                        <div class="rating-counts-wrap">
                                            <a href="#reviews" class="bigbazar-rating-review-link" rel="nofollow"> <span class="rating-counts"> (2) </span> </a>
                                        </div>
                                    </div>
                                </div> --}}
                        <p class="price">
                            <span class="woocommerce-Price-amount amount">
                                <bdi><span class="woocommerce-Price-currencySymbol"></span>{{$product['price']}}Dh</bdi>
                            </span>
                            {{-- <span class="woocommerce-Price-amount amount">
                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>90.00</bdi>
                                    </span> --}}
                        </p>
                        <div class="product-price-discount"><span class="on-sale"><span>19</span>% Off</span>
                        </div>
                        <div class="product-price-summary exclamation-mark open">
                            <i class="fas fa-exclamation"></i>
                            <div class="price-summary">
                                <div class="price-summary-content">
                                    <ul class="price-summary-list">
                                        <li class="regular-price"> <label>Maximum Retail Price<br> <span>(incl. of all
                                                    taxes)</span> </label>
                                            <span style="text-decoration:line-through">
                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>99.00</bdi>
                                                </span>
                                            </span>
                                        </li>
                                        <li class="selling-price"> <label>Selling Price</label> <span><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>70.00</bdi>
                                                </span>
                                            </span>
                                        </li>
                                        <li class="discount"> <label>Discount</label> <span>19%</span></li>
                                        <li class="total-discount"> <label>Total</label> <span> <span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>70.00</bdi>
                                                </span>
                                            </span>
                                        </li>
                                        <li class="overall-discount"> Overall you save <span
                                                class="amount-discount"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>29.00</bdi>
                                                </span>
                                            </span> <span class="percentage-discount">(19%)</span> on this product</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="stock-availability in-stock">In Stock</div>
                        <div class="product-offers">
                            <ul class="product-offers-list">
                                <li class="product-offer-item"><span class="h6">Special Price</span> Get extra 19% off
                                    (price inclusive of discount)
                                    <div class="product-term-wrap"><span class="product-term-text bigbazar-ajax-block">T
                                            & C </span></div>
                                </li>
                                <li class="product-offer-item"><span class="h6">Bank Offer</span> 10% instant discount
                                    on VISA Cards
                                    <div class="product-term-wrap"><span class="product-term-text bigbazar-ajax-block">T
                                            & C </span></div>
                                </li>
                                <li class="product-offer-item"><span class="h6">No cost EMI $49/month.</span> Standard
                                    EMI also available
                                    <div class="product-term-wrap"><span
                                            class="product-term-text bigbazar-ajax-block">View Plans </span></div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="product-brands">
                                    <a class="brand-image" href="#"> <img src="assets/images/partner/1.png" class="attachment-full size-full" alt="" width="120" height="120"> </a>
                                </div> --}}
                        {{-- <div class="product-services">
                                    <span>Services:</span>
                                    <ul class="product-services-list">
                                        <li class="product-service-item"> 30 Day Return Policy</li>
                                        <li class="product-service-item"> Cash on Delivery available</li>
                                        <li class="product-service-item"> Free Delivery</li>
                                    </ul>
                                </div> --}}
                        {{-- <div class="woocommerce-product-details__short-description"> <span>Highlights:</span>
                                    <div class="short-description">
                                        <ul>
                                            <li>Regular Fit.</li>
                                            <li>Full sleeves.</li>
                                            <li>70% cotton, 30% polyester.</li>
                                            <li>Easy to wear and versatile as Casual.</li>
                                            <li>Machine wash, tumble dry.</li>
                                        </ul>
                                    </div>
                                </div> --}}
                        <form class="variations_form cart kapee-swatches-wrap" action="#" method="post"
                            enctype="multipart/form-data">
                            <table class="variations">
                                <tr>
                                    <td class="label"><label>Couleur</label></td>
                                    <td class="value with-swatches">
                                        <div class="bigbazar-swatches">
                                            <select aria-label="" name="color" class="select2 form-control">
                                                <optgroup label="choisir">
                                                    @foreach ($product['colors'] as $color)
                                                    <option value="{{$color['id'] }}">{{$color['name']}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><label>Size</label></td>
                                    <td class="value with-swatches">
                                        <div class="bigbazar-swatches">
                                            <span class="swatch swatch-label  swatch-circle swatch-selected"
                                                title="L"><span>L</span></span>
                                            <span class="swatch swatch-label term-m swatch-circle"
                                                title="M"><span>M</span></span>
                                            <span class="swatch swatch-label term-s swatch-circle"
                                                title="S"><span>S</span></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"></td>
                                    <td><a class="reset_variations" href="#">Reset All</a></td>
                                </tr>
                            </table>
                            <div class="single_variation_wrap">
                               <select class="custom-select" name="qty" id="quantity"">
                                            @for ($i = 1; $i <= $product['stock']; $i++)
                                                <option value="{{ $i }}">
                                                    {{ $i }}
                                                </option>
                                            @endfor
                                        </select>
                                <div
                                    class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">

                                    <form action="{{route('shopping-cart.add')}}" method="POST"
                                        id="add-to-cart-form{{$product['id']}}">
                                        @csrf
                                        <input type="hidden" name="product_id" id="id" value="{{$product['id']}}">

                                        <button
                                            onclick="event.preventDefault();
                                                 document.getElementById('add-to-cart-form{{$product['id']}}').submit();"
                                            class="single_add_to_cart_button button alt single_add_to_cart_ajax_button">Add
                                            to cart</button>
                                    </form>


                                    <div class="bigbazar-quick-buy">
                                        <button
                                            class="bigbazar_quick_buy_button bigbazar_quick_buy_variable bigbazar_quick_buy_58"
                                            value="Buy Now">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="yith-wcwl-add-to-wishlist wishlist-fragment">
                            <div class="wishlist-button">
                                <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right"
                                    title="" data-bs-original-title="Add to Wishlist"
                                    aria-label="Add to Wishlist">Wishlist</a>
                            </div>
                        </div>
                        <div class="product_meta"><span class="posted_in">Category: <a
                                    href="{{route('shop.categoryProducts',['name'=>$product['maincategory']['libelle'],'id'=>$product['maincategory_id']])}}"
                                    rel="tag">{{$product['maincategory']['libelle']}}</a></span></div>
                        <div class="bigbazar-wc-message"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================== Product Description Section Start ====================-->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head border-bottom">
                    <div class="woocommerce-tabs wc-tabs-wrapper ps-0">
                        <ul class="nav nav-pills wc-tabs" id="pills-tab-one" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-description-one-tab" data-bs-toggle="pill"
                                    href="#pills-description-one" role="tab" aria-controls="pills-description-one"
                                    aria-selected="true">Description</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="woocommerce-tabs wc-tabs-wrapper ps-0 mt-0">
                    <div class="tab-content" id="pills-tabContent-one">
                        <div class="tab-pane fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--description"
                            id="pills-description-one" role="tabpanel" aria-labelledby="pills-description-one-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2 class="my-3">Product Description</h2>
                                    <p>{{$product['description']}}</p>

                                </div>
                                <div class="col-lg-6">
                                    <h2 class="my-3">Payment & Shipment:</h2>
                                    <div class="detailmodule_text">
                                        <ul class="detail-desc-decorate-content">
                                            Nous acceptons Alipay, Paypal, Western Union, TT. Toutes les principales
                                            cartes de crédit sont acceptées via le processeur de paiement sécurisé
                                            ESCROW.
                                            2. Si vous avez besoin d'un moyen d'expédition plus rapide, nous vous
                                            recommandons l'expédition standard Aliexpress. Vous pouvez également choisir
                                            DHL, Fedx.
                                            3. Tous les articles seront expédiés dans les 2 jours ouvrables, aux
                                            États-Unis, en France, au Royaume-Uni avec 1 à 5 semaines, au Canada, en
                                            Australie, en Russie et entre 2 et 5 semaines environ.
                                            4. En outre, le retard ou l'échec de la livraison est parfois causé par la
                                            politique de différentes douanes, par exemple, le pointeur laser est
                                            inacceptable dans certains pays.
                                        </ul>
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
<!--==================== Product Description Section End ====================-->

<!--==================== Related Products Section Start ====================-->
<div class="full-row pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-head border-bottom d-flex justify-content-between align-items-end mb-2">
                    <div class="d-flex section-head-side-title">
                        <h4 class="font-600 text-dark mb-0">Produits similaires</h4>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="products product-style-1 owl-mx-5">
                    <div
                        class="five-carousel owl-carousel nav-top-right e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">
                        @foreach ($related_products as $item)
                        <div class="item">
                            <div class="product type-product">
                                <div class="product-wrapper">
                                    <div class="product-image">
                                        <a href="single-shop.html" class="woocommerce-LoopProduct-link"><img
                                                src="{{$item['main_image']}}" alt="Product Image"></a>
                                        <div class="product-variations">
                                            <span class="active"><a href="#"
                                                    style="background-color: #b78269;"></a></span>
                                            <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                            <span><a href="#" style="background-color: #31749e;"></a></span>
                                            <span><a href="#" style="background-color: #672a4f;"></a></span>
                                        </div>
                                        <div class="on-sale">{{$item['discount']}}</div>
                                        <div class="hover-area">
                                            <form action="{{route('shopping-cart.add')}}" method="post"
                                                id="add-to-cart-form{{$item['id']}}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$item['id']}}">
                                                {{-- <input type="hidden" name="name" value="{{$item['name']}}">
                                                <input type="hidden" name="price" value="{{$item['price']}}"> --}}
                                                <div class="cart-button">
                                                    <a href="{{route('shopping-cart.add')}}" onclick="event.preventDefault();
                                                 document.getElementById('add-to-cart-form{{$item['id']}}').submit();"
                                                        class="button add_to_cart_button" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" title=""
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
                                            <div class="compare-button">
                                                <a class="compare button" href="#" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title="" data-bs-original-title="Compare"
                                                    aria-label="Compare">Compare</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="">{{$item['name']}}</a></h3>
                                        <div class="product-price">
                                            <div class="price">
                                                <ins>{{$item['price']}}Dh</ins>
                                                <del>$32.28</del>
                                            </div>
                                        </div>
                                        <div class="shipping-feed-back">
                                            <div class="star-rating">
                                                <div class="rating-wrap">
                                                    <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.7
                                                            (35)</span></a>
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
            </div>
        </div>
    </div>
</div>
<!--==================== Related Products Section End ====================-->


@endsection
@section('zoomScript')
<!-- Initializing the slider -->
<script>
    //initiate the plugin and pass the id of the div containing gallery images
    $("#single-image-zoom").elevateZoom({
        gallery: 'gallery_09',
        zoomType: "inner",
        cursor: "crosshair",
        galleryActiveClass: 'active',
        imageCrossfade: true,
        loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
    });
    //pass the images to Fancybox
    $("#single-image-zoom").bind("click", function (e) {
        var ez = $('#single-image-zoom').data('elevateZoom');
        $.fancybox(ez.getGalleryList());
        return false;
    });
</script>
@endsection
