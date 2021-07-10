@extends('layouts.client')

@section('content')

 <!-- breadcrumb -->
 <div class="full-row py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h3 class="mb-2">Shop Full Width</h3>
                    </div>
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Full Width</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="products-header d-flex justify-content-between align-items-center py-10 px-20 bg-light md-mt-30">
                            <div class="products-header-left d-flex align-items-center">
                                <h6 class="woocommerce-products-header__title page-title">All Category</h6>
                                <div class="woocommerce-result-count"> ( Showing 1 – 28 products of 23945 products )</div>
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
                                    <a class="grid-view" data-shopview="grid-view" href="shop-grid-full.html"><i class="flaticon-menu-1 flat-mini"></i></a>
                                    <a class="list-view active" data-shopview="list-view" href="shop-list-full.html"><i class="flaticon-list flat-mini"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="showing-products pt-30 pb-50 border-2 border-bottom border-light">
                            <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 product-style-3 e-hover-image-zoom e-image-bg-light g-4">
                                <div class="col">
                                    <div class="product type-product">
                                        <div class="product-wrapper">
                                            <div class="product-image">
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src={{asset("public/images/CHABICHIC_30_JULY_2020_72dpi_by_josephouechen-2_2048x.jpg")}} alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Thick Men's Knitted Sweater</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$12.00 - $45.00</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-48.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Men Polo Men Shirt Short Sleeve</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$10.00 - $18.50</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-118.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Bags & Shoes</a></div>
                                                <h3 class="product-title"><a href="#">GenShuo High Heels 12cm Black</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$20.00</ins>
                                                        <del>$25.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>20</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-34.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>Top</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Jewelry & Watches</a></div>
                                                <h3 class="product-title"><a href="#">San Martin Diver Water Ghost</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$48.00</ins>
                                                        <del>$60.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>15</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-105.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Soud System</a></div>
                                                <h3 class="product-title"><a href="#">Portable Stereo Sound Mobile</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$21.03 - 36.66</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-165.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Computer & Office</a></div>
                                                <h3 class="product-title"><a href="#">Global Ffirmware Lenovo</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$398.99 - 579.49</ins>
                                                    </div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-27.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Jewelry & Accessories</a></div>
                                                <h3 class="product-title"><a href="#">Moonmory 925 Sterling Silver</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$15.00</ins>
                                                        <del>$34.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>60</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-25.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>Top</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Bags & Shoes</a></div>
                                                <h3 class="product-title"><a href="#">San Martin Diver Water Ghost</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$10.00 - 17.55</ins>
                                                    </div>
                                                    <div class="on-sale"><span>15</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-97.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">TV & Audio</a></div>
                                                <h3 class="product-title"><a href="#">Stereo earphones bluetooth</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$15.00</ins>
                                                        <del>$200.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>25</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$4.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.7</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(47)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>173</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-80.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Men Fleece Jackets Coats</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$120.00</ins>
                                                        <del>$150.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>20</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.75</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(64)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>194</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-166.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Summer Streetwear Hip Hop</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$45.00</ins>
                                                        <del>$50.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>10</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$2.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.8</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(59)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>195</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-167.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>Top</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Women Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Chiffon Blouse Women Black</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$38.00</ins>
                                                        <del>$50.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>24</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$3.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.95</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(52)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>182</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-96.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Computer Accessories</a></div>
                                                <h3 class="product-title"><a href="#">MUCAI 24 inch PC monitor</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$150.00</ins>
                                                        <del>$200.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>25</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$7.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(69)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>292</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-3.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Women Fashion</a></div>
                                                <h3 class="product-title"><a href="#">High Quality Winter Jacket</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$28.87</ins>
                                                        <del>$55.52</del>
                                                    </div>
                                                    <div class="on-sale"><span>48</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(132)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>326</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-95.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Speaker & Sound</a></div>
                                                <h3 class="product-title"><a href="#">Redragon GS550 aux stereo</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$95.00</ins>
                                                        <del>$100.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>5</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.7</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(85)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>283</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-168.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>Top</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Women Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Bikini Set Halter Print Plus</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$5.00</ins>
                                                        <del>$10.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>50</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$1.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.8</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(128)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>289</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-43.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Men T Shirt Long leeve Cotton</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$35.00</ins>
                                                        <del>$50.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>30</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$3.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.75</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(123)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>282</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-169.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">High Quality Casual Business</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$7.00</ins>
                                                        <del>$10.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>30</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$1.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(154)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>295</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-170.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Consumer Electronics</a></div>
                                                <h3 class="product-title"><a href="#">HiFi Wireless Headphones</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$15.00</ins>
                                                        <del>$20.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>25</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$2.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(84)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>179</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-82.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>Top</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">New Blazer Patchwork Suits</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$90.00</ins>
                                                        <del>$100.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>10</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(96)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>295</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-24.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Consumer Electronics</a></div>
                                                <h3 class="product-title"><a href="#">Brand android television TV 32</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$850.00</ins>
                                                        <del>$1000.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>15</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$12.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(83)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>197</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-69.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Women Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Vintage Dress Down-Collar</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$85.00</ins>
                                                        <del>$100.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>15</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(43)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>158</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-116.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Tablet</a></div>
                                                <h3 class="product-title"><a href="#">PRITOM P7 7 inch Tablet</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$300.00</ins>
                                                        <del>$400.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>30</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$4.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(39)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>158</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-47.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>Top</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Women Fashion</a></div>
                                                <h3 class="product-title"><a href="#">New Classic fashion Blazer</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$88.00</ins>
                                                        <del>$100.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>12</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(83)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>192</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-88.png" alt="Product Image"></a>
                                                <div class="product-variations">
                                                    <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                    <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                    <span><a href="#" style="background-color: #31749e;"></a></span>
                                                    <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                </div>
                                                <div class="wishlist-view">
                                                    <div class="quickview-button">
                                                        <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-labels">
                                                    <div class="shape1-badge3"><span>New</span></div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                <h3 class="product-title"><a href="#">Men Tee Shirt Jerseys Top Thai</a></h3>
                                                <div class="product-price">
                                                    <div class="price">
                                                        <ins>$39.00</ins>
                                                        <del>$50.00</del>
                                                    </div>
                                                    <div class="on-sale"><span>22</span><span>% off</span></div>
                                                </div>
                                                <div class="shipping-cost"><span>+Shipping: </span> <span>$2.00</span> </div>
                                                <div class="shipping-feed-back">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                        </div>
                                                        <div class="rating-counts-wrap">
                                                            <a href="#">(76)</a>
                                                        </div>
                                                    </div>
                                                    <div class="sold-items">
                                                        <span>153</span> <span>Sold</span>
                                                    </div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="cart-button">
                                                        <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                    </div>
                                                    <div class="wishlist-button">
                                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                    </div>
                                                    <div class="compare-button">
                                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-3">
                            <div class="showing-result">Showing 1 – 28 of 23945 results</div>
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
                                        <h4 class="font-700 text-secondary mb-0 pb-1">Recomended For You</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-style-3 owl-carousel owl-item-mb-50 owl-nav-hover-primary nav-top-right five-carousel product-carousel dot-disable e-bg-light after-border-two">
                                    <div class="item">
                                        <div class="product type-product">
                                            <div class="product-wrapper">
                                                <div class="product-image">
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-43.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">Men T Shirt Long leeve Cotton</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$3.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.75</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(123)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>282</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-3.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-labels">
                                                        <div class="shape1-badge3"><span>Sale</span></div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Women Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">High Quality Winter Jacket</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$6.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.85</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(132)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>326</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-8.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">Leather Jacket Men winter</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$5.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.6</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(393)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>142</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-11.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">Hot Summer Short Sleeve Biker</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$1.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(543)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>142</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-14.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">Men's Plaid Cotton Dress</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
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
                                                            <span>142</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-16.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">Men's Plaid Cotton Dress</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$4.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.5</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(39)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>142</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-15.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Electronic</a></div>
                                                    <h3 class="product-title"><a href="#">Headphones Bluetooth 5.0</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$1.50</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.9</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(139)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>142</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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
                                                    <a href="#" class="woocommerce-LoopProduct-link"><img src="assets/images/products/squire-14.png" alt="Product Image"></a>
                                                    <div class="product-variations">
                                                        <span class="active"><a href="#" style="background-color: #b78269;"></a></span>
                                                        <span><a href="#" style="background-color: #f1cc4e;"></a></span>
                                                        <span><a href="#" style="background-color: #31749e;"></a></span>
                                                        <span><a href="#" style="background-color: #672a4f;"></a></span>
                                                    </div>
                                                    <div class="wishlist-view">
                                                        <div class="quickview-button">
                                                            <a class="quickview-btn" href="#quick-view" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Quick View" aria-label="Quick View">Quick View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-cats"><a href="#">Man Fashion</a></div>
                                                    <h3 class="product-title"><a href="#">Men LED Digital Watches Women</a></h3>
                                                    <div class="product-price">
                                                        <div class="price">
                                                            <ins>$15.00 - 22.92</ins>
                                                        </div>
                                                    </div>
                                                    <div class="shipping-cost"><span>+Shipping: </span> <span>$7.00</span> </div>
                                                    <div class="shipping-feed-back">
                                                        <div class="star-rating">
                                                            <div class="rating-wrap">
                                                                <a href="#"><i class="fas fa-star"></i><span> 4.7</span></a>
                                                            </div>
                                                            <div class="rating-counts-wrap">
                                                                <a href="#">(73)</a>
                                                            </div>
                                                        </div>
                                                        <div class="sold-items">
                                                            <span>142</span> <span>Sold</span>
                                                        </div>
                                                    </div>
                                                    <div class="hover-area">
                                                        <div class="cart-button">
                                                            <a href="#" class="button add_to_cart_button">Add to Cart</a>
                                                        </div>
                                                        <div class="wishlist-button">
                                                            <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                                        </div>
                                                        <div class="compare-button">
                                                            <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
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

        <!--==================== Newslatter Section Start ====================-->
        <div class="full-row bg-secondary py-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center h-100">
                            <h4 class="text-primary mb-0">Sign up to newslatter</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="d-flex align-items-center h-100">
                            <span class="text-white font-600 font-fifteen">.... and receive $5 coupon for first shopping</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <form action="#" class="subscribe-form position-relative md-mt-20">
                            <input class="form-control rounded-pill mb-0" type="text" placeholder="Enter your email" aria-label="Address">
                            <button class="btn btn-primary rounded-right-pill text-dark" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Newslatter Section End ====================-->

        <!--==================== Service Info Section Start ====================-->
        <div class="full-row bg-white">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-sm-2 row-cols-1 g-0 gy-3 gy-lg-0">
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-life-insurance flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">Great Value</a></h5>
                                <p>We offer competitive prices on our product range.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-airplane flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">World Wide Delevery</a></h5>
                                <p>we ship product to over 200 countries & regions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-package flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">Safe Payment</a></h5>
                                <p>Pay with the world’s most secure payment methods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-shopping-1 flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">Shop With Confidence</a></h5>
                                <p>Our Buyer Protection covers your purchase.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="gray-right-line-one px-3 md-my-10 d-flex">
                            <i class="flaticon-24-hours flat-medium text-secondary"></i>
                            <div class="ml-10">
                                <h5 class="mb-1"><a href="#" class="text-dark hover-text-primary transation-this">24/7 Help Center</a></h5>
                                <div class="font-500">
                                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================== Service Info Section End ====================-->

@endsection