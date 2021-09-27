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
                                    <a href="{{route('category',2)}}"
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
                                    <a href="{{route('category',2)}}"
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
                                <a href="/product-single-tab-left" class="banner__link">
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
                                        <a href="{{route('category',2)}}"
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
                                <a href="/product-single-tab-left" class="banner__link">
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
                                        <a href="/product-single-tab-left"
                                           class="btn btn--medium btn--radius btn--transparent btn--border-black btn--border-black-hover-green font--light text-uppercase">
                                            Mua Ngay</a>
                                    </div>
                                </div>
                            </div> <!-- End Single Banner Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Các Loại Sản Phẩm</h5>
                            <a href="{{route('product')}}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                Sản Phẩm Khác <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product__catagory">
                            <!-- Start Single catagory Product -->
                            @foreach($categories as $category)
                                <a href="{{route('category',$category->id)}}">
                                    <div class="product__catagory--single">
                                        <!-- Start Product Content -->
                                        <div class="product__content product__content--catagory">
                                            <a href="{{route('category',$category->id)}}" class="product__link">{{$category->name}}</a>
                                            <span class="product__items--text">{{$category->sort_number}} Sản Phẩm</span>
                                        </div> <!-- End Product Content -->
                                        <!-- Start Product Image -->
                                        <div class="product__img-box product__img-box--catagory">
                                            <a href="{{route('category',$category->id)}}" class="product__img--link">
                                                <img class="product__img img-fluid"
                                                     src="{{$category->thumbnail}}" alt="" width="50%"  height="50%">
                                            </a>
                                        </div> <!-- End Product Image -->

                                    </div> <!-- End Single Default Product -->
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner m-t-100 pos-relative">
            <div class="banner__bg">
                <img src="assets/img/banner/size-extra-large-wide/banner-home-1-img-1-extra-large-wide.jpg" alt="">
            </div>
            <div class="banner__box banner__box--single-text-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content--center pos-absolute">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->

        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Thịt-cá-Trứng</h5>
                            <a href="{{route('product')}}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                Sản Phẩm Khác<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                                @foreach($products1 as $product1)
                                    <div class="product__box product__default--single text-center">
                                        <div class="product__img-box  pos-relative">
                                            <a href="{{route('detailProduct',$product1->id)}}"
                                               class="product__img--link">
                                                <img class="product__img img-fluid" src="{{$product1->thumbnail}}" alt="">
                                            </a>
                                            <ul class="product__action--link pos-absolute">
                                                <li><a href="#modalAddCart" data-toggle="modal"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                                <li><a href="{{route('detailProduct',$product1->id)}}"
                                                       data-toggle="modal"><i class="icon-eye"></i></a></li>
                                            </ul> <!-- End Product Action Link -->
                                        </div> <!-- End Product Image -->
                                        <!-- Start Product Content -->
                                        <div class="product__content m-t-20">
                                            <a href="{{route('detailProduct',$product1->id)}}"
                                               class="product__link">{{$product1->name}}</a>
                                            <div class="product__price m-t-5"><span class="product__price">{{number_format($product1->price)}} ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Rau-Củ-Quả</h5>

                            <a href="{{route('product')}}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                Sản Phẩm Khác<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                                @foreach($products2 as $product2)
                                    <div class="product__box product__default--single text-center">
                                        <div class="product__img-box  pos-relative">
                                            <a href="{{route('detailProduct',$product2->id)}}"
                                               class="product__img--link">
                                                <img class="product__img img-fluid" src="{{$product2->thumbnail}}"
                                                     alt="">
                                            </a>
                                            <ul class="product__action--link pos-absolute">
                                                <li><a href="#modalAddCart" data-toggle="modal"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                                <li><a href="{{route('detailProduct',$product2->id)}}"
                                                       data-toggle="modal"><i class="icon-eye"></i></a></li>
                                            </ul> <!-- End Product Action Link -->
                                        </div> <!-- End Product Image -->
                                        <!-- Start Product Content -->
                                        <div class="product__content m-t-20">
                                            <a href="{{route('detailProduct',$product2->id)}}"
                                               class="product__link">{{$product2->name}}</a>
                                            <div class="product__price m-t-5">
                                                    <span
                                                        class="product__price">{{number_format($product2->price)}} ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Trái Cây</h5>

                            <a href="{{route('product')}}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                Sản Phẩm Khác<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                                @foreach($products3 as $product3)
                                    <div class="product__box product__default--single text-center">
                                        <div class="product__img-box  pos-relative">
                                            <a href="{{route('detailProduct',$product3->id)}}"
                                               class="product__img--link">
                                                <img class="product__img img-fluid" src="{{$product3->thumbnail}}"
                                                     alt="">
                                            </a>
                                            <ul class="product__action--link pos-absolute">
                                                <li><a href="#modalAddCart" data-toggle="modal"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                                <li><a href="{{route('detailProduct',$product3->id)}}"
                                                       data-toggle="modal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__content m-t-20">
                                            <a href="{{route('detailProduct',$product3->id)}}"
                                               class="product__link">{{$product3->name}}</a>
                                            <div class="product__price m-t-5">
                                                    <span
                                                        class="product__price">{{number_format($product3->price)}} ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Sản Phẩm Từ Sữa</h5>
                            <a href="{{route('product')}}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                Sản Phẩm Khác<i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                                @foreach($products4 as $product4)
                                    <div class="product__box product__default--single text-center">
                                        <div class="product__img-box  pos-relative">
                                            <a href="{{route('detailProduct',$product4->id)}}"
                                               class="product__img--link">
                                                <img class="product__img img-fluid" src="{{$product4->thumbnail}}"
                                                     alt="">
                                            </a>
                                            <ul class="product__action--link pos-absolute">
                                                <li><a href="#modalAddCart" data-toggle="modal"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                                <li><a href="{{route('detailProduct',$product4->id)}}"
                                                       data-toggle="modal"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__content m-t-20">
                                            <a href="{{route('detailProduct',$product4->id)}}"
                                               class="product__link">{{$product4->name}}</a>
                                            <div class="product__price m-t-5">
                                                    <span
                                                        class="product__price">{{number_format($product4->price)}} ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ::::::  Start Testimonial Section  ::::::  -->
        <div class="testimonial m-t-100 pos-relative">
            <div class="testimonial__bg">
                <img src="assets/img/testimonial/testimonials-bg.jpg" alt="">
            </div>
            <div class="testimonial__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Khách Hàng Của Chúng Tôi!</h2>
                            </div>
                            <div class="testimonial__slider default-slider">
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Chất luọng các sản phẩm đảm bảo độ tươi ngon và an toàn, thực đơn đầy đủ
                                                chất ding dưỡng.
                                            </p>
                                            <p class="para__text">
                                                Đảm bảo mua chính xác thực đơn mà chúng tôi chọn.
                                            </p>
                                            <p class="para__text">
                                                Được lực luọng quân đội giao hàng nên chúng tôi an tâm về việc thực hiện
                                                chỉ thị của thành phố.
                                            </p>
                                            <p class="para__text">
                                                Giao hàng nhanh và tiết kiệm, cac sản phẩm được giao tới nơi đảm bảo
                                                không bị dập nát.
                                            </p>
                                        </div>
                                        .</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user"
                                                 src="assets/img/testimonial/testimonial-home-1-img-1.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Nirob Khan / <span>CEO</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial__content--slider ">
                                    <div class="testimonial__single">
                                        <p class="testimonial__desc">
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Chất luọng các sản phẩm đảm bảo độ tươi ngon và an toàn, thực đơn đầy đủ
                                                chất ding dưỡng.
                                            </p>
                                            <p class="para__text">
                                                Đảm bảo mua chính xác thực đơn mà chúng tôi chọn.
                                            </p>
                                            <p class="para__text">
                                                Được lực luọng quân đội giao hàng nên chúng tôi an tâm về việc thực hiện
                                                chỉ thị của thành phố.
                                            </p>
                                            <p class="para__text">
                                                Giao hàng nhanh và tiết kiệm, cac sản phẩm được giao tới nơi đảm bảo
                                                không bị dập nát.
                                            </p>
                                        </div>
                                        .</p>
                                        <div class="testimonial__info">
                                            <img class="testimonial__info--user"
                                                 src="assets/img/testimonial/testimonial-home-1-img-2.png" alt="">
                                            <h5 class="testimonial__info--desig m-t-20">Torvi / <span>C0O</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End Testimonial Section  ::::::  -->

        <!-- ::::::  Start  Blog News  ::::::  -->
        <div class="blog m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Tin Tức Mới Nhất</h5>
                            <a href="/blog-list-sidebar-left"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More
                                blogs <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red">
                            <div class="blog-feed-slider-3grid default-slider gap__col--30 ">
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg"
                                                 alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__link">Chất Lượng Sản
                                            Phẩm</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Chất lượng sản phẩm đảm bảo.....</p>
                                        <a href="/blog-simple-sidebar-left"
                                           class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Xem
                                            Thêm</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-2.jpg"
                                                 alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__link">Thái Độ Phục </a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Sự nhiệt tình tư vấn thực đơn cùa...</p>
                                        <a href="/blog-simple-sidebar-left"
                                           class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Xem
                                            Thêm </a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-3.jpg"
                                                 alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__link">Chất Lượng Dinh
                                            Dưỡng Trong Sản Phẩm</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Chất luọng các sản phẩm đảm bảo độ tươi ngon và an
                                            toàn, thực đơn đầy đủ chất ding dưỡng....</p>
                                        <a href="/blog-simple-sidebar-left"
                                           class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">xem
                                            Thêm</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                                <!-- Start Single Blog Feed -->
                                <div class="blog-feed">
                                    <!-- Start Blog Feed Image -->
                                    <div class="blog-feed__img-box">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__img--link">
                                            <img class="img-fluid" src="assets/img/blog/feed/blog-feed-home-1-img-4.jpg"
                                                 alt="">
                                        </a>
                                    </div> <!-- End  Blog Feed Image -->
                                    <!-- Start  Blog Feed Content -->
                                    <div class="blog-feed__content ">
                                        <a href="/blog-simple-sidebar-left" class="blog-feed__link">Vấn Đề Phát Sinh</a>

                                        <div class="blog-feed__post-meta">
                                            By
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--author">Partner 2020 /</span></a>
                                            <a class="blog-feed__post-meta--link"
                                               href="blog-grid-sidebar-left.html"><span
                                                    class="blog-feed__post-meta--date">July 23, 2020</span></a>

                                        </div>
                                        <p class="blog-feed__excerpt">Chất luọng các sản phẩm đảm bảo độ tươi ngon và an
                                            toàn, thực đơn đầy đủ chất ding dưỡng....</p>
                                        <a href="/blog-simple-sidebar-left"
                                           class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize">Continue
                                            Reading</a>
                                    </div> <!-- End  Blog Feed Content -->
                                </div> <!-- End Single Blog Feed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Blog News   ::::::  -->

        <!-- ::::::  Start Newsletter Section  ::::::  -->
        <div class="newsletter m-t-100 pos-relative">
            <div class="newsletter__bg">
                <img src="assets/img/newsletter/newsletter-bg.jpg" alt="">
            </div>
            <div class="newsletter__content pos-absolute absolute-center text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content__inner">
                                <h2>Theo Dõi Bản Tin Của Chúng Tôi</h2>
                            </div>
                        </div>
                        <div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <form class="newsletter__form" action="#" method="post">
                                <div class="newsletter__form-content pos-relative">
                                    <label class="pos-absolute" for="newsletter-mail"><i class="icon-mail"></i></label>
                                    <input type="email" name="newsletter-mail" id="newsletter-mail"
                                           placeholder="Địa CHỉ Email">
                                    <button class="text-uppercase pos-absolute" type="submit">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End newsletter Section  ::::::  -->

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area default-slider">
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-1.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-2.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-3.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-4.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-5.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-6.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-7.png" alt=""
                                         class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Company Logo Section  ::::::  -->

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
                                            <img class="img-fluid"
                                                 src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Thêm
                                            Vào Giỏ hàng Thành Công!
                                        </div>
                                        <div class="modal__product-cart-buttons m-tb-15">
                                            <a href="/cart"
                                               class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">Xem
                                                Giỏ Hàng</a>
                                            <a href="/checkout"
                                               class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Tiến
                                                Hành Thanh Toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal__border">
                                <ul class="modal__product-shipping-info">
                                    <li class="link--icon-left"><i class="icon-shopping-cart"></i> Cáo 5 Sản Phẩm Trong
                                        Giỏ Hàng.
                                    </li>
                                    <li>Tổng Giá: <span>$187.00</span></li>
                                    <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">Tiếp Tục
                                            Mua Sắm</a></li>
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
                                        <img class="img-fluid"
                                             src="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-box">
                                    <h5 class="title title--normal m-b-20">Táo xanh</h5>
                                    <div class="product__price">
                                        <span class="product__price-del">$35.90</span>
                                        <span class="product__price-reg">$31.69</span>
                                    </div>
                                    <ul class="product__review m-t-15">
                                        <li class="product__review--fill"></li>
                                        <li class="product__review--fill"></li>
                                        <li class="product__review--fill"></li>
                                        <li class="product__review--fill"></li>
                                        <li class="product__review--blank"></li>
                                    </ul>
                                    <div class="product__desc m-t-25 m-b-30">
                                        <p>Táo xanh có hàm lượng chất xơ cao giúp tăng cường quá trình
                                            trao đổi chất của cơ thể. Bên cạnh đó, hàm lượng chất xơ này
                                            còn giúp hỗ trợ quá trình giải độc, giúp gan và hệ tiêu hóa
                                            tránh xa các chất độc hại.
                                            <br>
                                            Khi ăn táo xanh, nên để nguyên vỏ để có thể nạp vào cơ thể
                                            lượng chất xơ cao hơn. Ngoài ra, có thể chế biến táo xanh
                                            thành nước ép để dễ tiêu hóa.</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div
                                            class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Số Lượng: </span>
                                            <form class="modal-quantity-scale m-l-20">
                                                <div class="value-button" id="modal-decrease"
                                                     onclick="decreaseValueModal()">-
                                                </div>
                                                <input type="number" id="modal-number" value="1"/>
                                                <div class="value-button" id="modal-increase"
                                                     onclick="increaseValueModal()">+
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="product-links">
                                        <div class="product-social m-tb-30">
                                            <span>Chia Sẻ Sản Phẩm</span>
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
