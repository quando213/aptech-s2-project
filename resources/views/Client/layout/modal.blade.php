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
                    <div class="row mb-3">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" id="modalAddCartImg"
                                             src="{{ asset('assets/img/product/size-normal/product-home-1-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="link--green link--icon-left"><i class="fal fa-check-square"></i>
                                        Thêm vào giỏ hàng thành công!
                                    </div>
                                    <div class="modal__product-cart-buttons m-tb-15">
                                        <a href="{{ route('viewCart') }}"
                                           class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercase">Xem
                                            giỏ hàng</a>
                                        <a href="{{ route('checkout') }}"
                                           class="btn btn--box  btn--tiny btn--green btn--green-hover-black btn--uppercaset">Thanh
                                            toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-3 mt-lg-0 modal__border">
                            <ul class="modal__product-shipping-info">
                                <li class="link--icon-left"><i class="icon-shopping-cart"></i>Bạn có <span class="cart-count">0</span> sản phẩm trong giỏ hàng.
                                </li>
                                <li>TỔNG: <span class="cart-total">0</span>đ</li>
                                <li><a href="#" class="btn text-underline color-green" data-dismiss="modal">Tiếp tục mua sắm</a></li>
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
                                    <img class="img-fluid" id="modalQuickViewImg"
                                         src=""
                                         alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-details-box">
                                <h5 class="title title--normal m-b-20" id="modalQuickViewName">Aliquam lobortis</h5>
                                <div class="product__price">
{{--                                    <span class="product__price-del">$35.90</span>--}}
                                    <span class="product__price-reg"><span id="modalQuickViewPrice"></span>đ</span>
                                </div>
                                <div class="product__desc m-t-25 m-b-30">
                                    <p id="modalQuickViewDesc"></p>
                                </div>

                                <div class="product-var p-t-30">
                                    <div
                                        class="product-quantity product-var__item d-flex align-items-center flex-wrap">
                                        <span class="product-var__text">Số lượng: </span>
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

                                    <div class="product-var__item">
                                        <a id="modalQuickViewAddToCart" data-product-id="0"
                                           class="btn btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Thêm
                                            vào giỏ</a>
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
