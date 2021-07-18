<div class="main-nav py-4 d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <nav class="navbar navbar-expand-lg nav-general nav-primary-hover">
                                <a class="navbar-brand" href="#"><img class="nav-logo" src="{{asset('public/images/logo.png')}}" alt="Image not found !"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="flaticon-menu-2 flat-small text-primary"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('home')}}">Home</a>

                                        </li>
                                        <li class="nav-item dropdown mega-dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('shop.all-products')}}">Tous les produits</a>

                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('shop.all-products')}}">Catègories</a>
                                            <ul class="dropdown-menu">
                                                @foreach ($categories as $cat)

                                                <li><a class="dropdown-item" href="{{route('shop.categoryProducts',['name'=>$cat->libelle,'id'=>$cat->id])}}">{{$cat->libelle}}</a></li>
                                                @endforeach

                                                {{-- <li><a class="dropdown-item" href="about.html">About Us 1</a></li>
                                                <li><a class="dropdown-item" href="about-2.html">About Us 2</a></li>
                                                <li><a class="dropdown-item" href="service.html">Services</a></li>
                                                <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                                <li><a class="dropdown-item" href="404.html">404 Page</a></li> --}}
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Qui somme nous</a>

                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex h-100 justify-content-end">
                                <div class="product-search-one flex-grow-1 global-search touch-screen-view">
                                    <form class="form-inline search-line-shape" action="#" method="post">
                                        <input type="text" class="form-control search-field" name="search" placeholder="I’m shopping for">
                                        <button type="submit" name="submit" class="search-submit"><i class="flaticon-search flat-mini"></i></button>
                                    </form>
                                </div>
                                <div class="margin-right-1 d-flex align-items-center justify-content-end h-100 ms-5">
                                     @if (Auth::guard('web')->check())
                                 <div class="sign-in position-relative font-general my-account-dropdown">
                                     <a href="my-account.html" class="has-dropdown d-flex align-items-center text-dark text-decoration-none" title="My Account">
                                         <i class="flaticon-user-3 flat-mini mx-auto me-1"></i>
                                     </a>
                                     <ul class="my-account-popup">
                                         <li><a href="{{route('client.profile')}}"><span class="menu-item-text">My Account</span></a></li>
                                         <li><a href="{{route('checkout')}}"><span class="menu-item-text">Checkout</span></a></li>
                                         {{-- <li><a href="wishlist.html"><span class="menu-item-text">Wishlist</span></a></li> --}}
                                     </ul>
                                 </div>
                                 @endif
                                    <div class="search-view d-xxl-none">
                                        <a href="#" class="search-pop top-quantity d-flex align-items-center text-decoration-none">
                                            <i class="flaticon-search flat-mini text-dark mx-auto"></i>
                                        </a>
                                    </div>
                                    <div class="header-cart-1">
                                        <a href="cart.html" class="cart has-cart-data" title="View Cart">
                                            <div class="cart-icon"><i class="flaticon-shopping-cart flat-mini"></i> <span class="header-cart-count" id="count-items">{{Cart::content()->count()}}</span></div>
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
                                                    <a href="#" class="product-image"><img src="{{$item->model->main_image}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="Cart product"></a>
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
                                                    <div class="cart-item-quantity" ><span id="qty-navbar">{{$item->qty}}</span> ×
                                                        <span class="woocommerce-Price-amount amount"><bdi id="price"><span class="woocommerce-Price-currencySymbol"></span>{{$item->model->price}}.00 Dhs</bdi>
                                                        </span>
                                                    </div>
                                                </li>
                                                @endforeach

                                            </ul>
                                            <div class="total-cart">
                                                <div class="title">Total: </div>
                                                <div class="price"><span class="woocommerce-Price-amount amount" id="total-navbar">{{Cart::total()}}<span class="woocommerce-Price-currencySymbol">DH</span></span>
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
                        </div>
                    </div>
                </div>
            </div>
