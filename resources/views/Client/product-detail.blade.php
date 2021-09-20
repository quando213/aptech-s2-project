@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Chi Tiết Sản Phẩm</li>
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
                                <img class="img-fluid" id="img-zoom" src="{{$product->thumbnail}}" data-zoom-image="{{$product->thumbnail}}" alt="">
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
                            <ul class="product__review">
                                <li class="product__review--fill"></li>
                                <li class="product__review--fill"></li>
                                <li class="product__review--fill"></li>
                                <li class="product__review--fill"></li>
                                <li class="product__review--blank"></li>
                            </ul>
                            <div class="product__price m-t-5">
                                <span class="product__price product__price--large">{{number_format($product->price)}} ₫</span>
{{--                                <span class="product__tag m-l-15 btn--tiny btn--green">-34%</span><del>$29.00</del> --}}
                            </div>

                            <div class="product__desc m-t-25 m-b-30">
                                <p>{{$product->description}}</p>
                            </div>


                            <div class="product-var p-tb-30">
                                <div class="product__stock m-b-20">
                                    <span class="product__stock--in"><i class="fas fa-check-circle"></i> {{$product->stock}} {{$product->stock > 0 ?"Còn hàng":"Hết Hàng"}}</span>
                                </div>
                                <div class="product__stock m-b-20">
                                    <span class="product__stock--in">Khối lượng: {{$product->quantity ."  ".\App\Enums\ProductUnit::getDescription($product->unit)}} </span>
                                </div>
                                <div class="product-quantity product-var__item">
                                    <ul class="product-modal-group">
                                        <li><a href="#modalShippinginfo" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Vận Chuyển</a></li>
                                        <li><a href="#modalProductAsk" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Hỏi Đáp về Sanr Phẩm</a></li>
                                    </ul>
                                </div>
                                <div class="product-quantity product-var__item d-flex align-items-center">
                                    <span class="product-var__text">Số Lượng: </span>
                                    <form class="quantity-scale m-l-20">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                        <input type="number" min="1" max="{{$product->stock}}" id="number" value="1"/>
                                        <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                                    </form>
                                </div>
                                <div class="product-var__item">
                                    <a href="#modalAddCart" id="btnaddtocar" data-toggle="modal" data-dismiss="modal" class="btn {{$product->stock > 0 ?"":"disabled"}} btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Thêm Vào Giỏ Hàng</a>
                                </div>
                                <div class="product-var__item">
                                    <div class="dynmiac_checkout--button">
{{--                                        <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">--}}
{{--                                   <label for="buy-now-check" class="m-b-20">I agree with the terms and condition</label>--}}
                                        <a href="/cart"  class="btn {{$product->stock > 0 ?"":"disabled"}} btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Mua Ngay</a>
                                    </div>
                                </div>

                                <div class="product-var__item">
                                    <span class="product-var__text">Bảo Đảm Thanh Toán An Toàn </span>
                                    <ul class="payment-icon m-t-5">
                                        <li><img src="//assets/img/icon/payment/paypal.svg" alt=""></li>
                                        <li><img src="//assets/img/icon/payment/amex.svg" alt=""></li>
                                        <li><img src="//assets/img/icon/payment/ipay.svg" alt=""></li>
                                        <li><img src="//assets/img/icon/payment/visa.svg" alt=""></li>
                                        <li><img src="//assets/img/icon/payment/shoify.svg" alt=""></li>
                                        <li><img src="//assets/img/icon/payment/mastercard.svg" alt=""></li>
                                        <li><img src="//assets/img/icon/payment/gpay.svg" alt=""></li>
                                    </ul>
                                </div>
                                <div class="product-var__item d-flex align-items-center">
                                    <span class="product-var__text">Chia Sẻ: </span>
                                    <ul class="product-social m-l-20">
                                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
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
{{--                                <li><a class="nav-link active" data-toggle="tab" href="#product-desc">Description</a></li>--}}
{{--                                <li><a class="nav-link" data-toggle="tab" href="#product-dis">Product Details</a></li>--}}
{{--                                <li><a class="nav-link" data-toggle="tab" href="#product-review">Đánh Giá</a></li>--}}
{{--                                <li><a class="nav-link active" data-toggle="tab" href="#product-desc">Miêu Tả</a></li>--}}
                                <li><a class="nav-link" data-toggle="tab" href="#product-dis">Chi Tiết Sản Phẩm</a></li>
{{--                                <li><a class="nav-link" data-toggle="tab" href="#product-review">Nhận Xét</a></li>--}}
                            </ul>
                            <div class="product-details-tab-box">
                                <div class="tab-content">
                                    <!-- Start Tab - Product Description -->
                                    <div class="tab-pane show active" id="product-desc">
                                        <div class="para__content">
                                            <p class="para__text">Táo Xanh Nhập Khẩu</p>
                                            <p class="para__text">quốc Gia:USA</p>
                                            <h6 class="para__title">Tác Dụng Của Sản Phẩm:</h6>
                                            <ul class="para__list">
                                                <li>Giúp Giảm Cân </li>
                                                <li>Bảo Vệ Da</li>
                                                <li>Giàu Chất Oxi Hóa</li>
                                                <li>Là Chất Khử Độc Tự Nhiên</li>
                                                <li>Tốt Cho Phổi </li>
                                                <li>Tốt Cho Mắt</li>
                                                <li>Ngăn Ngừa Hen Xuyễn </li>
                                                <li>Ngăn Ngừa Tiểu Đường</li>
                                            </ul>
                                        </div>
                                    </div>  <!-- End Tab - Product Description -->

                                    <!-- Start Tab - Product Details -->
{{--                                    <div class="tab-pane" id="product-dis">--}}
{{--                                        <div class="product-dis__content">--}}
{{--                                            <a href="#" class="product-dis__img m-b-30"><img src="/assets/img/logo/another-logo.jpg" alt=""></a>--}}
{{--                                            <div class="table-responsive-md">--}}
{{--                                                <table class="product-dis__list table table-bordered">--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr>--}}
{{--                                                        <td class="product-dis__title">Weight</td>--}}
{{--                                                        <td class="product-dis__text">400 g</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td class="product-dis__title">Materials</td>--}}
{{--                                                        <td class="product-dis__text">60% cotton, 40% polyester</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td class="product-dis__title">Dimensions</td>--}}
{{--                                                        <td class="product-dis__text">10 x 10 x 15 cm</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td class="product-dis__title">Other Info</td>--}}
{{--                                                        <td class="product-dis__text">American heirloom jean shorts pug seitan letterpress</td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>  <!-- End Tab - Product Details -->--}}

                                    <!-- Start Tab - Product Review -->
{{--                                    <div class="tab-pane " id="product-review">--}}
{{--                                        <!-- Start - Review Comment -->--}}
{{--                                        <ul class="comment">--}}
{{--                                            <!-- Start - Review Comment list-->--}}
{{--                                    <li class="comment__list">--}}
{{--                                                <div class="comment__wrapper">--}}
{{--                                                    <div class="comment__img">--}}
{{--                                                        <img src="/assets/img/user/quynhaka.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment__content">--}}
{{--                                                        <div class="comment__content-top">--}}
{{--                                                            <div class="comment__content-left">--}}
{{--                                                                <h6 class="comment__name">Kaedyn Fraser</h6>--}}
{{--                                                                <ul class="product__review">--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--blank"></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment__content-right">--}}
{{--                                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="para__content">--}}
{{--                                                            <p class="para__text">Sản phẩm okie, giao hàng nhanh dù trong mùa dịch, gói hàng kĩ,  táo nhìn ngon, ko bị dập…</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                                <!-- Start - Review Comment Reply-->
{{--                                                <ul class="comment__reply">--}}
{{--                                                    <li class="comment__reply-list">--}}
{{--                                                        <div class="comment__wrapper">--}}
{{--                                                            <div class="comment__img">--}}
{{--                                                                <img src="/assets/img/user/image-2.png" alt="">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment__content">--}}
{{--                                                                <div class="comment__content-top">--}}
{{--                                                                    <div class="comment__content-left">--}}
{{--                                                                        <h6 class="comment__name">Oaklee Odom</h6>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment__content-right">--}}
{{--                                                                        <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="para__content">--}}
{{--                                                                    <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul> <!-- End - Review Comment Reply-->--}}
{{--                                            </li> <!-- End - Review Comment list-->--}}
                                            <!-- Start - Review Comment list-->
{{--                                            <li class="comment__list">--}}
{{--                                                <div class="comment__wrapper">--}}
{{--                                                    <div class="comment__img">--}}
{{--                                                        <img src="/assets/img/user/cai.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment__content">--}}
{{--                                                        <div class="comment__content-top">--}}
{{--                                                            <div class="comment__content-left">--}}
{{--                                                                <h6 class="comment__name">Jaydin Jones</h6>--}}
{{--                                                                <ul class="product__review">--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--fill"></li>--}}
{{--                                                                    <li class="product__review--blank"></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment__content-right">--}}
{{--                                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="para__content">--}}
{{--                                                            <p class="para__text">Mua 2 lần rồi, táo tươi và giao nhanh lắm, cảm ơn shop nhiều. Shop nhiệt tình ạ</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li> <!-- End - Review Comment list-->--}}
{{--                                        </ul>  <!-- End - Review Comment -->--}}

                                        <!-- Start Add Review Form-->
                                        <div class="review-form m-t-40">
                                            <div class="section-content">
                                                <h6 class="font--bold text-uppercase">Thêm đánh giá</h6>
                                                <p class="section-content__desc">Địa chỉ email của bạn sẽ không được công bố. Các trường bắt buộc được đánh dấu *</p>
                                            </div>
                                            <form class="form-box" action="#" method="post">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-name">Xếp hạng của bạn *</label>
                                                            <ul class="product__review">
                                                                <li class="product__review--fill"></li>
                                                                <li class="product__review--fill"></li>
                                                                <li class="product__review--fill"></li>
                                                                <li class="product__review--fill"></li>
                                                                <li class="product__review--blank"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-name">Tên của bạn*</label>
                                                            <input type="text" id="form-name" placeholder="Tên">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-email">Email của bạn*</label>
                                                            <input type="email" id="form-email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-review">Đánh giá của bạn*</label>
                                                            <textarea id="form-review" rows="8" placeholder="Viết Nhận Xét"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Gửi</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- End Add Review Form- -->
                                    </div>  <!-- Start Tab - Product Review -->
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
                            <h5 class="section-content__title">Sản Phẩm Liên Quan
                            </h5>
                            <a href="/7shop-sidebar-grid-left" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">các Sản Phẩm Khác <i class="fal fa-angle-right"></i></a>
                        </div>  <!-- End Section Title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="default-slider default-slider--hover-bg-red product-default-slider">
                            <div class="product-default-slider-4grid-1rows gap__col--30 gap__row--40">

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
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
                                        <a href="/product-single-default" class="product__link">Dậu Khế</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
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
                                        <a href="/product-single-default" class="product__link">Cá</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$25.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
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
                                        <a href="/product-single-default" class="product__link">Lựu</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$21.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
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
                                        <a href="/product-single-default" class="product__link">Bắp Cải</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$50.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                        </a>
                                        <!-- Start Procuct Label -->
                                        <span class="product__label product__label--sale-dis">-31%</span>
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
                                        <a href="/product-single-default" class="product__link">Best red meat</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$55.00 <del>$80.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
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
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--blank"></li>
                                        </ul>
                                        <a href="/product-single-default" class="product__link">Fresh green apple</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
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
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--blank"></li>
                                        </ul>
                                        <a href="/product-single-default" class="product__link">Juice fresh orange</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$19.00 <del>$29.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
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
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--blank"></li>
                                        </ul>
                                        <a href="/product-single-default" class="product__link">Best ripe grapes</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$39.00 <del>$60.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
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
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--blank"></li>
                                        </ul>
                                        <a href="/product-single-default" class="product__link">Cow fresh milk</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$55.00 <del>$75.00</del></span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="/assets/img/product/size-normal/product-home-1-img-10.jpg" alt="">
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
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--fill"></li>
                                            <li class="product__review--blank"></li>
                                        </ul>
                                        <a href="/product-single-default" class="product__link">Fresh Red Tomato</a>
                                        <div class="product__price m-t-5">
                                            <span class="product__price">$10.00</span>
                                        </div>
                                    </div> <!-- End Product Content -->
                                </div> <!-- End Single Default Product -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

        <!-- ::::::  Start  Company Logo Section  ::::::  -->
        <div class="company-logo m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo__area default-slider">
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="/assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
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
                                            <img class="img-fluid" src="{{$product->thumbnail}}" alt="">
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
                                    <li class="link--icon-left" id="text"><i class="icon-shopping-cart"></i></li>
                                    <li>Tổng : <span id="TOTAL">  </span></li>
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
    </div>

    <div class="modal fade" id="modalShippinginfo" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="col-12">
                                <ul class="shipping-info-list m-tb-30">
                                    <li><strong>Vận Chuyển</strong></li>
                                    <li>Vận chuyển nhanh chóng </li>
                                    <li>Thực hiện vận chuyển ngay trong ngày</li>
                                </ul>
                                <ul class="shipping-info-list">
                                    <li><strong>Trả Hàng và Trao Đổi</strong></li>
                                    <li>Có thể kiểm tra và đổi trả ngay trong ngày</li>
                                    <li>Xem các điều kiện và quy trình trong Câu hỏi thường gặp về trả lại của chúng tôi</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Shipping Info -->
@endsection
@section('script')
    <script>
        $('#btnaddtocar').click(function (){
            $('#text').text(`There Are ${$('#number').val()} Items In Your Cart.`)
            $('#TOTAL').text(`${$('#number').val() * {{$product->price}}} ₫`)
            $.ajax({
                type: "get",
                url: "/addToCart/{{$product->id}}",
                data:{
                    quantity:$('#number').val(),
                },
                success: function (data) {
                    alert('thanh cong');
                    $('input').val('');
                },
                error: function (){
                    alert('ngu');
                }
            });
        })
    </script>
@endsection


