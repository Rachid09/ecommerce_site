@extends('layouts.client')

@section('content')

   <!-- breadcrumb -->
   <div class="full-row bg-light py-5">
            <div class="container">
                <div class="row text-secondary">
                    <div class="col-sm-6">
                        <h3 class="mb-2 text-secondary">Single Shop</h3>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="d-flex justify-content-sm-end align-items-center h-100">
                            <ol class="breadcrumb mb-0 d-inline-flex bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home me-1"></i>Home</a></li>
                                <li class="breadcrumb-item"><a href="shop-grid-full.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Single Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->

        <div class="full-row">
            <div class="container">
                <div class="row single-product-wrapper">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="product-images">
                            <div class="images-inner">
                                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                                    <figure class="woocommerce-product-gallery__wrapper">
                                        <div class="bg-light">
                                            <img id="single-image-zoom" src="assets/images/products/squire-269.png" alt="Thumb Image" data-zoom-image="assets/images/products/squire-269.png" />
                                        </div>

                                        <div id="gallery_09" class="product-slide-thumb">
                                            <div class="owl-carousel four-carousel dot-disable nav-arrow-middle owl-mx-5">
                                                <div class="item">
                                                    <a class="active" href="#" data-image="assets/images/products/squire-269.png" data-zoom-image="assets/images/products/squire-269.png">
                                                        <img src="assets/images/products/squire-269.png" alt="Thumb Image" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" data-image="assets/images/products/squire-270.png" data-zoom-image="assets/images/products/squire-270.png">
                                                        <img src="assets/images/products/squire-270.png" alt="Thumb Image" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" data-image="assets/images/products/squire-271.png" data-zoom-image="assets/images/products/squire-271.png">
                                                        <img src="assets/images/products/squire-271.png" alt="Thumb Image" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" data-image="assets/images/products/squire-272.png" data-zoom-image="assets/images/products/squire-272.png">
                                                        <img src="assets/images/products/squire-272.png" alt="Thumb Image" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" data-image="assets/images/products/squire-269.png" data-zoom-image="assets/images/products/squire-269.png">
                                                        <img src="assets/images/products/squire-269.png" alt="Thumb Image" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#" data-image="assets/images/products/squire-270.png" data-zoom-image="assets/images/products/squire-270.png">
                                                        <img src="assets/images/products/squire-270.png" alt="Thumb Image" />
                                                    </a>
                                                </div>
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
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                            <li class="breadcrumb-item"><a href="#">Men</a></li>
                                            <li class="breadcrumb-item"><a href="#">T-Shirts</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Men Hooded Navy Blue & Grey T-Shirt</li>
                                        </ol>
                                    </nav>
                                </div>
                                <h1 class="product_title entry-title">Men Hooded Navy Blue & Grey T-Shirt</h1>
                                <div class="woocommerce-product-rating">
                                    <div class="fancy-star-rating">
                                        <div class="rating-wrap"> <span class="fancy-rating good">5 ★</span>
                                        </div>
                                        <div class="rating-counts-wrap">
                                            <a href="#reviews" class="bigbazar-rating-review-link" rel="nofollow"> <span class="rating-counts"> (2) </span> </a>
                                        </div>
                                    </div>
                                </div>
                                <p class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>70.00</bdi>
                                    </span> –
                                    <span class="woocommerce-Price-amount amount">
                                        <bdi><span class="woocommerce-Price-currencySymbol">$</span>90.00</bdi>
                                    </span>
                                </p>
                                <div class="product-price-discount"><span class="on-sale"><span>19</span>% Off</span>
                                </div>
                                <div class="product-price-summary exclamation-mark open">
                                    <i class="fas fa-exclamation"></i>
                                    <div class="price-summary">
                                        <div class="price-summary-content">
                                            <ul class="price-summary-list">
                                                <li class="regular-price"> <label>Maximum Retail Price<br> <span>(incl. of all taxes)</span> </label>
                                                    <span style="text-decoration:line-through">
                                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>99.00</bdi>
                                                    </span>
                                                    </span>
                                                </li>
                                                <li class="selling-price"> <label>Selling Price</label> <span><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>70.00</bdi>
                                                    </span>
                                                    </span>
                                                </li>
                                                <li class="discount"> <label>Discount</label> <span>19%</span></li>
                                                <li class="total-discount"> <label>Total</label> <span> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>70.00</bdi>
                                                    </span>
                                                    </span>
                                                </li>
                                                <li class="overall-discount"> Overall you save <span class="amount-discount"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>29.00</bdi>
                                                    </span>
                                                    </span> <span class="percentage-discount">(19%)</span> on this product</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="stock-availability in-stock">In Stock</div>
                                <div class="product-offers">
                                    <ul class="product-offers-list">
                                        <li class="product-offer-item"><span class="h6">Special Price</span> Get extra 19% off (price inclusive of discount)
                                            <div class="product-term-wrap"><span class="product-term-text bigbazar-ajax-block">T & C </span></div>
                                        </li>
                                        <li class="product-offer-item"><span class="h6">Bank Offer</span> 10% instant discount on VISA Cards
                                            <div class="product-term-wrap"><span class="product-term-text bigbazar-ajax-block">T & C </span></div>
                                        </li>
                                        <li class="product-offer-item"><span class="h6">No cost EMI $49/month.</span> Standard EMI also available
                                            <div class="product-term-wrap"><span class="product-term-text bigbazar-ajax-block">View Plans </span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-brands">
                                    <a class="brand-image" href="#"> <img src="assets/images/partner/1.png" class="attachment-full size-full" alt="" width="120" height="120"> </a>
                                </div>
                                <div class="product-services">
                                    <span>Services:</span>
                                    <ul class="product-services-list">
                                        <li class="product-service-item"> 30 Day Return Policy</li>
                                        <li class="product-service-item"> Cash on Delivery available</li>
                                        <li class="product-service-item"> Free Delivery</li>
                                    </ul>
                                </div>
                                <div class="woocommerce-product-details__short-description"> <span>Highlights:</span>
                                    <div class="short-description">
                                        <ul>
                                            <li>Regular Fit.</li>
                                            <li>Full sleeves.</li>
                                            <li>70% cotton, 30% polyester.</li>
                                            <li>Easy to wear and versatile as Casual.</li>
                                            <li>Machine wash, tumble dry.</li>
                                        </ul>
                                    </div>
                                </div>
                                <form class="variations_form cart kapee-swatches-wrap" action="#" method="post" enctype="multipart/form-data">
                                    <table class="variations">
                                        <tr>
                                            <td class="label"><label>Color</label></td>
                                            <td class="value with-swatches">
                                                <div class="bigbazar-swatches">
                                                    <span class="swatch swatch-color swatch-circle swatch-selected" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Blue">
                                                        <span class="bigbazar-tooltip" style="background-color:#33a1de" title="">Blue</span>
                                                    </span>
                                                    <span class="swatch swatch-color term-grey swatch-circle" title="Grey" data-term="grey">
                                                        <span class="bigbazar-tooltip" style="background-color:#787878"
                                                         title="">Grey</span>
                                                    </span>
                                                    <span class="swatch swatch-color term-maroon swatch-circle" title="Maroon" data-term="maroon">
                                                        <span class="bigbazar-tooltip" style="background-color:#800000" 
                                                         title="">Maroon</span>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><label>Size</label></td>
                                            <td class="value with-swatches">
                                                <div class="bigbazar-swatches">
                                                    <span class="swatch swatch-label  swatch-circle swatch-selected" title="L"><span>L</span></span>
                                                    <span class="swatch swatch-label term-m swatch-circle" title="M"><span>M</span></span>
                                                    <span class="swatch swatch-label term-s swatch-circle" title="S"><span>S</span></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"></td>
                                            <td><a class="reset_variations" href="#">Reset All</a></td>
                                        </tr>
                                    </table>
                                    <div class="single_variation_wrap">
                                        <div class="quantity">
                                            <input type="number" min="1" max="9" step="1" value="1">
                                        </div>
                                        <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">
                                            <button type="submit" class="single_add_to_cart_button button alt single_add_to_cart_ajax_button">Add to cart</button>
                                            <div class="bigbazar-quick-buy">
                                                <button class="bigbazar_quick_buy_button bigbazar_quick_buy_variable bigbazar_quick_buy_58" value="Buy Now">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="yith-wcwl-add-to-wishlist wishlist-fragment">
                                    <div class="wishlist-button">
                                        <a class="add_to_wishlist" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                                    </div>
                                    <div class="compare-button">
                                        <a class="compare button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                                    </div>
                                    <div class="size-guide-button">
                                        <a href="#">Size Guide</a>
                                    </div>
                                </div>
                                <div class="product_meta"> <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span> <span class="posted_in">Category: <a href="https://bigbazar.presslayouts.com/product-category/men/t-shirts/" rel="tag">T-Shirts</a></span> <span class="tagged_as">Tags: <a href="https://bigbazar.presslayouts.com/product-tag/men/" rel="tag">Men</a>, <a href="https://bigbazar.presslayouts.com/product-tag/t-shirt/" rel="tag">T-Shirt</a></span></div>
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
                                        <a class="nav-link active" id="pills-description-one-tab" data-bs-toggle="pill" href="#pills-description-one" role="tab" aria-controls="pills-description-one" aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-information-one-tab" data-bs-toggle="pill" href="#pills-information-one" role="tab" aria-controls="pills-information-one" aria-selected="true">Additional Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-reviews-one-tab" data-bs-toggle="pill" href="#pills-reviews-one" role="tab" aria-controls="pills-reviews-one" aria-selected="true">Reviews(3)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="woocommerce-tabs wc-tabs-wrapper ps-0 mt-0">
                            <div class="tab-content" id="pills-tabContent-one">
                                <div class="tab-pane fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--description" id="pills-description-one" role="tabpanel" aria-labelledby="pills-description-one-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h2 class="my-3">Product Description</h2>
                                            <p>Maecenas egestas quam et volutpat bibendum metus vulputate platea eleifend sed Integer dictum ultricies consectetuer nunc vivamus a. Eu mus justo magna lacinia purus sodales scelerisque. Sociosqu pede facilisi.
                                                Curae; lacinia id. Sociis pretium gravida auctor mus amet accumsan adipiscing id dignissim, potenti. Curae; massa ridiculus lobortis consectetuer condimentum mollis vulputate hymenaeos tellus egestas auctor
                                                dictumst imperdiet curae; quisque ut porta molestie dui duis blandit molestie etiam enim erat sociis lacinia litora phasellus sit. Ipsum Lacinia class enim pharetra interdum potenti tellus parturient. Potenti
                                                scelerisque erat facilisi mauris tortor, mattis euismod augue nascetur rutrum augue ipsum tortor cum Porta primis.</p>
                                            <h2>Wireless</h2>
                                            <p>Praesent lectus facilisi tempor ridiculus arcu pharetra non tellus. Torquent nisl tempor. Magnis mollis lobortis nam, montes ut, consequat sed amet nullam, malesuada nascetur ornare sociosqu magna cum gravida
                                                quam tincidunt dapibus tellus felis nibh inceptos netus convallis facilisis torquent. Laoreet pulvinar ut. Fringilla lacus tellus lectus erat hac conubia eget quisque nisi aliquam nibh molestie nisi hymenaeos
                                                id phasellus metus duis inceptos arcu hendrerit ligula blandit lectus nisl fermentum sociosqu pretium eros libero.</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <h2 class="my-3">Payment & Shipment:</h2>
                                            <div class="detailmodule_text">
                                                <ul class="detail-desc-decorate-content">
                                                    <li>1. We accept Alipay, Paypal, Western Union, TT. All major credit cards are accepted through secure payment processor ESCROW.</li>
                                                    <li>2. If you need faster shipping way, We recommend the Aliexpress Standard Shipping .You also can choose the DHL,Fedx.</li>
                                                    <li>3. All the items will be dispatched within 2 business days, to USA、France、United Kingdom need 1-5 weeks ,Canada, Australia Russia and need around 2 to 5 weeks. </li>
                                                    <li>4. Also ,the delay or failure delivery is sometimes caused by the policy of different customs, for example ,the laser pointer is unacceptable in some countries.</li>
                                                </ul>
                                            </div>
                                            <div class="detailmodule_text mt-30">
                                                <h2 class="my-3">About FAQ:</h2>
                                                <div class="bb-accordion ac-single-show accordion-plus-left">
                                                    <div class="ac-card">
                                                        <a class="ac-toggle d-block py-2 text-secondary font-medium higlight-font active" href="javascript:void(0);">Website and Mobile App Design</a>
                                                        <div class="ac-collapse show" style="display: block">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="ac-card">
                                                        <a class="ac-toggle d-block py-2 text-secondary font-medium higlight-font" href="javascript:void(0);">Motion Graphics and Animation</a>
                                                        <div class="ac-collapse">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="ac-card">
                                                        <a class="ac-toggle d-block py-2 text-secondary font-medium higlight-font" href="javascript:void(0);">User Experience and Brand Strategy</a>
                                                        <div class="ac-collapse">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-information-one" role="tabpanel" aria-labelledby="pills-information-one-tab">
                                    <div class="row">
                                        <div class="col-8">
                                            <h2 class="my-3">Additional Information</h2>
                                            <table class="woocommerce-product-attributes shop_attributes">
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color">
                                                    <th class="woocommerce-product-attributes-item__label">Weight :</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p>150 g</p>
                                                    </td>
                                                </tr>
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                                    <th class="woocommerce-product-attributes-item__label">Dimensions :</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p>16 × 10 × 20 cm</p>
                                                    </td>
                                                </tr>
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                                    <th class="woocommerce-product-attributes-item__label">Item Height :</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p>18 Millimeters</p>
                                                    </td>
                                                </tr>
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                                    <th class="woocommerce-product-attributes-item__label">Item model number :</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p>MF841HN/A</p>
                                                    </td>
                                                </tr>
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                                    <th class="woocommerce-product-attributes-item__label">Hard Disk Technology :</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p>Solid State Drive</p>
                                                    </td>
                                                </tr>
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                                    <th class="woocommerce-product-attributes-item__label">Hardware Platform :</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p>Mac</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-reviews-one" role="tabpanel" aria-labelledby="pills-reviews-one-tab">
                                    <div class="row">
                                        <div class="col-8">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title my-3">(3) Customer Review</h2>
                                                <ol class="commentlist">
                                                    <li>
                                                        <div class="comment_container">
                                                            <img src="assets/images/avatar.png" class="avatar" alt="Image not found!">
                                                            <div class="comment-text">
                                                                <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                                                                    <i class="flaticon-star-1"></i>
                                                                    <i class="flaticon-star-1"></i>
                                                                    <i class="flaticon-star-1"></i>
                                                                    <i class="flaticon-star-1"></i>
                                                                    <i class="flaticon-star-1"></i>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong class="woocommerce-review__author">Admin </strong>
                                                                    <span class="woocommerce-review__dash">–</span>
                                                                    <span class="woocommerce-review__published-date">September 26, 2019</span>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Aliquam nisi class massa dictum, quam morbi interdum commodo inceptos molestie cum euismod ut Libero lacus fames feugiat. Torquent sed dis litora velit justo interdum non iaculis libero
                                                                        porta orci. Egestas Turpis class, sed feugiat sed euismod magnis viverra.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <h5 id="reply-title" class="comment-reply-title my-20">Add A Review</h5>
                                                        <form action="#" method="post" id="commentform" class="comment-form">
                                                            <div class="row g-3">
                                                                <div class="col-6">
                                                                    <label for="comment">Your Name<span class="required">*</span></label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="comment">Your Email<span class="required">*</span></label>
                                                                    <input type="email" class="form-control">
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="comment-form-comment">
                                                                        <label for="comment">Your review<span class="required">*</span></label>
                                                                        <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-submit">
                                                                        <button name="submit" type="submit" id="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="0bbb6c8c11">
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
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
        <!--==================== Product Description Section End ====================-->

        <!--==================== Related Products Section Start ====================-->
        <div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-head border-bottom d-flex justify-content-between align-items-end mb-2">
                            <div class="d-flex section-head-side-title">
                                <h4 class="font-600 text-dark mb-0">Related Products</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
						<div class="products product-style-1 owl-mx-5">
							<div class="five-carousel owl-carousel nav-top-right e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">
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
                </div>
            </div>
        </div>
        <!--==================== Related Products Section End ====================-->

    
@endsection