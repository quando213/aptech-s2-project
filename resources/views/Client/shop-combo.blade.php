@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Các gói sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widget -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Filter [Catagory] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">DANH MỤC SẢN PHẨM</h5>
                            </div>
                            <ul class="sidebar__menu">
                                @foreach($categori as $data)
                                    <li ><a href="{{route('option', $data->id)}}">{{$data -> name}}</a></li>
                                @endforeach

{{--                                <li ><a href="#"> Men's</a></li>--}}
{{--                                <li ><a href="#"> Portable Audio</a></li>--}}
{{--                                <li ><a href="#"> Smart Watches</a></li>--}}
{{--                                <li ><a href="#">Tennis</a></li>--}}
{{--                                <li ><a href="#"> Uncategorized</a></li>--}}
{{--                                <li ><a href="#"> Video Games</a></li>--}}
{{--                                <li ><a href="#">Women's</a></li>--}}
                            </ul>
                        </div>  <!-- End SSingle Sidebar Widget - Filter [Catagory] -->

                        <!-- Start Single Sidebar Widget - Filter [Price] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">FILTER BY Price ($)</h5>
                            </div>
                            <div class="sidebar__price-filter ">
                                <div id="slider-range" class="price-filter-range"></div>
                                <div class="slider__price-filter-input d-flex justify-content-between">
                                    <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                                    <input type="number" min=0 max="10000" oninput="validity.valid||(value='1000');" id="max_price" class="price-range-field" />
                                </div>
                            </div>
                        </div>  <!-- Start Single Sidebar Widget - Filter [Price] -->

                        <!-- ::::::  Start Sidebar Widget - Top Product   ::::::  -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">TOP RATED PRODUCTS</h5>
                            </div>
                            <ul class="sidebar__post-product list-space--medium ">
                                <li  class="d-flex align-items-center">
                                    <a href="/product-single-default" class="sidebar__product-img img-responsive">
                                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                    </a>
                                    <div class="product__content">
                                        <a href="/product-single-default" class="product__link">Fresh Eggs</a>
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <div class="product__price">
                                            <span class="product__price">$10.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li  class="d-flex align-items-center">
                                    <a href="/product-single-default" class="sidebar__product-img img-responsive">
                                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                                    </a>
                                    <!-- Start Product Content -->
                                    <div class="product__content">
                                        <a href="/product-single-default" class="product__link">Fresh Fruits</a>
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <div class="product__price">
                                            <span class="product__price">$17.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </li>
                                <li  class="d-flex align-items-center">
                                    <a href="/product-single-default" class="sidebar__product-img img-responsive">
                                        <img class="product__img img-fluid" src="assets/img/product/size-small/product-home-1-img-3.jpg" alt="">
                                    </a>
                                    <!-- Start Product Content -->
                                    <div class="product__content">
                                        <a href="/product-single-default" class="product__link">Natural Juice</a>
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
                                        <div class="product__price">
                                            <span class="product__price">$25.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </li>
                            </ul>
                        </div> <!-- ::::::  End Sidebar Widget - Top Product  ::::::  -->

                        <!-- ::::::  Start Sidebar Widget - Tag  ::::::  -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Tags</h5>
                            </div>
                            <ul class="sidebar__tag list-space--small">
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">blue</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gold</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gray</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">green</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">maroon</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">red</a></li>
                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">white</a></li>
                            </ul>
                        </div> <!-- ::::::  Start Sidebar Widget - Tag  ::::::  -->
                    </div>
                </div> <!-- End Left Sidebar Widget -->

                <!-- Start Rightside - Product Type View -->
                <div class="col-lg-9">
                    <div class="img-responsive">
                        <img src="assets/img/banner/size-wide/banner-shop-1-img-1-wide.jpg" alt="">
                    </div>
                    <!-- ::::::  Start Sort Box Section  ::::::  -->
                    <div class="sort-box m-tb-40">
                        <!-- Start Sort Left Side -->
                        <div class="sort-box-item">
                            <div class="sort-box__tab">
                                <ul class="sort-box__tab-list nav">
                                    <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i class="fas fa-th"></i>  </a></li>
                                    <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i class="fas fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- Start Sort Left Side -->

                        <div class="sort-box-item d-flex align-items-center flex-warp">
                            <span>Sắp xếp theo:</span>
                            <div class="sort-box__option">
                                <label class="select-sort__arrow">
                                    <select name="select-sort" class="select-sort">
                                        <option value="1">Mặc định</option>
                                        <option value="2">Tên, A -> Z</option>
                                        <option value="3">Tên, Z -> A</option>
                                        <option value="4">Giá tăng dần</option>
                                        <option value="5">Giá giảm dần</option>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="sort-box-item">
                            <span>Showing 1 - 9 of 12 result</span>
                        </div>
                    </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                    <div class="product-tab-area">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active shop-grid" id="sort-grid">
                                <div class="row">
                                    @foreach($list as $combo)
                                        <div class="col-md-4 col-12">
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__default--single text-center">
                                                <!-- Start Product Image -->
                                                <div class="product__img-box  pos-relative">
                                                    <a href="/product-single-default" class="product__img--link">
                                                        <img class="product__img img-fluid" src="{{$combo -> thumbnail}}" alt="">
                                                    </a>
                                                    <!-- Start Procuct Label -->
                                                    <span class="product__label product__label--sale-dis">-34%</span>
                                                    <!-- End Procuct Label -->
                                                    <!-- Start Product Action Link-->
                                                    <ul class="product__action--link pos-absolute">
                                                        <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                        <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                        <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                    </ul> <!-- End Product Action Link -->
                                                </div> <!-- End Product Image -->
                                                <!-- Start Product Content -->
                                                <div class="product__content m-t-20">
                                                    <ul class="product__review">
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                                    </ul>
                                                    <a href="/product-single-default" class="product__link">{{$combo -> name}}</a>
                                                    <div class="product__price m-t-5">
                                                        <span class="product__price">Giảm giá ₫</span>
                                                    </div>
                                                </div> <!-- End Product Content -->
                                            </div> <!-- End Single Default Product -->
                                        </div>
                                    @endforeach

{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-dis">-34%</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Juice fresh orange</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$19.00 <del>$29.00</del></span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-dis">-35%</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Countdown -->--}}
{{--                                                <div class="product__counter-box">--}}
{{--                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>--}}
{{--                                                </div> <!-- End Product Countdown -->--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Best ripe grapes</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$39.00 <del>$60.00</del></span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-out">Soldout</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Cow fresh milk</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$55.00 <del>$75.00</del></span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-out">Soldout</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Fresh Red Tomato</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$10.00</span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-dis">-34%</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Fresh green vegetable</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$19.00 <del>$29.00</del></span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Fresh river fish</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$25.00</span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-dis">-10%</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Countdown -->--}}
{{--                                                <div class="product__counter-box">--}}
{{--                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>--}}
{{--                                                </div> <!-- End Product Countdown -->--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Fresh pomegranate</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$19.00 <del>$21.00</del></span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4 col-sm-6 col-12">--}}
{{--                                        <!-- Start Single Default Product -->--}}
{{--                                        <div class="product__box product__default--single text-center">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link pos-absolute">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                    <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content m-t-20">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link">Cabbage vegetables</a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$50.00</span>--}}
{{--                                                </div>--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single Default Product -->--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="tab-pane shop-list" id="sort-list">
                                <div class="row">
                                    @foreach($list as $combo)
                                        <!-- Start Single List Product -->
                                            <div class="col-12">
                                                <div class="product__box product__box--list">
                                                    <!-- Start Product Image -->
                                                    <div class="product__img-box  pos-relative text-center">
                                                        <a href="/product-single-default" class="product__img--link">
                                                            <img class="product__img img-fluid" src="{{$combo -> thumbnail}}" alt="">
                                                        </a>
                                                        <!-- Start Procuct Label -->
                                                        <span class="product__label product__label--sale-dis">-31%</span>
                                                        <!-- End Procuct Label -->
                                                    </div> <!-- End Product Image -->
                                                    <!-- Start Product Content -->
                                                    <div class="product__content">
                                                        <ul class="product__review">
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                                        </ul>
                                                        <a href="/product-single-default" class="product__link"><h5 class="font--regular">{{$combo -> name}}}</h5></a>
                                                        <div class="product__price m-t-5">
                                                            <span class="product__price">{{number_format($combo -> price)}} ₫</span>
                                                        </div>
                                                        <!-- Start Product Action Link-->
                                                        <ul class="product__action--link-list m-t-30">
                                                            <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                            <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                            <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                        </ul> <!-- End Product Action Link -->
                                                    </div> <!-- End Product Content -->
                                                </div>
                                            </div> <!-- End Single List Product -->
                                    @endforeach

{{--                                    <!-- Start Single List Product -->--}}
{{--                                    <div class="col-12">--}}
{{--                                        <!-- Start Single List Product -->--}}
{{--                                        <div class="product__box product__box--list">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative text-center">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-dis">-35%</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                                <!-- Start Product Countdown -->--}}
{{--                                                <div class="product__counter-box">--}}
{{--                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>--}}
{{--                                                </div> <!-- End Product Countdown -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Best Ripe Grapes</h5></a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$39.00 <del>$60.00</del></span>--}}
{{--                                                </div>--}}
{{--                                                <div class="product__desc">--}}
{{--                                                    <p>--}}
{{--                                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link-list m-t-30">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single List Product -->--}}
{{--                                    </div> <!-- End Single List Product -->--}}
{{--                                    <!-- Start Single List Product -->--}}
{{--                                    <div class="col-12">--}}
{{--                                        <!-- Start Single List Product -->--}}
{{--                                        <div class="product__box product__box--list">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative text-center">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Cabbage Vegetables</h5></a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$50.00</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="product__desc">--}}
{{--                                                    <p>--}}
{{--                                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link-list m-t-30">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single List Product -->--}}
{{--                                    </div> <!-- End Single List Product -->--}}
{{--                                    <!-- Start Single List Product -->--}}
{{--                                    <div class="col-12">--}}
{{--                                        <!-- Start Single List Product -->--}}
{{--                                        <div class="product__box product__box--list">--}}
{{--                                            <!-- Start Product Image -->--}}
{{--                                            <div class="product__img-box  pos-relative text-center">--}}
{{--                                                <a href="/product-single-default" class="product__img--link">--}}
{{--                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">--}}
{{--                                                </a>--}}
{{--                                                <!-- Start Procuct Label -->--}}
{{--                                                <span class="product__label product__label--sale-out">Soldout</span>--}}
{{--                                                <!-- End Procuct Label -->--}}
{{--                                            </div> <!-- End Product Image -->--}}
{{--                                            <!-- Start Product Content -->--}}
{{--                                            <div class="product__content">--}}
{{--                                                <ul class="product__review">--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                    <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Cow Fresh Milk</h5></a>--}}
{{--                                                <div class="product__price m-t-5">--}}
{{--                                                    <span class="product__price">$50.00</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="product__desc">--}}
{{--                                                    <p>--}}
{{--                                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <!-- Start Product Action Link-->--}}
{{--                                                <ul class="product__action--link-list m-t-30">--}}
{{--                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>--}}
{{--                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>--}}
{{--                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>--}}
{{--                                                </ul> <!-- End Product Action Link -->--}}
{{--                                            </div> <!-- End Product Content -->--}}
{{--                                        </div> <!-- End Single List Product -->--}}
{{--                                    </div> <!-- End Single List Product -->--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Prev</a>
                            <li class="page-pagination__item"><a class="page-pagination__link active"  href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">2</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>  <!-- Start Rightside - Product Type View -->
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection
@section('moddal')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal__product-img">
                                            <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added to cart successfully!</div>
                                        <div class="modal__product-cart-buttons m-tb-15">
                                            <a href="/cart" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View Cart</a>
                                            <a href="/checkout" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal__border">
                                <ul class="modal__product-shipping-info">
                                    <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</li>
                                    <li>TOTAL PRICE: <span>$187.00</span></li>
                                    <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">CONTINUE SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery-box m-b-60">
                                    <div class="modal-product-image--large">
                                        <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Aliquam lobortis</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--fill"><i class="icon-star"></i></li>
                                        <li class="product__review--blank"><i class="icon-star"></i></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Quantity: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease" onclick="decreaseValueModal()" >-</div>
                                                <input type="number" id="modal-number" value="1" />
                                                <div class="value-button" id="modal-increase" onclick="increaseValueModal()" >+</div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>SHARE THIS PRODUCT</span>
                                            <ul class="product-social-link">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

@endsection


