@extends('Client.layout.index')
@section('content')
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
                                    <h6 class="title__hero title__hero--tiny text-uppercase">Tuân thủ quy định phòng chống dịch</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Đặt hàng ngay</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Và nhận hàng từ lực lượng quân đội</h4>
                                    <a href="{{ route('listProduct') }}"
                                       class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Xem các sản phẩm</a>
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
                                    <h6 class="title__hero title__hero--tiny text-uppercase">Tuân thủ quy định phòng chống dịch</h6>
                                    <h1 class="title__hero title__hero--xlarge font--regular text-uppercase">Đặt hàng ngay</h1>
                                    <h4 class="title__hero title__hero--small font--regular">Và nhận hàng từ lực lượng quân đội</h4>
                                    <a href="{{ route('listProduct') }}"
                                       class="btn btn--large btn--radius btn--black btn--black-hover-green font--bold text-uppercase">Xem các sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Single Hero Slide -->
        </div> <!-- ::::::  End Hero Section  ::::::  -->

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
