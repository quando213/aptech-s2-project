@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">CHi Tiết Sản Phẩm</li>
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
                                <img class="img-fluid" id="img-zoom" src="{{$product->thumbnail}}" data-zoom-image="{{$product->thumbnail}}" width="500px" >
                            </div>
                            <div id="gallery-zoom" class="product-image--thumb product-image--thumb-horizontal pos-relative">
                                <a class="zoom-active" data-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg">
                                    <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg" alt="">
                                </a>
                                <a data-image="assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg">
                                    <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-2.jpg" alt="">
                                </a>
                                <a data-image="assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg">
                                    <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-3.jpg" alt="">
                                </a>
                                <a data-image="assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg" data-zoom-image="assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg">
                                    <img class="img-fluid" src="assets/img/product/gallery/gallery-large/product-gallery-large-4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-details-box m-b-60">
                            <h4 class="font--regular m-b-20">{{$product->name}}</h4>

                            <div class="product__price m-t-5">
                                <span class="product__price product__price--large">{{number_format($product->price)}}VND</span>
                                <span class="product__tag m-l-15 btn--tiny btn--green">-34%</span>
                            </div>
                            <div class="product__desc m-t-25 m-b-30">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="product-var p-tb-30">
                                <div class="product__stock m-b-20">
                                    <span class="product__stock--in"><i class="fas fa-check-circle"></i> 199 CÓ HÀNG</span>
                                </div>
                                <div class="product-quantity product-var__item">
                                    <ul class="product-modal-group">
                                        <li><a href="#modalSizeGuide" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-money-check-edit"></i>Khối Lượng</a></li>
                                        <li><a href="#modalShippinginfo" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-truck-container"></i>Vận Chuyển</a></li>
                                        <li><a href="#modalProductAsk" data-toggle="modal"  class="link--gray link--icon-left"><i class="fal fa-envelope"></i>Hỏi Đáp về Sanr Phẩm</a></li>
                                    </ul>
                                </div>
                                <div class="product-quantity product-var__item d-flex align-items-center">
                                    <span class="product-var__text">Số Lượng: </span>
                                    <form class="quantity-scale m-l-20">
                                        <div class="value-button" id="decrease" onclick="decreaseValue()">-</div>
                                        <input type="number" id="number" value="1" />
                                        <div class="value-button" id="increase" onclick="increaseValue()">+</div>
                                    </form>
                                </div>
                                <div class="product-var__item">
                                    <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal" class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Thêm Vào Giỏ Hàng</a>
                                    <a href="/wishlist" class="btn btn--round btn--round-size-small btn--green btn--green-hover-black"><i class="fas fa-heart"></i></a>
                                </div>
                                <div class="product-var__item">
                                    <div class="dynmiac_checkout--button">
                                        <input type="checkbox" id="buy-now-check" value="1" class="p-r-30">
{{--                                   <label for="buy-now-check" class="m-b-20">I agree with the terms and condition</label>--}}
                                        <a href="/cart" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Mua Ngay</a>
                                    </div>
                                </div>
                                <div class="product-var__item">
                                    <span class="product-var__text">Bảo Đảm Thanh TOán An Toàn </span>
                                    <ul class="payment-icon m-t-5">
                                        <li><img src="assets/img/icon/payment/paypal.svg" alt=""></li>
                                        <li><img src="assets/img/icon/payment/amex.svg" alt=""></li>
                                        <li><img src="assets/img/icon/payment/ipay.svg" alt=""></li>
                                        <li><img src="assets/img/icon/payment/visa.svg" alt=""></li>
                                        <li><img src="assets/img/icon/payment/shoify.svg" alt=""></li>
                                        <li><img src="assets/img/icon/payment/mastercard.svg" alt=""></li>
                                        <li><img src="assets/img/icon/payment/gpay.svg" alt=""></li>
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
                                <li><a class="nav-link active" data-toggle="tab" href="#product-desc">Description</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#product-dis">Product Details</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#product-review">Đánh Giá</a></li>
                                <li><a class="nav-link active" data-toggle="tab" href="#product-desc">Miêu Tả</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#product-dis">Chi Tiết Sản Phẩm</a></li>
                                <li><a class="nav-link" data-toggle="tab" href="#product-review">Nhận Xét</a></li>
                            </ul>
                            <div class="product-details-tab-box">
                                <div class="tab-content">
                                    <!-- Start Tab - Product Description -->
                                    <div class="tab-pane show active" id="product-desc">
                                        <div class="para__content">
                                            <p class="para__text">{{$product->description}}</p>
                                            <p class="para__text">quốc Gia:Viet Nam</p>
                                        </div>
                                    </div>  <!-- End Tab - Product Description -->

                                    <!-- Start Tab - Product Details -->
                                    <div class="tab-pane" id="product-dis">
                                        <div class="product-dis__content">
                                            <a href="#" class="product-dis__img m-b-30"><img src="assets/img/logo/another-logo.jpg" alt=""></a>
                                            <div class="table-responsive-md">
                                                <table class="product-dis__list table table-bordered">
                                                    <tbody>
                                                    <tr>
                                                        <td class="product-dis__title">Weight</td>
                                                        <td class="product-dis__text">400 g</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Materials</td>
                                                        <td class="product-dis__text">60% cotton, 40% polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Dimensions</td>
                                                        <td class="product-dis__text">10 x 10 x 15 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-dis__title">Other Info</td>
                                                        <td class="product-dis__text">American heirloom jean shorts pug seitan letterpress</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>  <!-- End Tab - Product Details -->

                                    <!-- Start Tab - Product Review -->
                                    <div class="tab-pane " id="product-review">
                                        <!-- Start - Review Comment -->
                                        <ul class="comment">
                                            <!-- Start - Review Comment list-->
                                            <li class="comment__list">
                                                <div class="comment__wrapper">
                                                    <div class="comment__img">
                                                        <img src="assets/img/user/quynhaka.jpg" alt="">
                                                    </div>
                                                    <div class="comment__content">
                                                        <div class="comment__content-top">
                                                            <div class="comment__content-left">
                                                                <h6 class="comment__name">Kaedyn Fraser</h6>
                                                                <ul class="product__review">
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__content-right">
                                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>

                                                        <div class="para__content">
                                                            <p class="para__text">Sản phẩm okie, giao hàng nhanh dù trong mùa dịch, gói hàng kĩ,  táo nhìn ngon, ko bị dập…</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start - Review Comment Reply-->
{{--                                                <ul class="comment__reply">--}}
{{--                                                    <li class="comment__reply-list">--}}
{{--                                                        <div class="comment__wrapper">--}}
{{--                                                            <div class="comment__img">--}}
{{--                                                                <img src="assets/img/user/image-2.png" alt="">--}}
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
                                            </li> <!-- End - Review Comment list-->
                                            <!-- Start - Review Comment list-->
                                            <li class="comment__list">
                                                <div class="comment__wrapper">
                                                    <div class="comment__img">
                                                        <img src="assets/img/user/cai.jpg" alt="">
                                                    </div>
                                                    <div class="comment__content">
                                                        <div class="comment__content-top">
                                                            <div class="comment__content-left">
                                                                <h6 class="comment__name">Jaydin Jones</h6>
                                                                <ul class="product__review">
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                    <li class="product__review--blank"><i class="icon-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="comment__content-right">
                                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>

                                                        <div class="para__content">
                                                            <p class="para__text">Mua 2 lần rồi, táo tươi và giao nhanh lắm, cảm ơn shop nhiều. Shop nhiệt tình ạ</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> <!-- End - Review Comment list-->
                                        </ul>  <!-- End - Review Comment -->

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
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-name">Tên của bạn*</label>
                                                            <input type="text" id="form-name" placeholder="Enter your name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <label for="form-email">Email của bạn*</label>
                                                            <input type="email" id="form-email" placeholder="Enter your email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-box__single-group">
                                                            <label for="form-review">Đánh giá của bạn*</label>
                                                            <textarea id="form-review" rows="8" placeholder="Write a review"></textarea>
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
                            <h5 class="section-content__title">Related Product
                            </h5>
                            <a href="/7shop-sidebar-grid-left" class="btn btn--icon-left btn--small btn--radius btn--transparent btn--border-green btn--border-green-hover-green font--regular text-capitalize">More Products<i class="fal fa-angle-right"></i></a>
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

                                <!-- Start Single Default Product -->
                                <div class="product__box product__default--single text-center">
                                    <!-- Start Product Image -->
                                    <div class="product__img-box  pos-relative">
                                        <a href="/product-single-default" class="product__img--link">
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
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
                                        <a href="/product-single-default" class="product__link">Cabbage vegetables</a>
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
                                            <img class="product__img img-fluid" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
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
                                        <ul class="product__review">
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--fill"><i class="icon-star"></i></li>
                                            <li class="product__review--blank"><i class="icon-star"></i></li>
                                        </ul>
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
                                    <img src="assets/img/company-logo/company-logo-1.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-2.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-3.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-4.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-5.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-6.png" alt="" class="company-logo__img">
                                </a>
                            </div> <!-- End Single Company Logo Item -->
                            <!-- Start Single Company Logo Item -->
                            <div class="company-logo__item">
                                <a href="#" class="company-logo__link">
                                    <img src="assets/img/company-logo/company-logo-7.png" alt="" class="company-logo__img">
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

    <!-- Start Modal Size guide -->
    <div class="modal fade" id="modalSizeGuide" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <div class="table-responsive size-guide-table m-t-30">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">INTERNATIONAL</th>
                                            <th scope="col">X</th>
                                            <th scope="col">S</th>
                                            <th scope="col">M</th>
                                            <th scope="col">L</th>
                                            <th scope="col">XL</th>
                                            <th scope="col">XXL</th>
                                            <th scope="col">XXXL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">EUROPE</th>
                                            <td>32</td>
                                            <td>34</td>
                                            <td>36</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">US</th>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>6</td>
                                            <td>8</td>
                                            <td>10</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">CHEST FIT (INCHES)</th>
                                            <td>28"</td>
                                            <td>30"</td>
                                            <td>32"</td>
                                            <td>34"</td>
                                            <td>36"</td>
                                            <td>38"</td>
                                            <td>40"	</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">CHEST FIT (CM)</th>
                                            <td>716</td>
                                            <td>76</td>
                                            <td>81</td>
                                            <td>86</td>
                                            <td>91.5</td>
                                            <td>96.5</td>
                                            <td>101.1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">WAIST FIR (INCHES)</th>
                                            <td>21"</td>
                                            <td>23"</td>
                                            <td>25"</td>
                                            <td>27"</td>
                                            <td>29"</td>
                                            <td>31"</td>
                                            <td>33"</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">WAIST FIR (CM)</th>
                                            <td>53.5</td>
                                            <td>58.5</td>
                                            <td>63.5</td>
                                            <td>68.5</td>
                                            <td>74</td>
                                            <td>79</td>
                                            <td>84</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HIPS FIR (INCHES)</th>
                                            <td>33"</td>
                                            <td>34"</td>
                                            <td>36"</td>
                                            <td>38"</td>
                                            <td>40"</td>
                                            <td>42"</td>
                                            <td>44"</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">HIPS FIR (CM)</th>
                                            <td>81.5</td>
                                            <td>86.5</td>
                                            <td>91.5</td>
                                            <td>96.5</td>
                                            <td>101</td>
                                            <td>106.5</td>
                                            <td>111.5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">SKORT LENGTHS (SM)</th>
                                            <td>36.5</td>
                                            <td>38</td>
                                            <td>39.5</td>
                                            <td>41</td>
                                            <td>42.5</td>
                                            <td>44</td>
                                            <td>45.5</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Size Guide -->

    <!-- Start Modal Shipping Info -->
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
                                    <li><strong>Shipping</strong></li>
                                    <li>In-store collection available within 1 to 7 business days</li>
                                    <li>Next-day and Express delivery options also available</li>
                                    <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                                    <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                                </ul>
                                <ul class="shipping-info-list">
                                    <li><strong>Returns And Exchanges</strong></li>
                                    <li>Easy and complimentary, within 14 days</li>
                                    <li>See conditions and procedure in our return FAQs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Shipping Info -->

    <!-- Start Modal Product Ask -->
    <div class="modal fade" id="modalProductAsk" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <!-- Start Add Review Form-->
                                <div class="review-form m-t-30">
                                    <div class="section-content">
                                        <h6 class="font--bold text-uppercase">Have a question?</h6>
                                        <p class="section-content__desc">Your email address will not be published. Required fields are marked *</p>
                                    </div>
                                    <form class="form-box" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="text" id="modal-ask-name" placeholder="Your name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="email" id="modal-ask-email" placeholder="Your email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <input type="text" id="modal-ask-phone" placeholder="Your phone number" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-box__single-group">
                                                    <textarea id="modal-ask-message" rows="8" placeholder="Your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn--box btn--small btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- End Add Review Form- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Product Ask -->

@endsection


