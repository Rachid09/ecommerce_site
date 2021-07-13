<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href=""><i class="la la-mouse-pointer"></i><span class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item"><a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">{{App\Models\language::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.languages')}}" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.languages.create')}}" data-i18n="nav.dash.crypto">أضافة
                            لغة جديدة </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الاقسام الرئيسية </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">{{App\Models\MainCategory::defaultCategory()->count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.maincategories')}}" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.maincategories.create')}}" data-i18n="nav.dash.crypto">أضافة
                            قسم جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">التجار </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\Seller::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.sellers')}}" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href=" {{route('admin.sellers.create')}}" data-i18n="nav.dash.crypto">أضافة
                            تاجر </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الاقسام الفرعية </span>
                    <span class="badge badge badge-success badge-pill float-right mr-2">{{App\Models\SubCategory::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.subcategories')}}" data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href=" {{route('admin.subcategories.create')}}" data-i18n="nav.dash.crypto">أضافة
                            تاجر </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="{{route('admin.products')}}"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">liste des produits</span>
                    <span class="badge badge badge-danger  badge-pill float-right mr-2">{{App\Models\Product::count()}}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
