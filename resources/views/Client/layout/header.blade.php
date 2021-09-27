<header>
    <!--  Start Large Header Section   -->
    <div class="header d-none d-lg-block">
        <!-- Start Header Top area -->
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__top-content d-flex justify-content-between align-items-center">
                            <div class="header__top-content--left">
                                <span>Giao hàng miễn phí: Tận dụng thời gian của chúng tôi để tiết kiệm chi phí</span>
                            </div>
                            {{--                            <ul class="header__top-content--right user-set-role d-flex">--}}
                            {{--                                <li class="user-currency pos-relative">--}}
                            {{--                                    <a class="user-set-role__button" href="#" data-toggle="dropdown"--}}
                            {{--                                       aria-expanded="false">Select Language<i class="fal fa-chevron-down"></i></a>--}}
                            {{--                                    <ul class="expand-dropdown-menu dropdown-menu">--}}
                            {{--                                        <li><a href="https://translate.google.com/"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a>--}}
                            {{--                                        </li>--}}
                            {{--                                        <li><a href="https://translate.google.com/"><img src="assets/img/icon/flag/icon_france.png"--}}
                            {{--                                                             alt="">French</a></li>--}}
                            {{--                                        <li><a href="https://translate.google.com/"><img src="https://cdn.countryflags.com/thumbs/vietnam/flag-400.png"--}}
                            {{--                                                             alt="" style="width: 20px">Việt Nam</a></li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="user-info pos-relative">--}}
                            {{--                                    <a class="user-set-role__button" href="#" data-toggle="dropdown"--}}
                            {{--                                       aria-expanded="false">Select Currency <i class="fal fa-chevron-down"></i></a>--}}
                            {{--                                    <ul class="expand-dropdown-menu dropdown-menu">--}}
                            {{--                                        <li><a href="#">USD</a></li>--}}
                            {{--                                        <li><a href="#">POUND</a></li>--}}
                            {{--                                    </ul>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Start Header Top area -->

        <!-- Start Header Center area -->
        <div class="header__center sticky-header p-tb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <!-- Start Logo -->
                        <div class="header__logo">
                            <a href="/" class="header__logo-link img-responsive">
                                <img class="header__logo-img img-fluid" src="assets/img/logo/logo.png" alt="">
                            </a>
                        </div> <!-- End Logo -->
                        <!-- Start Header Menu -->
                        <div class="header-menu">
                            <nav>
                                <ul class="header__nav">
                                    <!--Start Single Nav link-->
                                    <li class="header__nav-item pos-relative">
                                        <a href="/" class="header__nav-link">Trang Chủ</a>
                                    </li> <!-- End Single Nav link-->
                                    <li class="header__nav-item pos-relative">
                                        <a href="/" class="header__nav-link">Combo</a>
                                    </li> <!-- End Single Nav link-->
                                    <!--Start Single Nav link-->
                                    <li class="header__nav-item pos-relative">
                                        <a href="{{route('product')}}" class="header__nav-link">Sản Phẩm <i
                                                class="fal fa-chevron-down"></i></a>
                                        <!-- Megamenu Menu-->
                                        <ul class="dropdown__menu pos-absolute">
                                            <li class="dropdown__list">
                                                <!--Single Megamenu Item Menu-->
                                                <div class="mega-menu__item-box">
                                                    <span class="mega-menu__title">Danh Sách Sản Phẩm</span>
                                                    @foreach($categories as $category)
                                                        <ul class="mega-menu__item">
                                                            <li class="mega-menu__list">
                                                                <a href="{{route('category',$category->id) }}"
                                                                   class="mega-menu__link">{{$category->name}}</a>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                    {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                                    {{--                                                                                       class="mega-menu__link">Rau-Củ-Quả</a>--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                                    {{--                                                                                       class="mega-menu__link">Trái--}}
                                                    {{--                                                                Cây</a>--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                                    {{--                                                                                       class="mega-menu__link">Đồ--}}
                                                    {{--                                                                uống</a>--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                                    {{--                                                                                       class="mega-menu__link">Bánh--}}
                                                    {{--                                                                Kẹo</a>--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                                    {{--                                                                                       class="mega-menu__link">Các Sản--}}
                                                    {{--                                                                Phẩm--}}
                                                    {{--                                                                Từ Sữa</a></li>--}}
                                                    {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                                    {{--                                                                                       class="mega-menu__link">đồ Khô--}}
                                                    {{--                                                                Gia--}}
                                                    {{--                                                                Vị</a></li>--}}

                                                </div>
                                                <!--Single Megamenu Item Menu-->
                                            {{--                                                <div class="mega-menu__item-box">--}}
                                            {{--                                                    <span class="mega-menu__title">Sản Phẩm Đóng Hộp</span>--}}
                                            {{--                                                    <ul class="mega-menu__item">--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Thịt</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Cá</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Xúc Xích</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Khác</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại gia vị</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a--}}
                                            {{--                                                                href="shop-sidebar-right-list-view.html"--}}
                                            {{--                                                                class="mega-menu__link">List Right Sidebar</a></li>--}}

                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <div class="mega-menu__item-box">--}}
                                            {{--                                                    <span class="mega-menu__title">Sản Phẩm Rau Củ</span>--}}
                                            {{--                                                    <ul class="mega-menu__item">--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Rau Xanh</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Trái Cây</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Củ</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                                                       class="mega-menu__link">Các Loại Đồ Khô</a></li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a href="/category"--}}
                                            {{--                                                        --}}{{--                                                                                       class="mega-menu__link">Các Loại gia vị</a></li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a--}}
                                            {{--                                                        --}}{{--                                                                href="shop-sidebar-right-list-view.html"--}}
                                            {{--                                                        --}}{{--                                                                class="mega-menu__link">List Right Sidebar</a></li>--}}

                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <!--Single Megamenu Item Menu-->--}}
                                            {{--                                                <div class="mega-menu__item-box">--}}
                                            {{--                                                    <span class="mega-menu__title">Giỏ Hàng</span>--}}
                                            {{--                                                    <ul class="mega-menu__item">--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/cart"--}}
                                            {{--                                                                                       class="mega-menu__link">Giỏ Hàng</a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/checkout"--}}
                                            {{--                                                                                       class="mega-menu__link">Thanh Toán</a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a href="compare.html" class="mega-menu__link">Compare</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list pos-relative">--}}
                                            {{--                                                            <a href="/emply-cart" class="mega-menu__link">Giỏ Hàng Rỗng</a>--}}
                                            {{--                                                            <span class="menu-label menu-label--blue">Mới</span>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a href="wishlist.html" class="mega-menu__link">Wishlist</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/my-account"--}}
                                            {{--                                                                                       class="mega-menu__link">Tài Khoản Người Dùng </a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/login"--}}
                                            {{--                                                                                       class="mega-menu__link">Đăng Nhập</a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            <!--Single Megamenu Item Menu-->

                                                <!--Single Megamenu Item Menu-->
                                            {{--                                                <div class="mega-menu__item-box">--}}
                                            {{--                                                    <span class="mega-menu__title">Chi Tiết Sản Phẩm</span>--}}
                                            {{--                                                    <ul class="mega-menu__item">--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/product-single-default"--}}
                                            {{--                                                                                       class="mega-menu__link">Simple</a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a href="product-single-affiliate.html" class="mega-menu__link">Affiliate</a></li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list pos-relative">--}}
                                            {{--                                                        --}}{{--                                                            <a href="product-single-group.html" class="mega-menu__link">Grouped</a>--}}
                                            {{--                                                        --}}{{--                                                            <span class="menu-label menu-label--red">New</span>--}}
                                            {{--                                                        --}}{{--                                                        </li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a href="product-single-variable.html" class="mega-menu__link">Variable</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="/product-single-tab-left"--}}
                                            {{--                                                                                       class="mega-menu__link">Left--}}
                                            {{--                                                                Tab</a></li>--}}
                                            {{--                                                        --}}{{--                                                        <li class="mega-menu__list"><a href="product-single-tab-right.html" class="mega-menu__link">Right Tab</a></li>--}}
                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            <!--Single Megamenu Item Menu-->

                                                <!--Single Megamenu Item Menu-->
                                            {{--                                                <div class="mega-menu__item-box">--}}
                                            {{--                                                    <span class="mega-menu__title">Product Single</span>--}}
                                            {{--                                                    <ul class="mega-menu__item">--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="product-single-slider.html" class="mega-menu__link">Single Slider</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="product-single-gallery-left.html" class="mega-menu__link">Gallery Left</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="product-single-gallery-right.html" class="mega-menu__link">Gallery Right</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list"><a href="product-single-sticky-left.html" class="mega-menu__link">Sticky Left</a></li>--}}
                                            {{--                                                        <li class="mega-menu__list pos-relative">--}}
                                            {{--                                                            <a href="product-single-sticky-right.html" class="mega-menu__link">Sticky Right</a>--}}
                                            {{--                                                            <span class="menu-label menu-label--blue">New</span>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            <!--Single Megamenu Item Menu-->

                                                <!--Single Megamenu Item Menu-->
                                            {{--                                                <div class="mega-menu__item-box">--}}
                                            {{--                                                    <ul class="mega-menu__item">--}}
                                            {{--                                                        <!--Megamenu Item Banner-->--}}
                                            {{--                                                        <li class="mega-menu__banner ">--}}
                                            {{--                                                            <a href="/product-single-default"--}}
                                            {{--                                                               class="mega-menu__banner-link">--}}
                                            {{--                                                                <img src="assets/img/banner/menu-banner.jpg" alt=""--}}
                                            {{--                                                                     class="mega-menu__banner-img mega-menu__banner-img--vertical">--}}
                                            {{--                                                            </a>--}}
                                            {{--                                                        </li>--}}
                                            {{--                                                        <!--Megamenu Item Banner-->--}}
                                            {{--                                                    </ul>--}}
                                            {{--                                                </div>--}}
                                            <!--Single Megamenu Item Menu-->
                                            </li>

                                        </ul>
                                        <!-- Megamenu Menu-->
                                    </li> <!-- Start Single Nav link-->

                                    <!--Start Single Nav link-->
                                {{--                                    <li class="header__nav-item pos-relative">--}}
                                {{--                                        <a href="#" class="header__nav-link">Chất lượng thực phẩm <i--}}
                                {{--                                                class="fal fa-chevron-down"></i></a>--}}
                                {{--                                        <!-- Megamenu Menu-->--}}
                                {{--                                        <ul class="mega-menu pos-absolute">--}}
                                {{--                                            <li class="mega-menu__box">--}}
                                {{--                                                <!--Single Megamenu Item Menu-->--}}
                                {{--                                                <div class="mega-menu__item-box">--}}
                                {{--                                                    <span class="mega-menu__title">Sức Khỏe</span>--}}
                                {{--                                                    <ul class="mega-menu__item">--}}
                                {{--                                                        <li><p>100% các sản phẩm đều là thực phẩm tươi sống, không có--}}
                                {{--                                                                chất bảo quản hay thuốc trừ sâu.</p>--}}
                                {{--                                                            <p>đảm bảo các sản phẩm đều tốt cho sức khỏe của con--}}
                                {{--                                                                người</p></li>--}}
                                {{--                                                    </ul>--}}
                                {{--                                                </div>--}}
                                {{--                                                <!--Single Megamenu Item Menu-->--}}

                                {{--                                                <!--Single Megamenu Item Menu-->--}}
                                {{--                                                <div class="mega-menu__item-box">--}}
                                {{--                                                    <span class="mega-menu__title">Chất Lượng Thực Phẩm</span>--}}
                                {{--                                                    <ul class="mega-menu__item">--}}
                                {{--                                                        <li><p>Tất cả các sản phẩm đều được kiểm định an toàn thực--}}
                                {{--                                                                phẩm.</p></li>--}}
                                {{--                                                    </ul>--}}
                                {{--                                                </div>--}}
                                {{--                                                <!--Single Megamenu Item Menu-->--}}

                                {{--                                                <!--Single Megamenu Item Menu-->--}}
                                {{--                                                <div class="mega-menu__item-box">--}}
                                {{--                                                    <span class="mega-menu__title">Chất lượng dinh dưỡng</span>--}}
                                {{--                                                    <ul class="mega-menu__item">--}}
                                {{--                                                        <li><p>Đảm bảo các sản phẩm đều mang lại các chất dinh dưỡng tốt--}}
                                {{--                                                                cho cơ thể của con người.</p></li>--}}
                                {{--                                                    </ul>--}}
                                {{--                                                </div>--}}
                                {{--                                                <!--Single Megamenu Item Menu-->--}}

                                {{--                                            </li>--}}
                                {{--                                            <!--Megamenu Item Banner-->--}}
                                {{--                                            <li class="mega-menu__banner m-t-30">--}}
                                {{--                                                <a href="/product-single-default" class="mega-menu__banner-link">--}}
                                {{--                                                </a>--}}
                                {{--                                                <img src="assets/img/banner/menu-banner-2.png" alt=""--}}
                                {{--                                                     class="mega-menu__banner-img mega-menu__banner-img--horaizontal">--}}
                                {{--                                            </li>--}}
                                {{--                                            <!--Megamenu Item Banner-->--}}
                                {{--                                        </ul>--}}
                                {{--                                        <!-- Megamenu Menu-->--}}
                                {{--                                    </li> <!-- Start Single Nav link-->--}}

                                {{--                                    <!--Start Single Nav link-->--}}
                                {{--                                    <li class="header__nav-item pos-relative">--}}
                                {{--                                        <a href="#" class="header__nav-link">Blog<i class="fal fa-chevron-down"></i></a>--}}
                                {{--                                        <!--Single Dropdown Menu-->--}}
                                {{--                                        <ul class="dropdown__menu pos-absolute">--}}
                                {{--                                            --}}{{--                                            <li class="dropdown__list">--}}
                                {{--                                            --}}{{--                                                <a href="#" class="dropdown__link d-flex justify-content-between align-items-center">Blog Grid <i class="far fa-chevron-right"></i></a>--}}
                                {{--                                            --}}{{--                                                <ul class="dropdown__submenu pos-absolute">--}}
                                {{--                                            --}}{{--                                                    <li class="dropdown__submenu-list"><a href="/blog-simple-sidebar-left" class="dropdown__submenu-link"> Blog Grid Left Sidebar</a></li>--}}
                                {{--                                            --}}{{--                                                    <li class="dropdown__submenu-list"><a href="blog-grid-sidebar-right.html" class="dropdown__submenu-link"> Blog Grid Right Sidebar</a></li>--}}
                                {{--                                            --}}{{--                                                </ul>--}}
                                {{--                                            --}}{{--                                            </li>--}}
                                {{--                                            <li class="dropdown__list">--}}
                                {{--                                                <a href="#"--}}
                                {{--                                                   class="dropdown__link d-flex justify-content-between align-items-center">Blog--}}
                                {{--                                                    List <i class="far fa-chevron-right"></i></a>--}}
                                {{--                                                <ul class="dropdown__submenu pos-absolute">--}}
                                {{--                                                    <li class="dropdown__submenu-list"><a href="/blog-list-sidebar-left"--}}
                                {{--                                                                                          class="dropdown__submenu-link">--}}
                                {{--                                                            Blog List Left Sidebar</a></li>--}}
                                {{--                                                    --}}{{--                                                                                                <li class="dropdown__submenu-list"><a href="blog-list-sidebar-right.html" class="dropdown__submenu-link"> Blog List Right Sidebar</a></li>--}}
                                {{--                                                </ul>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="dropdown__list">--}}
                                {{--                                                <a href="#"--}}
                                {{--                                                   class="dropdown__link d-flex justify-content-between align-items-center">Blog--}}
                                {{--                                                    Single <i class="far fa-chevron-right"></i></a>--}}
                                {{--                                                <ul class="dropdown__submenu pos-absolute">--}}
                                {{--                                                    <li class="dropdown__submenu-list"><a--}}
                                {{--                                                            href="/blog-simple-sidebar-left"--}}
                                {{--                                                            class="dropdown__submenu-link"> Blog Single Left Sidebar</a>--}}
                                {{--                                                    </li>--}}
                                {{--                                                    --}}{{--                                                    <li class="dropdown__submenu-list"><a href="blog-single-sidebar-right.html" class="dropdown__submenu-link"> Blog Single Right Sidebar</a></li>--}}
                                {{--                                                </ul>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                {{--                                        <!--Single Dropdown Menu-->--}}
                                {{--                                    </li> <!-- End Single Nav link-->--}}

                                <!--Start Single Nav link-->
                                    {{--                                    <li class="header__nav-item pos-relative">--}}
                                    {{--                                        <a href="#" class="header__nav-link">Liên Quan <i--}}
                                    {{--                                                class="fal fa-chevron-down"></i></a>--}}
                                    {{--                                        <span class="menu-label menu-label--blue">Mới</span>--}}
                                    {{--                                        <!--Single Dropdown Menu-->--}}
                                    {{--                                        <ul class="dropdown__menu pos-absolute">--}}
                                    {{--                                            <li class="dropdown__list"><a href="/about" class="dropdown__link">Chúng--}}
                                    {{--                                                    tôi</a></li>--}}
                                    {{--                                            <li class="dropdown__list pos-relative">--}}
                                    {{--                                                <a href="/frequently-questions" class="dropdown__link">Câu Hỏi Thường--}}
                                    {{--                                                    Gặp</a>--}}
                                    {{--                                                <span class="menu-label menu-label--blue">Mới</span>--}}
                                    {{--                                            </li>--}}
                                    {{--                                            <li class="dropdown__list"><a href="/privacy-policy" class="dropdown__link">Chính--}}
                                    {{--                                                    Sách bảo Mật</a></li>--}}
                                    {{--                                            --}}{{--                                            <li class="dropdown__list"><a href="404.html" class="dropdown__link">404 Page</a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                        <!--Single Dropdown Menu-->--}}
                                    {{--                                    </li> <!-- End Single Nav link-->--}}

                                    {{--                                    <!--Start Single Nav link-->--}}
                                    {{--                                    <li class="header__nav-item pos-relative">--}}
                                    {{--                                        <a href="/contact" class="header__nav-link">Liên Hệ </a>--}}
                                    {{--                                    </li> <!-- End Single Nav link-->--}}
                                </ul>
                            </nav>
                        </div> <!-- End Header Menu -->
                        <!-- Start Wishlist-AddCart -->
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
                                                                                            aria-hidden="true"></i> {{\Illuminate\Support\Facades\Auth::user()->first_name . ' ' .\Illuminate\Support\Facades\Auth::user()->last_name}}
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
                                        class="wishlist-item-count pos-absolute">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
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

        <!-- Start Header bottom area -->
        <div class="header__bottom p-tb-30">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-menu-vertical pos-relative">
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>Lựa Chọn</h4>
                            <ul class="menu-content pos-absolute">
                                <li class="menu-item"><a href="#">Tìm Kiếm</a></li>
                                {{--                                <li class="menu-item"><a href="#">Advanced Search</a></li>--}}
                                <li class="menu-item"><a href="#">Trợ Giúp và Câu Hỏi </a></li>
                                <li class="menu-item"><a href="#">Vị Trí Cửa Hàng</a></li>
                                <li class="menu-item"><a href="#"> Đơn Hàng </a></li>
                                <li class="menu-item"><a href="#"> Giao Hàng</a></li>
                                {{--                                <li class="menu-item"><a href="#"> Refund & Returns</a></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <form class="header-search m-tb-15" action="{{route('search')}}" method="get">
                            @csrf
                            <div class="header-search__content pos-relative">
                                <input type="search" name="header_search" placeholder="Tìm Kiếm" required>
                                <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="header-phone text-right"><span>Liên Hệ SĐT  0929427881</span></div>
                    </div>
                </div>
            </div>
        </div> <!-- End Header bottom area -->

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
                                    <img src="assets/img/logo/logo.png" alt="" class="header__mobile-logo-img">
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
                                    class="wishlist-item-count pos-absolute">{{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>
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
                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>Lựa Chọn</h4>
                        <ul class="menu-content pos-absolute">
                            <li class="menu-item"><a href="#">Tìm Kiếm</a></li>
                            {{--                            <li class="menu-item"><a href="#">Advanced Search</a></li>--}}
                            <li class="menu-item"><a href="#">Trợ Giúp và Câu Hỏi</a></li>
                            <li class="menu-item"><a href="#">Vị Trí Cửa Hàng</a></li>
                            <li class="menu-item"><a href="#"> Đơn Hàng</a></li>
                            <li class="menu-item"><a href="#"> Giao Hàng</a></li>
                            {{--                            <li class="menu-item"><a href="#"> Refund & Returns</a></li>--}}
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
            <form class="header-search m-tb-15" action="{{route('search')}}" method="get">
                @csrf
                <div class="header-search__content pos-relative">
                    <input type="search" name="header_search" placeholder="Tìm Kiếm" required>
                    <button class="pos-absolute" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
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
                                aria-hidden="true"></i> {{\Illuminate\Support\Facades\Auth::user()->first_name . ' ' .\Illuminate\Support\Facades\Auth::user()->last_name}}
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
                <li>
                    <a href="/cart">
                        <i class="icon-shopping-cart"></i>
                        <span class="wishlist-item-count pos-absolute">3</span>
                    </a>
                </li>
            </ul>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="/"><span>Trang Chủ</span></a></li>
                    <li>
                        <a href="{{route('product')}}"><span>Sản Phẩm</span></a>
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{route('category',$category->id) }}">{{$category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
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
            <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Giỏ Hàng</span>
            <button class="offcanvas-close"><i class="fal fa-times"></i></button>
        </div>
        <!-- Start Add Cart Item Box-->
        <ul class="offcanvas-add-cart__menu">
            @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() > 0)
                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                    <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                        <div class="offcanvas-add-cart__content d-flex align-items-start m-r-10">
                            <div class="offcanvas-add-cart__img-box pos-relative">
                                <a href="{{route('detailProduct',$item->id)}}"
                                   class="offcanvas-add-cart__img-link img-responsive"><img
                                        src="{{$item->options->thumbnail}}" style="width: 100px;height: 100px" alt=""
                                        class="add-cart__img"></a>
                                <span class="offcanvas-add-cart__item-count pos-absolute">{{$item->qty}}x</span>
                            </div>
                            <div class="offcanvas-add-cart__detail">
                                <a href="{{route('detailProduct',$item->id)}}" class="offcanvas-add-cart__link">{{$item->name}}</a>
                                <span class="offcanvas-add-cart__price">{{$item->subtotal(0)}} ₫</span>
                            </div>
                        </div>
                        <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                    </li>
                @endforeach
            @endif
        </ul> <!-- Start Add Cart Item Box-->
        <!-- Start Add Cart Checkout Box-->
        <div class="offcanvas-add-cart__checkout-box-bottom">
            <!-- Start offcanvas Add Cart Checkout Info-->
            <ul class="offcanvas-add-cart__checkout-info">
                <!-- Start Single Add Cart Checkout Info-->
                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Tổng Giá Sản Phẩm</span>
                    <span class="offcanvas-add-cart__checkout-right-info">{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} ₫</span>
                </li>
            </ul>

            <div class="offcanvas-add-cart__btn-checkout">
                <a href="{{route('checkout')}}"
                   class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Tiến
                    Hành Thanh Toán</a>
            </div>
        </div> <!-- End Add Cart Checkout Box-->
    </div> <!-- End Popup Add Cart -->


    {{--    style="display: block"--}}
    <div class="offcanvas-overlay"></div>
</header>

