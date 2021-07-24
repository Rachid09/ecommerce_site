

 <div class="top-header d-none d-lg-block py-2 bg-light border-0 font-normal">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-4 sm-mx-none">
                 <div class="d-flex align-items-center">
                     <a href="{{route('contact')}}" class="text-general"><span>Help and Support</span></a>
                 </div>
             </div>
             @if (Auth::guard('web')->check())
             <div class="col-lg-8 d-flex">
                 <ul class="top-links d-flex ms-auto align-items-center">
                     {{-- <li><a href="{{route('seller.register')}}">Become Seller</a></li> --}}
                     <li><a href="#">Faq</a></li>
                     <li><a href="#">USA / USD / English</a></li>
                     <li><a href="#"><i class="flaticon-like flat-mini me-1 text-primary"></i> Wish List</a></li>
                     <li class="my-account-dropdown">
                         <a href="my-account.html" class="has-dropdown"><i
                                 class="flaticon-user-3 flat-mini text-primary me-1"></i>{{Auth::user()->first_name}}</a>
                         <ul class="my-account-popup">
                             {{-- <li><a href="{{route('client.login')}}"><span class="menu-item-text">Se
                                 connecter</span></a>
                     </li> --}}
                     <li><a href="{{route('client.profile')}}"><span class="menu-item-text">Mon compte</span></a></li>
                     <li><a href="{{route('checkout')}}"><span class="menu-item-text">Checkout</span></a></li>

                     <li>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form{{Auth::user()->id}}').submit();">
                        <span class="menu-item-text">{{ __('Deconnexion') }}</span>
                     </a>

                     <form id="logout-form{{Auth::user()->id}}" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></li>





                 </ul>
                 </li>
                 </ul>
             </div>


             @elseif(Auth::guard('seller')->check())
             <div class="col-lg-8 d-flex">
                 <ul class="top-links d-flex ms-auto align-items-center">
                     {{-- <li><a href="{{route('seller.register')}}">Become Seller</a></li> --}}
                     <li><a href="#">Faq</a></li>
                     <li><a href="#">USA / USD / English</a></li>
                     {{-- <li><a href="#"><i class="flaticon-like flat-mini me-1 text-primary"></i> Wish List</a></li> --}}
                     <li class="my-account-dropdown">
                         <a href="my-account.html" class="has-dropdown"><i
                                 class="flaticon-user-3 flat-mini text-primary me-1"></i>{{Auth::guard('seller')->user()->full_name}}</a>
                         <ul class="my-account-popup">

                     <li><a href="{{route("seller.dashboard")}}"><span class="menu-item-text">Mon compte</span></a></li>
                       <li>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form{{Auth::guard('seller')->user()->id}}').submit();">
                        <span class="menu-item-text">{{ __('Deconnexion') }}</span>
                     </a>

                     <form id="logout-form{{Auth::guard('seller')->user()->id}}" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></li>

                 </ul>
                 </li>
                 </ul>
             </div>
             @elseif(Auth::guard('admin')->check())
             <div class="col-lg-8 d-flex">
                 <ul class="top-links d-flex ms-auto align-items-center">
                     {{-- <li><a href="{{route('seller.register')}}">Become Seller</a></li> --}}
                     <li><a href="#">Faq</a></li>
                     <li><a href="#">USA / USD / English</a></li>
                     {{-- <li><a href="#"><i class="flaticon-like flat-mini me-1 text-primary"></i> Wish List</a></li> --}}
                     <li class="my-account-dropdown">
                         <a href="my-account.html" class="has-dropdown"><i
                                 class="flaticon-user-3 flat-mini text-primary me-1"></i>{{Auth::guard('admin')->user()->nom}}</a>
                         <ul class="my-account-popup">
                             {{-- <li><a href="{{route('client.login')}}"><span class="menu-item-text">Se
                                 connecter</span></a>
                     </li> --}}
                     <li><a href="{{route("admin.dashboard")}}"><span class="menu-item-text">Mon compte</span></a></li>
                       <li>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form{{Auth::guard('admin')->user()->id}}').submit();">
                        <span class="menu-item-text">{{ __('Deconnexion') }}</span>
                     </a>

                     <form id="logout-form{{Auth::guard('admin')->user()->id}}" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></li>

                 </ul>
                 </li>
                 </ul>
             </div>
             @else

             <div class="col-lg-8 d-flex">
                 <ul class="top-links d-flex ms-auto align-items-center">
                     <li><a href="{{route('seller.register')}}">Devenir un vendeur</a></li>
                     <li><a href="#">Faq</a></li>
                     <li><a href="#">USA / USD / English</a></li>
                     <li><a href="#"><i class="flaticon-like flat-mini me-1 text-primary"></i> Wish List</a></li>
                     <li class="my-account-dropdown">
                         <a href="{{route('client.login')}}" class=""><i
                                 class="flaticon-user-3 flat-mini text-primary me-1"></i>Se connecter</a>

                     </li>
                 </ul>
             </div>
             @endif

         </div>
     </div>
 </div>
