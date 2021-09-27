@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Sản phẩm</li>
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

                           @foreach($categories as $category)
                                 <ul class="sidebar__menu">
                                    <li class="mega-menu__list">
                                        <a href="{{ route('category',$category->id) }}"
                                           class="mega-menu__link">{{ $category->name }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>  <!-- End SSingle Sidebar Widget - Filter [Catagory] -->

                        <!-- Start Single Sidebar Widget - Filter [Price] -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Lọc Theo Giá ($)</h5>
                            </div>
                            <div class="sidebar__price-filter ">
                                <div id="slider-range" class="price-filter-range"></div>
                                <div class="slider__price-filter-input d-flex justify-content-between">
                                    <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');"
                                           id="min_price" class="price-range-field"/>
                                    <input type="number" min=0 max="10000" oninput="validity.valid||(value='1000');"
                                           id="max_price" class="price-range-field"/>
                                </div>
                            </div>
                        </div>  <!-- Start Single Sidebar Widget - Filter [Price] -->

                        <!-- ::::::  Start Sidebar Widget - Top Product   ::::::  -->

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
                                    <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i
                                                class="fas fa-th"></i> </a></li>
                                    <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i
                                                class="fas fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- Start Sort Left Side -->

                        <div class="sort-box-item d-flex align-items-center flex-warp">
                            <span>Sắp xếp theo:</span>
                            <div class="sort-box__option">
                                <label class="select-sort__arrow">
                                    <select id="select-sort" class="select-sort">
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
                                    @foreach($list as $product)
                                        <div class="col-md-4 col-12">
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__default--single text-center">
                                                <!-- Start Product Image -->
                                                <div class="product__img-box  pos-relative">
                                                    <a href="{{route('detailProduct',$product->id)}}" class="product__img--link">
                                                        <img class="product__img img-fluid" src="{{$product -> thumbnail}}" alt="">
                                                    </a>
                                                    <ul class="product__action--link pos-absolute">
                                                        <li><a href="#modalAddCart" data-toggle="modal"><i class="icon-shopping-cart"></i></a></li>
                                                        <li><a href="#modalQuickView" data-toggle="modal"><i class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product__content m-t-20">
                                                    <a href="{{route('detailProduct',$product->id)}} class="product__link">{{$product -> name}}</a>
                                                    <div class="product__price m-t-5">
                                                        <span class="product__price">{{number_format($product -> price)}} ₫</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link" href="#">Quay Lại</a>
                            <li class="page-pagination__item"><a class="page-pagination__link active" href="#">1</a>
                            </li>
                            <li class="page-pagination__item"><a class="page-pagination__link" href="#">2</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link" href="#">Tiếp Theo</a>
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
                                            <img class="img-fluid"
                                                 src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Thêm Vào Giỏ Hàng Thành Công!
                                        </div>
                                        <div class="modal__product-cart-buttons m-tb-15">
                                            <a href="/cart"
                                               class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">Xem Giỏ Hàng</a>
                                            <a href="/checkout"
                                               class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Thanh Toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal__border">
                                <ul class="modal__product-shipping-info">
                                    <li class="link--icon-left"><i class="icon-shopping-cart"></i> Bạn Có 5 Sản Phẩm Trong Giỏ Hàng.
                                    </li>
                                    <li>TOTAL PRICE: <span>$187.00</span></li>
                                    <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">Tiếp Tục Mua Sắm</a></li>
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
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who
                                            are so beguiled and demoralized by the charms of pleasure of the moment, so
                                            blinded by desire, that they cannot foresee the pain and trouble that are
                                            bound to ensue; and equal blame belongs to those who fail in their duty
                                            through weakness of will</p>
                                    </div>

                                    <div class="product-var p-t-30">
                                        <div
                                            class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                            <span class="product-var__text">Quantity: </span>
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
    </div>
    <div hidden>
        <form method="get" id="form">
            @csrf
            <input id="sort" name="sort" type="text">
        </form>
    </div>
@endsection
@section('script')
    <script>
        let sort =  $('#select-sort')
        let formOption =  $('#form')
        sort.change(function (){

       })

    </script>
@endsection


