 <div class="header-sticky bg-white py-10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-6 order-lg-1">
                            <div class="d-flex align-items-center h-100 md-py-10">
                                <div class="nav-leftpush-overlay">
                                    <nav class="navbar navbar-expand-lg nav-general nav-primary-hover">
                                        <button type="button" class="push-nav-toggle d-lg-none border-0">
                                            <i class="flaticon-menu-2 flat-small text-primary"></i>
                                        </button>
                                        <div class="navbar-slide-push transation-this">
                                            <div class="login-signup bg-secondary d-flex justify-content-between py-10 px-20 align-items-center">
                                                <a href="{{route('client.login')}}" class="d-flex align-items-center text-white">
                                                    <i class="flaticon-user flat-small me-1"></i>
                                                    <span>Se connecter</span>
                                                </a>
                                                <span class="slide-nav-close"><i class="flaticon-cancel flat-mini text-white"></i></span>
                                            </div>
                                            <div class="menu-and-category">
                                                <ul class="nav nav-pills wc-tabs" id="menu-and-category" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" id="pills-push-menu-tab" data-bs-toggle="pill" href="#pills-push-menu" role="tab" aria-controls="pills-push-menu" aria-selected="true">Menu</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="pills-push-categories-tab" data-bs-toggle="pill" href="#pills-push-categories" role="tab" aria-controls="pills-push-categories" aria-selected="true">Catègories</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="menu-and-categoryContent">
                                                    <div class="tab-pane fade show active woocommerce-Tabs-panel woocommerce-Tabs-panel--description" id="pills-push-menu" role="tabpanel" aria-labelledby="pills-push-menu-tab">
                                                        <div class="push-navbar">
                                                            <ul class="navbar-nav">
                                                                <li class="nav-item ">
                                                                    <a class="nav-link " href="{{route('home')}}">Home</a>

                                                                </li>
                                                                <li class="nav-item ">
                                                                    <a class="nav-link " href="{{route('shop.all-products')}}">Tous les produits</a>

                                                                </li>
                                                                <li class="nav-item ">
                                                                    <a class="nav-link " href="#">Contactez nous</a>

                                                                </li>
                                                                <li class="nav-item ">
                                                                    <a class="nav-link " href="#">Qui somme nous</a>

                                                                </li>

                                                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                                            </ul>
                                                            <a href="#" class="p-20 d-block bg-secondary text-primary text-uppercase font-600 hover-text-primary">Acheter</a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-push-categories" role="tabpanel" aria-labelledby="pills-push-categories-tab">
                                                        <div class="categories-menu">
                                                            <ul class="menu">

                                                         @foreach ($categories as $cat)

                                                         <li class="menu-item-has-children"><a href="{{route('shop.categoryProducts',['name'=>$cat->libelle,'id'=>$cat->id])}}">{{$cat->libelle}}</a></li>
                                                         @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <a class="navbar-brand" href="#"><img class="nav-logo" src="assets/images/logo/10.png" alt="Image not found !"></a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-3 col-6 order-lg-3">
                            <div class="margin-right-1 d-flex align-items-center justify-content-end h-100 md-py-10">
                                @if (Auth::guard('web')->check())
                                <div class="sign-in position-relative font-general my-account-dropdown">
                                    <a href="my-account.html" class="has-dropdown d-flex align-items-center text-dark text-decoration-none" title="My Account">
                                        <i class="flaticon-user-3 flat-small me-1"></i>
                                    </a>
                                    <ul class="my-account-popup">

                                        <li><a href="{{route('client.profile')}}"><span class="menu-item-text">Mon compte</span></a></li>
                                        <li><a href="{{route('checkout')}}"><span class="menu-item-text">Checkout</span></a></li>
                                        <li><a href="wishlist.html"><span class="menu-item-text">Wishlist</span></a></li>
                                    </ul>
                                </div>
                                @endif
                                @if (Auth::guard('seller')->check())
                                <div class="sign-in position-relative font-general my-account-dropdown">
                                    <a href="my-account.html" class="has-dropdown d-flex align-items-center text-dark text-decoration-none" title="My Account">
                                        <i class="flaticon-user-3 flat-small me-1"></i>
                                    </a>
                                    <ul class="my-account-popup">

                                        <li><a href="{{route('seller.dashboard')}}"><span class="menu-item-text">Mon compte</span></a></li>
                                        {{-- <li><a href="{{route('checkout')}}"><span class="menu-item-text">Checkout</span></a></li>
                                        <li><a href="wishlist.html"><span class="menu-item-text">Wishlist</span></a></li> --}}
                                    </ul>
                                </div>
                                @endif
                                @if (Auth::guard('admin')->check())
                                <div class="sign-in position-relative font-general my-account-dropdown">
                                    <a href="my-account.html" class="has-dropdown d-flex align-items-center text-dark text-decoration-none" title="My Account">
                                        <i class="flaticon-user-3 flat-small me-1"></i>
                                    </a>
                                    <ul class="my-account-popup">

                                        <li><a href="{{route('admin.dashboard')}}"><span class="menu-item-text">Mon compte</span></a></li>
                                        {{-- <li><a href="{{route('checkout')}}"><span class="menu-item-text">Checkout</span></a></li>
                                        <li><a href="wishlist.html"><span class="menu-item-text">Wishlist</span></a></li> --}}
                                    </ul>
                                </div>
                                @endif
                                {{-- <div class="wishlist-view">
                                    <a href="wishlist.html" class="position-relative top-quantity d-flex align-items-center text-white text-decoration-none" title="Wishlist">
                                        <i class="flaticon-like flat-small text-dark"></i>
                                    </a>
                                </div>
                                <div class="refresh-view">
                                    <a href="compare.html" class="position-relative top-quantity d-flex align-items-center text-dark text-decoration-none">
                                        <i class="flaticon-shuffle flat-small text-dark"></i>
                                    </a>
                                </div> --}}
                                <div class="header-cart-4">
                                    <a href="cart.html" class="cart has-cart-data" title="View Cart">
                                        <div class="cart-icon"><i class="flaticon-shopping-cart flat-small"></i> <span class="header-cart-count">{{Cart::content()->count()}}</span></div>
                                        <div class="cart-wrap">
                                            <div class="cart-text">Cart</div>
                                            <span class="header-cart-count">(2) Item</span>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi><span class="woocommerce-Price-currencySymbol">$</span>62.00</bdi>
                                            </span>
                                        </div>
                                    </a>
                                    <div class="cart-popup">
                                        <ul class="cart_list product_list_widget ">
                                            @foreach (Cart::content() as $item)
                                            <li class="mini-cart-item">
                                                <a href="{{route('shopping-cart.delete',$item->rowId)}}" class="remove" title="Remove this item"><i class="fas fa-times"></i></a>
                                                <a href="#" class="product-image bg-light"><img src="{{$item->model->main_image}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Cart product"></a>
                                                <a href="#" class="product-name">{{$item->model->name}}</a>
                                                <div class="woocommerce-product-rating">
                                                    <div class="star-rating">
                                                        <div class="rating-wrap">
                                                            <a href="single-shop.html"><i class="fas fa-star"></i><span> 4.9 (68)</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="variation">
                                                    <span>Catégorie:</span>
                                                    <span>{{$item->model->maincategory->libelle}}</span>
                                                </div>
                                                <div class="cart-item-quantity">{{$item->qty}} ×
                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{$item->model->price}}.00 Dhs</bdi>
                                                    </span>
                                                </div>
                                            </li>

                                            @endforeach

                                        </ul>
                                        <div class="total-cart">
                                            <div class="title">Total: </div>
                                            <div class="price"><span class="woocommerce-Price-amount amount">{{Cart::total()}}<span class="woocommerce-Price-currencySymbol">DH</span></span>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{route('shopping-cart')}}" class="btn btn-primary rounded-0 view-cart">View cart</a>
                                            <a href="{{route('checkout')}}" class="btn btn-secondary rounded-0 checkout">Check out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-6 col-lg-6 col-12 order-lg-2">
                            <div class="product-search-one">
                                <form class="form-inline search-pill-shape" action="#" method="post">
                                    <input type="text" class="form-control search-field" name="search" placeholder="I’m shopping for">
                                    <div class="select-appearance-none">
                                        <select class="form-control">
                                            <option selected>All Categories</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="search-submit"><i class="flaticon-search flat-mini text-white"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
