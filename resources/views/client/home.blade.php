@extends('layouts.client')

@section('content')

<!--==================== Banner Section Start ====================-->
<div class="full-row p-0">
    <div class="container">
        <div class="row g-3">
            <div class="col-xl-3 col-md-6 order-xl-1">
                <div class="row row-cols-1 g-3">
                    <div class="col">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-127" style="background-color:#e9fae1">
                            <div class="banner-image overflow-hidden transation"><img src={{asset("public/images/102.png")}} alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <h4 class="title"><a href="shop-grid.html">Wood Products</a></h4>
                                <p>Wood made handicrafts chair</p>
                                <a href="shop-grid.html" class="btn btn-outline-secondary rounded-0">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-128" style="background-color:#f2f0f6">
                            <div class="banner-image overflow-hidden transation"><img src={{asset("public/images/102.png")}} alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <h4 class="title"><a href="shop-grid.html">Lamp Sades</a></h4>
                                <p>Modern and colorful products</p>
                                <a href="shop-grid.html" class="btn btn-outline-secondary rounded-0">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 order-xl-3">
                <div class="row row-cols-1 g-3">
                    <div class="col">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-130" style="background-color:#f2f1ef">
                            <div class="banner-image overflow-hidden transation"><img src={{asset("public/images/102.png")}} alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <h4 class="title"><a href="shop-grid.html">Home Decor</a></h4>
                                <p>Hand made home showpices</p>
                                <a href="shop-grid.html" class="btn btn-outline-secondary rounded-0">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="banner-wrapper hover-img-zoom banner-one custom-class-131" style="background-color: #ebfcf9">
                            <div class="banner-image overflow-hidden transation"><img src={{asset("public/images/102.png")}} alt="Banner Image"></div>
                            <div class="banner-content position-absolute">
                                <h4 class="title"><a href="shop-grid.html">Kitchen Tools</a></h4>
                                <p>Woodmade kitchen products</p>
                                <a href="shop-grid.html" class="btn btn-outline-secondary rounded-0">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 order-xl-2">
                <div class="banner-wrapper hover-img-zoom banner-one custom-class-129">
                    <div class="banner-image overflow-hidden transation"><img src={{asset("public/images/104.png")}} alt="Banner Image"></div>
                    <div class="banner-content position-absolute">
                        <span class="d-table text-uppercase text-white font-fifteen font-500 mb-2">New Arrival</span>
                        <h2 class="title"><a href="shop-grid.html">Handicrafts Tools <br>30% Sale Off</a></h2>
                        <div class="font-seventeen text-secondary">
                            <p>Our handicarfts products look unique and colorful</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Banner Section End ====================-->

<!--==================== Service Section Start ====================-->
<div class="full-row bg-white pt-5 pb-0">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 gy-4 gy-xl-0">
            <div class="col">
                <div class="simple-service md-my-10 d-flex align-items-center">
                    <div class="box-50px rounded-pill position-relative bg-white"><i class="flaticon-money flat-medium text-secondary xy-center position-absolute"></i></div>
                    <div class="ms-3">
                        <h5 class="mb-1 font-500 font-fifteen"><a href="service.html" class="text-dark hover-text-primary transation-this">Money Gurantee</a></h5>
                        <div class="font-small text-secondary">
                            <span>With A 30 Days</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="simple-service md-my-10 d-flex align-items-center">
                    <div class="box-50px rounded-pill position-relative bg-white"><i class="flaticon-online-chat flat-medium text-secondary xy-center position-absolute"></i></div>
                    <div class="ms-3">
                        <h5 class="mb-1 font-500 font-fifteen"><a href="service.html" class="text-dark hover-text-primary transation-this">Best Online Support</a></h5>
                        <div class="font-small text-secondary">
                            <span>Hour: 10:00AM - 5:00PM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="simple-service md-my-10 d-flex align-items-center">
                    <div class="box-50px rounded-pill position-relative bg-white"><i class="flaticon-saving flat-medium text-secondary xy-center position-absolute"></i></div>
                    <div class="ms-3">
                        <h5 class="mb-1 font-500 font-fifteen"><a href="service.html" class="text-dark hover-text-primary transation-this">Win $100 To Shop</a></h5>
                        <div class="font-small text-secondary">
                            <span>Enter Now</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="simple-service md-my-10 d-flex align-items-center">
                    <div class="box-50px rounded-pill position-relative bg-white"><i class="flaticon-airplane flat-medium text-secondary xy-center position-absolute"></i></div>
                    <div class="ms-3">
                        <h5 class="mb-1 font-500 font-fifteen"><a href="service.html" class="text-dark hover-text-primary transation-this">Free Shipping</a></h5>
                        <div class="font-small text-secondary">
                            <span>Order Over $100</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Service Section End ====================-->

