<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item"><a href="{{route('seller.dashboard')}}"><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> tableau de bord </span>

                </a>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">  Commandes </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\MainCategory::defaultCategory()->count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.maincategories')}}" data-i18n="nav.dash.ecommerce">  liste des commandes </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}" data-i18n="nav.dash.crypto">Ajouer un commande
                             </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Ma Boutique </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Seller::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.sellers')}}" data-i18n="nav.dash.ecommerce"> List des produits  </a>
                    </li>
                    <li><a class="menu-item" href=" {{route('admin.sellers.create')}}" data-i18n="nav.dash.crypto">
                            Ajouter un produit </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> Stock </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\SubCategory::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.subcategories')}}" data-i18n="nav.dash.ecommerce">  List des produits </a>
                    </li>
                    <li><a class="menu-item" href=" {{route('admin.subcategories.create')}}" data-i18n="nav.dash.crypto">ajouter au stock
                             </a>
                    </li>
                </ul>
            </li>



        </ul>
    </div>
</div>
