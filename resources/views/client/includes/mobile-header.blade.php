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
                                                        <a class="nav-link" id="pills-push-categories-tab" data-bs-toggle="pill" href="#pills-push-categories" role="tab" aria-controls="pills-push-categories" aria-selected="true">catégories</a>
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
                               <a href="{{route('home')}}">
                        <svg width="125px" height="70px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 1302.28 300.7">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e6ab67;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path
                                            d="M450.71,167.45q28-28,28-67.78,0-39.36-28-67.55-23.41-23.41-57-28h-76.9v293h16.59V195.64h54.71l65.29,101.54h20.31L406.14,192.94Q431.22,186.94,450.71,167.45Zm-67.57,11.4H333.41V20.92h49.73q32.53,0,55.76,23t23.21,55.74q0,33-23.21,56.07T383.14,178.85Z" />
                                        <path class="cls-1"
                                            d="M1258.23,44q-44-44-106.4-44-62.19,0-106.21,44t-44,106.22q0,62.38,44,106.42t106.21,44q62.36,0,106.4-44t44-106.42Q1302.28,88.09,1258.23,44Zm-11.92,200.72q-39.16,39.18-94.48,39.16-55.14,0-94.3-39.16t-39.15-94.5q0-55.11,39.15-94.31t94.3-39.15q55.31,0,94.48,39.15t39.18,94.31Q1285.49,205.58,1246.31,244.75Z" />
                                        <polygon
                                            points="591.1 142.47 591.1 158.85 551.05 158.85 551.05 297.18 534.67 297.18 534.67 158.85 494.62 158.85 494.62 142.47 534.67 142.47 534.67 4.16 551.05 4.16 551.05 142.47 591.1 142.47" />
                                        <polygon
                                            points="663.9 20.51 663.9 280.8 703.96 280.8 703.96 297.18 607.47 297.18 607.47 280.8 647.52 280.8 647.52 20.51 607.47 20.51 607.47 4.13 703.96 4.13 703.96 20.51 663.9 20.51" />
                                        <path class="cls-1"
                                            d="M938,180.9a47.29,47.29,0,0,0-14.48,92.3,131.18,131.18,0,0,1-53.12,10.71q-55.11,0-94.2-39t-39-94.3q0-55.11,39-94.07t94.2-39A131.13,131.13,0,0,1,922.64,28,47.29,47.29,0,1,0,971.29,39.8l-.2-.21c-1.7-1.54-3.42-3-5.16-4.52,0,0-.1-.08-.16-.1Q924.69.62,870.37.62q-62.39,0-106.22,44t-43.82,106q0,62.39,43.82,106.21T870.37,300.7q55.33,0,96.92-35.43c1.18-1,2.36-2.06,3.54-3.11a3.05,3.05,0,0,0,.44-.44A47.26,47.26,0,0,0,938,180.9ZM953.68,46.78c.52.31,1,.64,1.49,1a34.65,34.65,0,0,1,3.47,2.88l.2.21a30.41,30.41,0,1,1-5.16-4.06Zm1.18,207a30.64,30.64,0,1,1,4-3.11A30.5,30.5,0,0,1,954.86,253.79Z" />
                                        <path
                                            d="M265.68,200.65,194.38,4.16h-17L124.29,148.89q-45.72,7.43-80.26,42Q0,234.93,0,297.08v.1H16.79v-.1q0-55.11,39.15-94.3,27-27,61.55-35.36L69.83,297.18H87.45l48.78-132.89q6.86-.66,14-.67,55.31,0,94.48,39.16l.07.07a43.26,43.26,0,0,1,10,15.86l28.51,78.47H300.7ZM150.25,146.83c-2.6,0-5.14,0-7.68.18L185.88,29l53.25,146.63Q200.7,146.83,150.25,146.83Z" />
                                    </g>
                                </g>
                            </svg>

                    </a>
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
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form{{Auth::user()->id}}').submit();">
                        <span class="menu-item-text">{{ __('Deconnexion') }}</span>
                     </a>

                     <form id="logout-form{{Auth::user()->id}}" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></li>
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
                                    <input type="text" class="form-control search-field" name="search" placeholder="Je cherche">
                                    <div class="select-appearance-none">
                                        <select class="form-control">
                                            <option selected>Catégories</option>
                                           @foreach ($categories as $item)
                                           <option value="{{$item->id}}">{{$item->libelle}}</option>

                                           @endforeach

                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="search-submit"><i class="flaticon-search flat-mini text-white"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
