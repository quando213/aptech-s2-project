@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tất Cả Các Sản Phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <!-- Start Rightside - Content -->
                <div class="col-12">
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

{{--                        <div class="sort-box-item d-flex align-items-center flex-warp">--}}
{{--                            <span>Sort By:</span>--}}
{{--                            <div class="sort-box__option">--}}
{{--                                <label class="select-sort__arrow">--}}
{{--                                    <select name="select-sort" class="select-sort">--}}
{{--                                        <option value="1">Relevance</option>--}}
{{--                                        <option value="2">Name, A to Z</option>--}}
{{--                                        <option value="3"> Name, Z to A </option>--}}
{{--                                        <option value="4"> Price, low to high</option>--}}
{{--                                        <option value="5">Price, high to low</option>--}}
{{--                                    </select>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="sort-box-item">--}}
{{--                            <span>Showing 1 - 9 of 12 result</span>--}}
{{--                        </div>--}}
                    </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                    <div class="product-tab-area">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active shop-grid" id="sort-grid">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
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
                                                <a href="/product-single-default" class="product__link">Fresh green apple</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
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
                                                <a href="/product-single-default" class="product__link">Juice fresh orange</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
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
                                                <a href="/product-single-default" class="product__link">Best ripe grapes</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
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
                                                <a href="/product-single-default" class="product__link">Cow fresh milk</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$75.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
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
                                                <a href="/product-single-default" class="product__link">Fresh Red Tomato</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$10.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
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
                                                <a href="/product-single-default" class="product__link">Fresh green vegetable</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$29.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                </a>
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
                                                <a href="/product-single-default" class="product__link">Fresh river fish</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$25.00</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-10%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2023/09/27"></div>
                                                </div> <!-- End Product Countdown -->
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
                                                <a href="/product-single-default" class="product__link">Fresh pomegranate</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$19.00 <del>$21.00</del></span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane shop-list" id="sort-list">
                                <div class="row">
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
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
                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Best Red Meat</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$55.00 <del>$80.00</del></span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                                                    </p>
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
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <!-- Start Single List Product -->
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-35%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Countdown -->
                                                <div class="product__counter-box">
                                                    <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                </div> <!-- End Product Countdown -->
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
                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Best Ripe Grapes</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$39.00 <del>$60.00</del></span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single List Product -->
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <!-- Start Single List Product -->
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                </a>
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
                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Cabbage Vegetables</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single List Product -->
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <!-- Start Single List Product -->
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-out">Soldout</span>
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
                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">Cow Fresh Milk</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">$50.00</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Add to cart</a></li>
                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single List Product -->
                                    </div> <!-- End Single List Product -->
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
                </div>  <!-- Start Rightside - Content -->
            </div>
        </div>
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->

@endsection


