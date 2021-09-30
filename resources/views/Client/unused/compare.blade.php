@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Đối Chiếu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="compare-area mtb-50px">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Compare Table -->
                                    <div class="compare-table table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="first-column">Sản Phẩn</td>
{{--                                                <td class="product-image-title">--}}
{{--                                                    <a href="#" class="img-responsive m-b-15"><img  src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="Compare Product"></a>--}}
{{--                                                    <a href="#" class="category">Vagitables</a>--}}
{{--                                                    <a href="#" class="title">Green Pee</a>--}}
{{--                                                </td>--}}
{{--                                                <td class="product-image-title">--}}
{{--                                                    <a href="#" class="img-responsive m-b-15"><img src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="Compare Product"></a>--}}
{{--                                                    <a href="#" class="category">Fishes</a>--}}
{{--                                                    <a href="#" class="title">Red Curp</a>--}}
{{--                                                </td>--}}
{{--                                                <td class="product-image-title">--}}
{{--                                                    <a href="#" class="img-responsive m-b-15"><img  src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="Compare Product"></a>--}}
{{--                                                    <a href="#" class="category">Fruits</a>--}}
{{--                                                    <a href="#" class="title">Red Pomegranate</a>--}}
{{--                                                </td>--}}
                                            </tr>
                                            <tr>
                                                <td class="first-column">Miêu Tả</td>
{{--                                                <td class="pro-desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel a qui repellendus reiciendis! Laudantium, veritatis sunt! Provident dolorem</p>--}}
{{--                                                </td>--}}
{{--                                                <td class="pro-desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel a qui repellendus reiciendis! Laudantium, veritatis sunt! Provident dolorem</p>--}}
{{--                                                </td>--}}
{{--                                                <td class="pro-desc">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas vel a qui repellendus reiciendis! Laudantium, veritatis sunt! Provident dolorem</p>--}}
{{--                                                </td>--}}
                                            </tr>
                                            <tr>
                                                <td class="first-column">Giá</td>
                                                <td class="pro-price">$29</td>
                                                <td class="pro-price">$27</td>
                                                <td class="pro-price">$39</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Số Hàng Trong Kho</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Thêm Vào Giỏ Hàng</td>
                                                <td class="pro-addtocart">
                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">Thêm Vào Giỏ Hàng</a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">Thêm Vào Giỏ Hàng</a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold">Thêm Vào Giỏ Hàng</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Xóa</td>
                                                <td class="pro-remove">
                                                    <button><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
{{--                                            <tr>--}}
{{--                                                <td class="first-column">Rating</td>--}}
{{--                                                <td class="pro-ratting">--}}
{{--                                                    <ul class="product__review justify-content-center">--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                </td>--}}
{{--                                                <td class="pro-ratting">--}}
{{--                                                    <ul class="product__review justify-content-center">--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                </td>--}}
{{--                                                <td class="pro-ratting">--}}
{{--                                                    <ul class="product__review justify-content-center">--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--fill"><i class="icon-star"></i></li>--}}
{{--                                                        <li class="product__review--blank"><i class="icon-star"></i></li>--}}
{{--                                                    </ul>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

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
                                        <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Thêm Vào Giỏ Hàng Thành Công!</div>
                                        <div class="modal__product-cart-buttons m-tb-15">
                                            <a href="/cart" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">Xem Giỏ Hàng</a>
                                            <a href="/checkout" class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Thanh Toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal__border">
                                <ul class="modal__product-shipping-info">
                                    <li class="link--icon-left"><i class="icon-shopping-cart"></i> Bạn Có 5 Sản Phẩm Trong Giỏ Hàng.</li>
                                    <li>Tổng Giá: <span>$187.00</span></li>
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
                                    <h5 class="title title--normal m-b-20">Táo Xanh</h5>
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
                                        <p>Táo xanh có hàm lượng chất xơ cao giúp tăng cường quá trình trao đổi chất
                                            của cơ thể. Bên cạnh đó, hàm lượng chất xơ này còn giúp hỗ trợ quá trình
                                            giải độc, giúp gan và hệ tiêu hóa tránh xa các chất độc hại.
                                            <br>
                                            Khi ăn táo xanh, nên để nguyên vỏ để có thể nạp vào cơ thể lượng chất
                                            xơ cao hơn. Ngoài ra, có thể chế biến táo xanh thành nước ép để dễ tiêu hóa.</p>
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
    </div> <!-- End Modal Add cart -->

@endsection


