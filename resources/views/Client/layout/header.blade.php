<header>
    <!--  Start Large Header Section   -->
    <div class="header d-none d-lg-block">
        <!-- Start Header Center area -->
        <div class="header__center sticky-header p-tb-10">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-2">
                        <div class="header__logo pr-3">
                            <a href="/" class="header__logo-link img-responsive">
                                <img class="header__logo-img img-fluid" src="{{ asset('assets/img/logo/logo.png') }}"
                                     alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header-menu">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-5">
                                    <div class="header-menu-vertical pos-relative">
                                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>Danh mục<span
                                                class="d-none d-xl-inline"> sản phẩm</span></h4>
                                        <ul class="menu-content pos-absolute">
                                            @foreach($categories as $category)
                                                <li class="menu-item"><a
                                                        href="{{ route('listProduct', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <x-form-search/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <ul class="header__user-action-icon">
                            <!-- Start Header Wishlist Box -->
                            @if(!\Illuminate\Support\Facades\Auth::check())
                                <li class="header__nav-item pos-relative">
                                    <a href="{{route('register')}}" style="font-size: 13px" class="header__nav-link"> <i
                                            class="fa-fw fas fa-user" aria-hidden="true"></i>Đăng nhập</a>
                                </li>
                            @else
                                <li class="header__nav-item pos-relative">
                                    <a style="font-size: 13px" class="header__nav-link"> <i class="fa-fw fas fa-user"
                                                                                            aria-hidden="true"></i> {{\Illuminate\Support\Facades\Auth::user()->last_name . ' ' .\Illuminate\Support\Facades\Auth::user()->first_name}}
                                    </a>
                                    <ul class="dropdown__menu pos-absolute">
                                        <li class="dropdown__list"><a href="{{route('myAccount')}}" class="dropdown__link">Thông tin của
                                                bạn</a></li>
                                        <li class="dropdown__list"><a href="{{route('logout')}}" class="dropdown__link">Đăng
                                                xuất</a></li>
                                    </ul>
                                    <!--Single Dropdown Menu-->
                                </li>
                            @endif

                            <li>
                                <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span
                                        class="wishlist-item-count cart-count pos-absolute">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
                                </a>
                            </li>
                            <li>
                                <a style="font-size: 1.25rem;" href="{{ route('myNotifications') }}">
                                    <i class="fas fa-bell" aria-hidden="true"></i>
                                    <span class="wishlist-item-count pos-absolute">{{ $unread_count }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End Header Center area -->
    </div> <!--  End Large Header Section  -->

    <!--  Start Mobile Header Section   -->
    <div class="header__mobile mobile-header--1 d-block d-lg-none p-tb-20">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <ul class="header__mobile--leftside d-flex align-items-center justify-content-start">
                        <li>
                            <div class="header__mobile-logo">
                                <a href="/" class="header__mobile-logo-link">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt=""
                                         class="header__mobile-logo-img">
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- Start User Action -->
                    <ul class="header__mobile--rightside header__user-action-icon  d-flex align-items-center justify-content-end">
                        <!-- Start Header Add Cart Box -->
                        <li>
                            <a href="#offcanvas-add-cart__box" class="offcanvas-toggle">
                                <i class="icon-shopping-cart"></i>
                                <span
                                    class="wishlist-item-count cart-count pos-absolute">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
                            </a>
                        </li> <!-- End Header Add Cart Box -->
                        <li>
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a>
                        </li>

                    </ul>   <!-- End User Action -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="header-menu-vertical pos-relative m-t-30">
                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>Danh mục sản phẩm</h4>
                        <ul class="menu-content pos-absolute">
                            @foreach($categories as $category)
                                <li class="menu-item"><a
                                        href="{{ route('listProduct', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--  Start Mobile Header Section   -->

    <!--  Start Mobile-offcanvas Menu Section   -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="offcanvas__top">
            <span class="offcanvas__top-text"></span>
            <button class="offcanvas-close"><i class="fal fa-times"></i></button>
        </div>

        <div class="offcanvas-inner">
            <x-form-search></x-form-search>
            <!-- Start Mobile User Action -->
            <ul class="header__user-action-icon m-tb-15 text-center">
                <!-- Start Header Wishlist Box -->
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <li>
                    <li class="header__nav-item pos-relative">
                        <a href="{{route('register')}}" style="font-size: 13px" class="header__nav-link"> <i
                                class="fa-fw fas fa-user" aria-hidden="true"></i>Đăng nhập</a>
                    </li>
                    </li>
                @else
                    <li class="header__nav-item pos-relative">
                        <a style="font-size: 13px" class="header__nav-link"> <i class="fa-fw fas fa-user" aria-hidden="true"></i>
                            {{\Illuminate\Support\Facades\Auth::user()->getFullName()}}
                        </a>
                        <ul class="dropdown__menu pos-absolute">
                            <li class="dropdown__list"><a href="{{route('myAccount')}}" class="dropdown__link">Thông tin của bạn</a></li>
                            <li class="dropdown__list"><a href="{{route('logout')}}" class="dropdown__link">Đăng
                                    xuất</a></li>
                        </ul>
                        <!--Single Dropdown Menu-->
                    </li>
                @endif
            </ul>
        </div>
        <ul class="offcanvas__social-nav m-t-50">
            <li class="offcanvas__social-list"><a href="https://www.facebook.com/" class="offcanvas__social-link"><i
                        class="fab fa-facebook-f"></i></a></li>
            <li class="offcanvas__social-list"><a href="https://twitter.com/?lang=vi" class="offcanvas__social-link"><i
                        class="fab fa-twitter"></i></a></li>
            <li class="offcanvas__social-list"><a href="https://www.youtube.com/" class="offcanvas__social-link"><i
                        class="fab fa-youtube"></i></a></li>
            <li class="offcanvas__social-list"><a href="https://www.google.com.vn/?hl=vi"
                                                  class="offcanvas__social-link"><i
                        class="fab fa-google-plus-g"></i></a></li>
            <li class="offcanvas__social-list"><a href="https://www.instagram.com/" class="offcanvas__social-link"><i
                        class="fab fa-instagram"></i></a></li>
        </ul>
    </div> <!--  End Mobile-offcanvas Menu Section   -->
</header>

