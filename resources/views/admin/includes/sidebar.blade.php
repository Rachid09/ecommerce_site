<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.add_on_drag_drop.main">Tableau de bord </span></a>
            </li>



            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Les Categories </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\MainCategory::defaultCategory()->count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('admin.maincategories')}}" data-i18n="nav.dash.ecommerce"> List des catégories  </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}" data-i18n="nav.dash.crypto">
                            Ajouter une catégorie </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Les Vendeurs </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Seller::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('admin.sellers')}}" data-i18n="nav.dash.ecommerce">List des vendeurs</a>
                    </li>
                    <li><a class="menu-item" href=" {{route('admin.sellers.create')}}" data-i18n="nav.dash.crypto">Ajouter un vendeur
                             </a>
                    </li>
                </ul>
            </li>
             <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Les Clients </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\User::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('admin.clients')}}" data-i18n="nav.dash.ecommerce">List des vendeurs</a>
                    </li>
                    {{-- <li><a class="menu-item" href=" {{route('admin.sellers.create')}}" data-i18n="nav.dash.crypto">Ajouter un vendeur
                             </a>
                    </li> --}}
                </ul>
            </li>



              <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Les produits </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Product::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="{{route('admin.products')}}" data-i18n="nav.dash.ecommerce">liste des produits</a>
                    </li>
                </ul>
            </li>


               



        </ul>
    </div>
</div>
