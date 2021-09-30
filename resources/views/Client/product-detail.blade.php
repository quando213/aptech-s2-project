@extends('Client.layout.index')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav"><a
                                href="{{ route('listProduct', ['category_id' => $product->category_id]) }}">{{ $product->category->name }}</a>
                        </li>
                        <li class="page-breadcrumb__nav active">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">

        <!-- Start Product Details Gallery -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="product-gallery-box product-gallery-box--default m-b-60">
                            <div class="product-image--large product-image--large-horizontal">
                                <img class="img-fluid" id="img-zoom" src="{{$product->thumbnail}}"
                                     data-zoom-image="{{$product->thumbnail}}" alt="">
                            </div>
                            {{--                            <div id="gallery-zoom" class="product-image--thumb product-image--thumb-horizontal pos-relative">--}}
                            {{--                                <a class="zoom-active" data-image="/assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" data-zoom-image="/assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg">--}}
                            {{--                                    <img class="img-fluid" src="/assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">--}}
                            {{--                                </a>--}}
                            {{--                                <a data-image="/assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg" data-zoom-image="/assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg">--}}
                            {{--                                    <img class="img-fluid" src="/assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg" alt="">--}}
                            {{--                                </a>--}}
                            {{--                                <a data-image="/assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg" data-zoom-image="/assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg">--}}
                            {{--                                    <img class="img-fluid" src="/assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg" alt="">--}}
                            {{--                                </a>--}}
                            {{--                                <a data-image="/assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg" data-zoom-image="/assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg">--}}
                            {{--                                    <img class="img-fluid" src="/assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg" alt="">--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-details-box m-b-60">
                            <h4 class="font--regular m-b-20">{{$product->name}}</h4>
                            <div class="product__price m-t-5">
                                <span
                                    class="product__price product__price--large">{{number_format($product->price)}} ₫</span>
                                {{--                                <span class="product__tag m-l-15 btn--tiny btn--green">-34%</span><del>$29.00</del> --}}
                            </div>

                            <div class="product__desc m-t-25 m-b-30">
                                <p>{{$product->description}}</p>
                            </div>

                            <div class="product-var p-tb-30">
                                <div class="product__stock m-b-20">
                                    <span class="product__stock--in">
                                        @if($product->stock)
                                            Còn hàng <i class="fas fa-check-circle"></i>
                                        @else
                                            Hết hàng
                                        @endif
                                    </span>
                                </div>
                                <div class="product__stock m-b-20">
                                    <span
                                        class="product__stock--in">Đơn vị tính: {{$product->quantity ." ".\App\Enums\ProductUnit::getDescription($product->unit)}}</span>
                                </div>
                                @if($product->stock)
                                    <div class="product-quantity product-var__item d-flex align-items-center">
                                        <span class="product-var__text">Số lượng: </span>
                                        <form class="quantity-scale m-l-20">
                                            <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                            <input type="number" min="1" max="{{$product->stock}}" id="number"
                                                   value="1"/>
                                            <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                                        </form>
                                    </div>
                                    <div class="product-var__item">
                                        <a href="#modalAddCart" data-toggle="modal"
                                           data-dismiss="modal" id="btn-add-to-cart"
                                           class="btn {{$product->stock > 0 ? "" :"d-none"}} btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Thêm
                                            vào giỏ</a>
                                    </div>
                                @endif
                                {{--                                <div class="product-var__item d-flex align-items-center">--}}
                                {{--                                    <span class="product-var__text">Chia Sẻ: </span>--}}
                                {{--                                    <ul class="product-social m-l-20">--}}
                                {{--                                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>--}}
                                {{--                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                {{--                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Product Details Gallery -->

        <!-- Start Product Details Tab -->
        <div class="product-details-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-details-content">
                            <ul class="tablist tablist--style-black tablist--style-title tablist--style-gap-30 nav">
                                <li><a class="nav-link active" data-toggle="tab" href="#product-dis">Chi tiết sản
                                        phẩm</a></li>
                            </ul>
                            <div class="product-details-tab-box">
                                <div class="tab-content">
                                    <!-- Start Tab - Product Details -->
                                    <div class="tab-pane show active" id="product-dis">
                                        <div class="product-dis__content">
                                            <div class="para__content mb-4">
                                                <p class="para__text">{{ $product->description }}</p>
                                            </div>
                                            <div class="table-responsive-md">
                                                <table class="product-dis__list table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td class="product-dis__title">Đơn vị tính</td>
                                                        <td class="product-dis__text">{{$product->quantity . " " .\App\Enums\ProductUnit::getDescription($product->unit)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Thương hiệu</td>
                                                        <td class="product-dis__text">{{ $product->brand }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Xuất xứ</td>
                                                        <td class="product-dis__text">{{ $product->origin }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>  <!-- End Tab - Product Details -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- End Product Details Tab -->

        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Section Title -->
                        <div class="section-content section-content--border m-b-35">
                            <h5 class="section-content__title">Sản phẩm liên quan
                            </h5>
                            <a href="{{ route('listProduct') }}"
                               class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">Các
                                sản phẩm khác <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">
                                @foreach($related_products as $related_product)
                                    <x-product :product="$related_product"></x-product>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->
    </main>  <!-- :::::: End MainContainer Wrapper :::::: -->
@endsection

@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            $('#btn-add-to-cart').click(function () {
                addToCart({{ $product->id }}, $('#number').val());
            });
        });
    </script>
@endsection