<!--==================== Hot Offers Section Start ====================-->
<div class="full-row pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="text-uppercase text-primary font-medium">Hot Offers</div>
                <h3 class="my-3">Best Handicraft Product Running On Sale</h3>
                <div class="text-uppercase font-500 sale-upto">
                    <span>Sale Up To</span>
                    <span class="ms-2">50%</span>
                </div>
                <a href="shop-grid.html" class="btn-link-down-line">Shop Now</a>
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="row row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-1 e-title-hover-primary e-hover-image-zoom e-btn-set-four cart-slide-left e-info-center">
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/ASSIETTEX2FLEURSORANGECLAIREROSE1_51ffe19e-8376-43f0-83c5-40ba4569de05copy_grande_cropped.jpg" alt="Product Image"></a>
                                    <div class="on-sale">- 30%</div>
                                    <div class="hover-area">
                                        <div class="quickview-button">
                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
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
                                    <h3 class="product-title"><a href="shop-grid.html">Wood Table Clock</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$12.00</ins>
                                            <del>$23.00</del>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/ASSIETTEX2FLEURSORANGECLAIREROSE1_51ffe19e-8376-43f0-83c5-40ba4569de05copy_grande_cropped.jpg" alt="Product Image"></a>
                                    <div class="on-sale">- 30%</div>
                                    <div class="hover-area">
                                        <div class="quickview-button">
                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
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
                                    <h3 class="product-title"><a href="shop-grid.html">Men Cotton Dress Shirts</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$17.00</ins>
                                            <del>$32.28</del>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/CARAFE_PM_1ad5d8b1-f6fa-4494-9937-03639070f38b_grande_cropped.jpg" alt="Product Image"></a>
                                    <div class="on-sale">- 30%</div>
                                    <div class="hover-area">
                                        <div class="quickview-button">
                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
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
                                    <h3 class="product-title"><a href="shop-grid.html">Men Cotton Dress Shirts</a></h3>
                                    <div class="product-price">
                                        <div class="price">
                                            <ins>$17.00</ins>
                                            <del>$32.28</del>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Hot Offers Section End ====================-->

<!--==================== Categroy Section Start ====================-->
<div class="full-row">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4 col-md-12">
                <div class="banner-wrapper hover-img-zoom banner-one custom-class-133">
                    <div class="banner-image overflow-hidden transation"><img src="public/images/105.png" alt="Banner Image"></div>
                    <div class="banner-content position-absolute">
                        <div class="text-uppercase text-primary font-500 font-small">Home Decor</div>
                        <h3 class="my-2">Hexagon Stands</h3>
                        <div class="font-500 sale-upto">
                            <span class="text-secondary">Sale Up To</span>
                            <span class="ms-2">30% Off</span>
                        </div>
                        <a href="single-shop.html" class="btn btn-primary rounded-0">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 g-0 coustom-categories-banner-2 e-wrapper-absolute e-hover-image-zoom">
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html"><img src="public/images/CHABICHIC_MAY_2012_300dpi_josephouechen-42_grande_cropped.jpg" alt="Product image"></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title"><a href="shop-grid.html">Kithcen Tools</a></h6>
                                    <span class="strok text-primary">(143)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html"><img src="public/images/CHABICHIC_MARS21_300dpi_josephouechen-2_2048x.jpg" alt="Product image"></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title"><a href="shop-grid.html">Baby Cloth</a></h6>
                                    <span class="strok text-primary">(143)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html"><img src="public/images/CHABICHIC_MAY_2012_300dpi_josephouechen-42_grande_cropped.jpg" alt="Product image"></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title"><a href="shop-grid.html">Bages</a></h6>
                                    <span class="strok text-primary">(35)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html"><img src="public/images/CHABICHIC_MARS21_300dpi_josephouechen-30_5a3d135e-1243-473a-8d39-759dfca2e31c_grande_cropped.jpg" alt="Product image"></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title"><a href="shop-grid.html">Home Decor</a></h6>
                                    <span class="strok text-primary">(170)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html"><img src="public/images/CHABICHIC_MAY_2012_300dpi_josephouechen-5_grande_cropped.jpg" alt="Product image"></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title"><a href="shop-grid.html">Kids Toys</a></h6>
                                    <span class="strok text-primary">(89)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product type-product">
                            <div class="product-wrapper">
                                <div class="product-image">
                                    <a href="shop-grid.html"><img src="public/images/CHABICHIC_MARS21_300dpi_josephouechen-30_5a3d135e-1243-473a-8d39-759dfca2e31c_grande_cropped.jpg" alt="Product image"></a>
                                </div>
                                <div class="product-info">
                                    <h6 class="product-title"><a href="shop-grid.html">Clothing</a></h6>
                                    <span class="strok text-primary">(99)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Categroy Section End ====================-->

