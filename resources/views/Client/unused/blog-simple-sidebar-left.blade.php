@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Phản Hồi Từ Khách Hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <!-- Start Leftside - Sidebar Widgets -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Bài Đằn Gần </h5>
                            </div>
                            <ul class="sidebar__post-blog list-space--small">
                                <li class="d-flex align-items-center ">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="assets/img/product/size-small/product-home-1-img-1.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Jul 23, 2020</span>
                                        <a class="link--gray" href="">Consectetur adipi...</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <a class="sidebar__post-img img-responsive" href="#">
                                        <img src="assets/img/product/size-small/product-home-1-img-2.jpg" alt="">
                                    </a>
                                    <div class="sidebar__post-content">
                                        <span class="d-block color-gray">Jul 16, 2020</span>
                                        <a class="link--gray" href="">Without Very Dark...</a>
                                    </div>
                                </li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Recent Post  -->

                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Thực Đơn</h5>
                            </div>
                            <ul class="sidebar__menu">
                                <li><a href="#">Tìm Kiếm</a></li>
                                {{--                                <li><a href="#">Advanced Search</a></li>--}}
                                <li><a href="#">rợ Giúp và Câu Hỏi Thường Gặp</a></li>
                                <li><a href="#">Vị Trí Cửa Hàng</a></li>
                                <li><a href="#">Đơn Hàng</a></li>
                                <li><a href="#">Giao Hàng</a></li>
                                <li><a href="#">Đổi Trả</a></li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
{{--                        <div class="sidebar__widget">--}}
{{--                            <div class="sidebar__box">--}}
{{--                                <h5 class="sidebar__title">Tags</h5>--}}
{{--                            </div>--}}
{{--                            <ul class="sidebar__tag list-space--small">--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">blue</a></li>--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gold</a></li>--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">gray</a></li>--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">green</a></li>--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">maroon</a></li>--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">red</a></li>--}}
{{--                                <li><a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green" href="#">white</a></li>--}}
{{--                            </ul>--}}
{{--                        </div> <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->--}}

                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->

                <!-- Start Rightside - Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-single">
                                    <div class="img-responsive"><img src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt=""></div>
                                    <div class="blog__content">
                                        <h3 class="blog__title">Chất Lượng Sản Phẩm</h3>
                                        <div class="blog__archive m-t-20">
                                            <a href="#" class="link--gray link--icon-left m-r-30"><i class="far fa-calendar"></i> Oct 29, 2020</a>
                                            <a href="#" class="link--gray link--icon-left"><i class="far fa-user"></i> Jhon Doe</a>
                                        </div>
                                        <div class="para m-tb-20">
                                            <p class="para__text">
                                                Chất luọng các sản phẩm đảm bảo độ tươi ngon và an toàn, thực đơn đầy đủ chất ding dưỡng.
                                            </p>
                                            <p class="para__text">
                                                Đảm bảo mua chính xác thực đơn mà chúng tôi chọn.
                                            </p>
                                            <p class="para__text">
                                                Được lực luọng quân đội giao hàng nên chúng tôi an tâm về việc thực hiện chỉ thị của thành phố.
                                            </p>
                                            <p class="para__text">
                                                Giao hàng nhanh và tiết kiệm, cac sản phẩm được giao tới nơi đảm bảo không bị dập nát.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog__tag-share border-around m-t-30">
{{--                                        <div class="nametag">--}}
{{--                                            <span>Tags:</span>--}}
{{--                                            <ul class="nametag__list">--}}
{{--                                                <li><a href="#">Fashion,</a></li>--}}
{{--                                                <li><a href="#">T-shirt,</a></li>--}}
{{--                                                <li><a href="#">White</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
                                        <div class="nametag">
                                            <span>Chia Sẻ:</span>
                                            <ul class="nametag__list">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- End Single Blog List -->
                        </div>
                    </div>

                    <!-- Start Blog Comment -->
                    <div class="blog blog--comment m-t-100">
                        <div class="section-content">
                            <h5>3 Bình Luận</h5>
                        </div>
                        <!-- Start - Review Comment -->
                        <ul class="comment border-around m-t-40">
                            <!-- Start - Review Comment list-->
                            <li class="comment__list">
                                <div class="comment__wrapper">
                                    <div class="comment__img">
                                        <img src="assets/img/user/image-1.png" alt="">
                                    </div>
                                    <div class="comment__content">
                                        <div class="comment__content-top">
                                            <div class="comment__content-left flex-column">
                                                <h6 class="comment__name">Kaedyn Fraser</h6>
                                                <span class="blog-news__postdate">Oct 29, 2020</span>
                                            </div>
                                            <div class="comment__content-right">
                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>

                                        <div class="para__content">
                                            <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start - Review Comment Reply-->
                                <ul class="comment__reply">
                                    <li class="comment__reply-list">
                                        <div class="comment__wrapper">
                                            <div class="comment__img">
                                                <img src="assets/img/user/image-2.png" alt="">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__content-top">
                                                    <div class="comment__content-left flex-column ">
                                                        <h6 class="comment__name">Oaklee Odom</h6>
                                                        <span class="blog-news__postdate">Oct 29, 2020</span>
                                                    </div>
                                                    <div class="comment__content-right">
                                                        <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>

                                                <div class="para__content">
                                                    <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul> <!-- End - Review Comment Reply-->
                            </li> <!-- End - Review Comment list-->
                            <!-- Start - Review Comment list-->
                            <li class="comment__list">
                                <div class="comment__wrapper">
                                    <div class="comment__img">
                                        <img src="assets/img/user/image-3.png" alt="">
                                    </div>
                                    <div class="comment__content">
                                        <div class="comment__content-top">
                                            <div class="comment__content-left flex-column">
                                                <h6 class="comment__name">Jaydin Jones</h6>
                                                <span class="blog-news__postdate">Oct 29, 2020</span>
                                            </div>
                                            <div class="comment__content-right">
                                                <a href="#" class="link--gray link--icon-left m-b-5"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>

                                        <div class="para__content">
                                            <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                        </div>
                                    </div>
                                </div>
                            </li> <!-- End - Review Comment list-->
                        </ul>  <!-- End - Review Comment -->
                    </div>  <!-- End Blog Comment -->

                    <!-- Start Blog Comment Form -->
                    <div class="blog blog--comment-form m-t-40">
                        <div class="section-content">
                            <h5>Để Lại Câu Hỏi</h5>
                        </div>
                        <form class="form-box" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-box__single-group">
                                        <label for="form-name">Tên*</label>
                                        <input type="text" id="form-name" placeholder="Tên của bạn">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box__single-group">
                                        <label for="form-email">Email*</label>
                                        <input type="email" id="form-email" placeholder="Email của bạn" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-box__single-group">
                                        <label for="form-review">Đánh Giá Của Bạn *</label>
                                        <textarea id="form-review" rows="8" placeholder="Viết nhận xét"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn--radius-tiny btn--small btn--black btn--black-hover-green text-uppercase font--bold m-t-30" type="submit">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- End Blog Comment Form -->

                </div>  <!-- Start Rightside - Content -->

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
    </div> <!-- End Modal Quickview cart -->

@endsection

