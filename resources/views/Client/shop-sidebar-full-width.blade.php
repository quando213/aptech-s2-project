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
                                    @foreach($data as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <!-- Start Single Default Product -->
                                        <div class="product__box product__default--single text-center" >
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative" style="height: 200px">
                                                <a class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{ $item->thumbnail }}" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-34%</span>
                                                <!-- End Procuct Label -->
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link pos-absolute">
                                                    <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                    <li><a href="{{'/products/detail/'.$item->id}}" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content m-t-20">

                                                <a href="/product-single-default" class="product__link">{{ $item->name }}</a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">{{ number_format($item->price)  }} VND</span>
                                                </div>
                                            </div> <!-- End Product Content -->
                                        </div> <!-- End Single Default Product -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane shop-list" id="sort-list">
                                <div class="row">
                                @foreach($data as $item)
                                    <!-- Start Single List Product -->
                                    <div class="col-12">
                                        <div class="product__box product__box--list">
                                            <!-- Start Product Image -->
                                            <div class="product__img-box  pos-relative text-center">
                                                <a href="/product-single-default" class="product__img--link">
                                                    <img class="product__img img-fluid" src="{{ $item->thumbnail }}" alt="">
                                                </a>
                                                <!-- Start Procuct Label -->
                                                <span class="product__label product__label--sale-dis">-31%</span>
                                                <!-- End Procuct Label -->
                                            </div> <!-- End Product Image -->
                                            <!-- Start Product Content -->
                                            <div class="product__content">

                                                <a href="/product-single-default" class="product__link"><h5 class="font--regular">
                                                    {{$item->name}}</h5></a>
                                                <div class="product__price m-t-5">
                                                    <span class="product__price">{{ number_format($item->price) }} VND</span>
                                                </div>
                                                <div class="product__desc">
                                                    <p>
                                                        {{ $item->description }}
                                                    </p>
                                                </div>
                                                <!-- Start Product Action Link-->
                                                <ul class="product__action--link-list m-t-30">
                                                    <li><a href="#modalAddCart" data-toggle="modal" class="btn--black btn--black-hover-green">Thêm vào giỏ hàng</a></li>
                                                    <li><a href="/compare"><i class="icon-sliders"></i></a></li>
                                                    <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                </ul> <!-- End Product Action Link -->
                                            </div> <!-- End Product Content -->
                                        </div>
                                    </div> <!-- End Single List Product -->
                                    @endforeach
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


