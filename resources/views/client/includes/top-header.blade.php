 <div class="top-header border-0 d-none d-lg-block py-2">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-4 sm-mx-none">
                 <a href="help-center.html" class="text-general"><span>USA / USD / English</span></a>
             </div>
             <div class="col-lg-8 d-flex">
                 <ul class="top-links d-flex ms-auto align-items-center">
                     <li><a href="{{route('seller.register')}}">Become Seller</a></li>
                     <li><a href="faq.html">FAQ</a></li>
                     <li><a href="#">Help & Support</a></li>
                     <li class="my-account-dropdown">
                         <a href="my-account.html" class="has-dropdown"><i class="flaticon-user-3 flat-mini me-1"></i>Mon compte</a>
                         <ul class="my-account-popup">
                             <li><a href="{{route('client.login')}}"><span class="menu-item-text">Se connecter</span></a></li>
                             {{-- <li><a href="{{route('checkout')}}"><span class="menu-item-text">Checkout</span></a></li>
                             <li><a href="{{route('wishlist')}}"><span class="menu-item-text">Wishlist</span></a></li> --}}
                         </ul>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
