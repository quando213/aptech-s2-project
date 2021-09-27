@extends('Client.layout.index')
@section('contact')
    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <!-- ::::::  Start Hero Section  ::::::  -->
        <div
            class="hero slider-dot-fix slider-dot slider-dot-fix slider-dot--center slider-dot-size--medium slider-dot-circle  slider-dot-style--fill slider-dot-style--fill-white-active-green dot-gap__X--10">
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="/assets/img/hero/hero-home-1-img-1.jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Rau Sạch Tốt Cho Sức
                                        Khỏe</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Rau Hữu
                                        Cơ</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Một Thay Đổi Nhỏ Sự Khác
                                        Biệt Lớn</h4>
                                    <a href="/product/category-single-tab-left"
                                       class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Hiển
                                        Thị</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
            <!-- Start Single Hero Slide -->
            <div class="hero-slider">
                <img src="/assets/img/hero/hero-home-1-img-2 (1).jpg" alt="">
                <div class="hero__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="hero__content--inner">
                                    <h6 class="title__hero title__hero--tiny text-uppercase">100% Rau Sạch Tốt Cho Sức
                                        Khỏe</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Rau Hữu
                                        Cơ</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Một Thay Đổi Nhỏ Sự Khác
                                        Biệt Lớn</h4>
                                    <a href="/product/category-single-tab-left"
                                       class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Hiển
                                        Thị</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
        </div> <!-- ::::::  End Hero Section  ::::::  -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner m-t-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="/product/category-single-tab-left" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-1-wide.jpg" alt=""
                                         class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title  font--regular letter-spacing--4  text-center m-b-10">Rau
                                        Xanh</h6>
                                    <h2 class="banner__title banner__title--large font--medium letter-spacing--4  text-uppercase">
                                        100% Rau Hữu Cơ</h2>
                                    <h6 class="banner__title font--regular letter-spacing--4  text-center m-b-20">
                                        Dinh Dưỡng Có Lợi Cho Sức Khỏe</h6>
                                    <div class="text-center">
                                        <a href="/product/category-single-tab-left"
                                           class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">Mua
                                            Ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="banner__box">
                            <!-- Start Single Banner Item -->
                            <div class="banner__box--single banner__box--single-text-style-1 pos-relative">
                                <a href="/product/category-single-tab-left" class="banner__link">
                                    <img src="assets/img/banner/size-wide/banner-home-1-img-2-wide.jpg" alt=""
                                         class="banner__img">
                                </a>
                                <div class="banner__content banner__content--center pos-absolute">
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-10">Thảo
                                        Dược Tươi </h6>
                                    <h2 class="banner__title banner__title--large letter-spacing--4 font--medium text-uppercase">
                                        Rau BINA</h2>
                                    <h6 class="banner__title letter-spacing--4 font--regular text-center m-b-20">Đồ Ăn
                                        Lành Mạnh</h6>
                                    <div class="text-center">
                                        <a href="/product/category-single-tab-left"
                                           class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">
                                            Mua Ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <!-- ::::::  Start  Product Style - Catagory Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Danh mục sản phẩm</h5>
                            <a href="{{ route('listProduct') }}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Tất cả sản phẩm <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__catagory">
                            <!-- Start Single catagory Product -->
                            @foreach($categories as $category)
                                @if($loop->index < 10)
                                    <div class="product__catagory--single">
                                        <!-- Start Product Content -->
                                        <div class="product__content product__content--catagory">
                                            <a href="{{ route('listProduct', ['category_id' => $category->id]) }}" class="product__link">{{$category->name}} </a>
{{--                                            <span class="product__items--text">2 sản phẩm</span>--}}
                                        </div> <!-- End Product Content -->
                                        <!-- Start Product Image -->
                                        <div class="product__img-box product__img-box--catagory">
                                            <a href="{{ route('listProduct', ['category_id' => $category->id]) }}" class="product__img--link">
                                                <img class="product__img img-fluid" src="{{$category->thumbnail}}" alt="{{ $category->name }}">
                                            </a>
                                        </div> <!-- End Product Image -->
                                    </div>
                                @endif
                            @endforeach
                        <!-- End Single Default Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Catagory Section  ::::::  -->

    <!-- ::::::  Start banner Section  ::::::  -->
        <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                <img src="assets/img/banner/size-extra-large-wide/banner-home-1-img-1-extra-large-wide.jpg" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                                <h6 class="banner__title  font--medium m-b-10">GIẢM GIÁ ĐẶC BIỆT</h6>
                                <h1 class="banner__title banner__title--large font--regular text-capitalize">Cho tất cả
                                    Sản phẩm <br>tạp hóa</h1>
                                <h6 class="banner__title font--medium m-b-40">Giảm ngay 20% cho tất cả cửa hàng tạp hóa
                                    sản phẩm.</h6>
                                <a href="/product/category-single-tab-left"
                                   class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Hiển
                                    Thị</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        @foreach($featured_categories as $category)
            <div class="product m-t-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Start Section Title -->
                            <div class="section-content section-content--border m-b-35">
                                <h5 class="section-content__title">{{ $category->name}}</h5>
                                <a href="{{ route('listProduct', ['category_id' => $category->id]) }}"
                                   class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                    Sản Phẩm Khác<i class="fal fa-angle-right"></i></a>
                            </div>  <!-- End Section Title -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="default-slider default-slider--hover-bg-red product-default-slider">
                                <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                                    @foreach($category->products as $product)
                                        <x-product :product="$product"></x-product>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->
        @endforeach
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection
