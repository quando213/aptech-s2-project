@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Home</a></li>
                        <li class="page-breadcrumb__nav active">Blog Grid Sidebar Right</li>
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
                        <!-- Start Single Sidebar Widget - Custom Menu -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">CUSTOM MENU</h5>
                            </div>
                            <ul class="sidebar__menu">
                                <li><a href="#">Search Terms</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="#">Helps & Faqs</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Orders & Returns</a></li>
                                <li><a href="#">Deliveries</a></li>
                                <li><a href="#">Refund & Returns</a></li>
                            </ul>
                        </div>  <!-- End Single Sidebar Widget - Custom Menu -->

                        <!-- Start Single Sidebar Widget - Recent Post -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Recent Post</h5>
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

                        <!-- ::::::  Start Single Sidebar Widget - Tag   ::::::  -->
                        <div class="sidebar__widget">
                            <div class="sidebar__box">
                                <h5 class="sidebar__title">Tags</h5>
                            </div>
                            <ul class="sidebar__tag list-space--small">
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">blue</a></li>
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">gold</a></li>
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">gray</a></li>
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">green</a></li>
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">maroon</a></li>
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">red</a></li>
                                <li>
                                    <a class="btn btn--box btn--tiny btn--radius-tiny btn--border-gray btn--border-gray-hover-green"
                                       href="#">white</a></li>
                            </ul>
                        </div> <!-- ::::::  End Single Sidebar Widget - Recent Post   ::::::  -->

                    </div>
                </div>  <!-- End Left Sidebar  Widgets-->

                <!-- Start Rightside - Content -->
                <div class="col-lg-9">
                    <div class="blog">
                        <div class="row">
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-list">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="blog__img"><a href=""><img
                                                        src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg"
                                                        alt=""></a></div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="blog__content">
                                                <a class="link--gray" href=""><h3 class="blog__title">Consectetur
                                                        Adipisicing</h3></a>
                                                <div class="blog__archive m-t-20">
                                                    <a href="#" class="link--gray link--icon-left m-r-30"><i
                                                            class="far fa-calendar"></i> Oct 29, 2020</a>
                                                    <a href="#" class="link--gray link--icon-left"><i
                                                            class="far fa-user"></i> Jhon Doe</a>
                                                </div>
                                                <div class="para m-tb-20">
                                                    <p class="para__text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Accusamus expedita quo voluptate, esse ratione facilis quibusdam
                                                        vel ad, quas ut reiciendis neque voluptates adipisci laborum,
                                                        dolor saepe natus.
                                                    </p>
                                                </div>
                                                <a class="btn btn--radius btn--small btn--black btn--black-hover-green"
                                                   href="/blog-single-sidebar-left">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog List -->
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-list">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="inner-slider inner-slider-grid-1 pos-relative">
                                                <div class="blog__img"><img
                                                        src="assets/img/blog/feed/blog-feed-home-1-img-2.jpg" alt="">
                                                </div>
                                                <div class="blog__img"><img
                                                        src="assets/img/blog/feed/blog-feed-home-1-img-1.jpg" alt="">
                                                </div>
                                                <div class="blog__img"><img
                                                        src="assets/img/blog/feed/blog-feed-home-1-img-3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="blog__content">
                                                <a href=""><h3 class="blog__title">Without Very Darkness</h3></a>
                                                <div class="blog__archive m-t-20">
                                                    <a href="#" class="link--gray link--icon-left m-r-30"><i
                                                            class="far fa-calendar"></i> Jul 9, 2020</a>
                                                    <a href="#" class="link--gray link--icon-left"><i
                                                            class="far fa-user"></i> Jhon Doe</a>
                                                </div>
                                                <div class="para m-tb-20">
                                                    <p class="para__text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Accusamus expedita quo voluptate, esse ratione facilis quibusdam
                                                        vel ad, quas ut reiciendis neque voluptates adipisci laborum,
                                                        dolor saepe natus.
                                                    </p>
                                                </div>
                                                <a class="btn btn--radius btn--small btn--black btn--black-hover-green"
                                                   href="blog-single-sidebar-left.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog List -->
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-list">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="blog__img">
                                                <div class="blog__video pos-relative">
                                                    <img src="assets/img/blog/feed/blog-feed-home-1-img-4.jpg" alt="">
                                                    <a class="popup-icon vinobox-popup pos-absolute"
                                                       data-autoplay="true" data-vbtype="video"
                                                       href="https://youtu.be/QQHLGlB4Dpk?list=PLk25BQFrj7wHgCkzPuejFXJTiFIam-MVq"><i
                                                            class="fal fa-play"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="blog__content">
                                                <a href=""><h3 class="blog__title">How to Diet Properly</h3></a>
                                                <div class="blog__archive m-t-20">
                                                    <a href="#" class="link--gray link--icon-left m-r-30"><i
                                                            class="far fa-calendar"></i> Mar 3, 2020</a>
                                                    <a href="#" class="link--gray link--icon-left"><i
                                                            class="far fa-user"></i> Jhon Doe</a>
                                                </div>
                                                <div class="para m-tb-20">
                                                    <p class="para__text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Accusamus expedita quo voluptate, esse ratione facilis quibusdam
                                                        vel ad, quas ut reiciendis neque voluptates adipisci laborum,
                                                        dolor saepe natus.
                                                    </p>
                                                </div>
                                                <a class="btn btn--radius btn--small btn--black btn--black-hover-green"
                                                   href="blog-single-sidebar-left.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog List -->
                            <!-- Start Single Blog List -->
                            <div class="col-12">
                                <div class="blog__type-list">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="blog__img">
                                                <iframe class="embed-responsive-item" allow="autoplay"
                                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="blog__content">
                                                <a class="link--gray" href=""><h3 class="blog__title">Remaining
                                                        Essential Foods</h3></a>
                                                <div class="blog__archive m-t-20">
                                                    <a href="#" class="link--gray link--icon-left m-r-30"><i
                                                            class="far fa-calendar"></i> Feb 11, 2020</a>
                                                    <a href="#" class="link--gray link--icon-left"><i
                                                            class="far fa-user"></i> Jhon Doe</a>
                                                </div>
                                                <div class="para m-tb-20">
                                                    <p class="para__text">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Accusamus expedita quo voluptate, esse ratione facilis quibusdam
                                                        vel ad, quas ut reiciendis neque voluptates adipisci laborum,
                                                        dolor saepe natus.
                                                    </p>
                                                </div>
                                                <a class="btn btn--radius btn--small btn--black btn--black-hover-green"
                                                   href="blog-single-sidebar-left.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Single Blog List -->
                        </div>
                    </div>

                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link" href="#">Prev</a>
                            <li class="page-pagination__item"><a class="page-pagination__link active" href="#">1</a>
                            </li>
                            <li class="page-pagination__item"><a class="page-pagination__link" href="#">2</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
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
                                            <img class="img-fluid"
                                                 src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>Added
                                            to cart successfully!
                                        </div>
                                        <div class="modal__product-cart-buttons m-tb-15">
                                            <a href="/cart"
                                               class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">View
                                                Cart</a>
                                            <a href="/checkout"
                                               class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal__border">
                                <ul class="modal__product-shipping-info">
                                    <li class="link--icon-left"><i class="icon-shopping-cart"></i> There Are 5 Items In
                                        Your Cart.
                                    </li>
                                    <li>TOTAL PRICE: <span>$187.00</span></li>
                                    <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">CONTINUE
                                            SHOPPING</a></li>
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
    </div> <!-- End Modal Quickview cart -->

@endsection


