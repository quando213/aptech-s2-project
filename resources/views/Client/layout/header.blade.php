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
                                        <li class="dropdown__list pos-relative">
                                            <a href="/frequently-questions" class="dropdown__link">Đơn hàng của bạn</a>
                                        </li>
                                        <li class="dropdown__list"><a href="{{route('logout')}}" class="dropdown__link">Đăng
                                                xuất</a></li>
                                        {{--                                            <li class="dropdown__list"><a href="404.html" class="dropdown__link">404 Page</a></li>--}}
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
                            <li class="header__nav-item pos-relative" >
                                <a href="{{route('register')}}" style="font-size: 13px" class="header__nav-link">
                                    <i class="fas fa-bell" aria-hidden="true"></i>
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
                        <li><a href="#offcanvas-mobile-menu" class="offcanvas-toggle"><i class="far fa-bars"></i></a>
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
                        <a style="font-size: 13px" class="header__nav-link"> <i class="fa-fw fas fa-user">
                                aria-hidden="true"></i> {{\Illuminate\Support\Facades\Auth::user()->last_name . ' ' .\Illuminate\Support\Facades\Auth::user()->first_name}}
                        </a>
                        <ul class="dropdown__menu pos-absolute">
                            <li class="dropdown__list"><a href="{{route('myAccount')}}" class="dropdown__link">Thông tin của bạn</a></li>
                            <li class="dropdown__list pos-relative">
                                <a href="/frequently-questions" class="dropdown__link">Đơn hàng của bạn</a>
                            </li>
                            <li class="dropdown__list"><a href="{{route('logout')}}" class="dropdown__link">Đăng
                                    xuất</a></li>
                            {{--                                            <li class="dropdown__list"><a href="404.html" class="dropdown__link">404 Page</a></li>--}}
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

    <!--  Start Popup Add Cart  -->
    {{--    offcanvas-open--}}
    <div id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart ">
        <div class="offcanvas__top">
            <a href="{{ route('viewCart') }}">
                <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Giỏ hàng</span>
            </a>
            <button class="offcanvas-close"><i class="fal fa-times"></i></button>
        </div>
    @if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
        <!-- Start Add Cart Item Box-->
            <ul class="offcanvas-add-cart__menu">
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                <!-- Start Single Add Cart Item-->
                    <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                        <div class="row offcanvas-add-cart__content d-flex align-items-start m-r-10">
                            <div class="col-5">
                                <div class="offcanvas-add-cart__img-box pos-relative">
                                    <a href="{{ route('detailProduct', $item->id) }}"
                                       class="offcanvas-add-cart__img-link img-responsive">
                                        <img src="{{ $item->options->thumbnail }}" alt="{{ $item->name }}"
                                             class="add-cart__img">
                                    </a>
                                    <span class="offcanvas-add-cart__item-count pos-absolute">{{ $item->qty }}x</span>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="offcanvas-add-cart__detail">
                                    <a href="/product-single-default" class="offcanvas-add-cart__link">{{ $item->name }}</a>
                                    <span class="offcanvas-add-cart__price">{{ number_format($item->price) }}đ</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('removeCart', ['rowId' => $item->rowId]) }}">
                            <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                        </a>
                    </li> <!-- Start Single Add Cart Item-->
                @endforeach
            </ul> <!-- Start Add Cart Item Box-->
            <!-- Start Add Cart Checkout Box-->
            <div class="offcanvas-add-cart__checkout-box-bottom">
                <!-- Start offcanvas Add Cart Checkout Info-->
                <ul class="offcanvas-add-cart__checkout-info">
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Tạm tính</span>
                        <span
                            class="offcanvas-add-cart__checkout-right-info"><span class="cart-total">{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span>đ</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Phí vận chuyển</span>
                        <span class="offcanvas-add-cart__checkout-right-info">0đ</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <!-- Start Single Add Cart Checkout Info-->
                    <li class="offcanvas-add-cart__checkout-list">
                        <span class="offcanvas-add-cart__checkout-left-info">Thành tiền</span>
                        <span class="offcanvas-add-cart__checkout-right-info"><span class="cart-total">{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</span>đ</span>
                    </li> <!-- End Single Add Cart Checkout Info-->
                </ul> <!-- End offcanvas Add Cart Checkout Info-->

                <div class="offcanvas-add-cart__btn-checkout">
                    <a href="{{ route('checkout') }}"
                       class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Tiến
                        hành thanh toán</a>
                </div>
            </div> <!-- End Add Cart Checkout Box-->
        @else
            <div>Chưa có sản phẩm nào trong giỏ hàng.</div>
            <div class="mt-3">
                <a href="{{ route('home') }}" class="btn btn--block btn--radius btn--box btn--green btn--green-hover-black btn--large btn--uppercase font--bold">Mua sắm ngay</a>
            </div>
    @endif
    </div> <!-- End Popup Add Cart -->


    {{--    style="display: block"--}}
    <div class="offcanvas-overlay"></div>
</header>