<!--==================== Top Collection Section Start ====================-->
<div class="full-row pt-3 px-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-7 col-lg-9">
                <div class="text-center mb-40">
                    <h3 class="text-center mb-4">Top Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="top-collection-tab nav-tab-active-secondary">
                    <ul class="nav nav-pills list-color-general justify-content-center mb-5">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#pills-new-arrival-two">New Arrival</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#pills-Trending-two">Trending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#pills-best-selling-two">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#pills-featured-two">Featured</a>
                        </li>
                    </ul>
                    <div class="tab-content icon-hover-primary">
                        <div class="tab-pane fade show active" id="pills-new-arrival-two">
                            <div class="row gy-3 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-hover-primary e-image-bg-gray e-hover-image-zoom e-btn-set-four cart-slide-left e-info-center">
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Men Cotton Dress Shirts</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$17.00</ins>
                                                        <del>$32.28</del>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Kitchen Sitting Chair</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Light Shader</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Cloth</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Women Side Bags</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$22.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wood Lamp</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wash Bottle</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Candle Stand</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Trending-two">
                            <div class="row gy-3 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-hover-primary e-image-bg-gray e-hover-image-zoom e-btn-set-four cart-slide-left e-info-center">
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Men Cotton Dress Shirts</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$17.00</ins>
                                                        <del>$32.28</del>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Kitchen Sitting Chair</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Light Shader</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Cloth</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Women Side Bags</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$22.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wood Lamp</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wash Bottle</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Candle Stand</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-best-selling-two">
                            <div class="row gy-3 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-hover-primary e-image-bg-gray e-hover-image-zoom e-btn-set-four cart-slide-left e-info-center">
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Men Cotton Dress Shirts</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$17.00</ins>
                                                        <del>$32.28</del>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Kitchen Sitting Chair</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Light Shader</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Cloth</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Women Side Bags</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$22.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wood Lamp</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wash Bottle</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Candle Stand</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-featured-two">
                            <div class="row gy-3 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-hover-primary e-image-bg-gray e-hover-image-zoom e-btn-set-four cart-slide-left e-info-center">
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Men Cotton Dress Shirts</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$17.00</ins>
                                                        <del>$32.28</del>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Kitchen Sitting Chair</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Light Shader</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Hand Made Cloth</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Women Side Bags</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$22.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wood Lamp</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$108.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Wash Bottle</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$76.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="shop-grid.html" class="woocommerce-LoopProduct-link"><img src="public/images/101.png" alt="Product Image"></a>
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
                                                <h3 class="product-title"><a href="shop-grid.html">Candle Stand</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$32.00</ins>
                                                    </div>
                                                </div>
                                                <a href="#" class="btn btn-light mt-3">Buy Now</a>
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
<!--==================== Top Collection Section End ====================-->

<!--==================== Banner Section Start ====================-->
<div class="full-row py-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner-wrapper hover-img-zoom banner-one custom-class-134">
                    <div class="banner-image overflow-hidden transation"><img src="public/images/106.png" alt="Banner Image"></div>
                    <div class="banner-content position-absolute xy-center">
                        <h1 class="mb-3">We Supply Best Handicraft Products</h1>
                        <span class="font-medium font-500 text-secondary d-block text-uppercase">Most Populart Procust</span>
                        <a href="single-shop.html" class="btn btn-lg btn-primary rounded-0 mt-4">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================== Banner Section End ====================-->



@endsection