<!--  Start Popup Add Cart  -->
{{--    offcanvas-open--}}
<div id="offcanvas-add-cart__box" class="offcanvas offcanvas-cart offcanvas-add-cart ">
    <div class="offcanvas__top">
        <a href="{{ route('viewCart') }}">
            <span class="offcanvas__top-text"><i class="icon-shopping-cart"></i>Giỏ hàng</span>
        </a>
        <button class="offcanvas-close"><i class="fal fa-times"></i></button>
    </div>
@if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
    <!-- Start Add Cart Item Box-->
        <ul class="offcanvas-add-cart__menu">
        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
            <!-- Start Single Add Cart Item-->
                <li class="offcanvas-add-cart__list pos-relative d-flex align-items-center justify-content-between ">
                    <div class="row offcanvas-add-cart__content d-flex align-items-start m-r-10">
                        <div class="col-5">
                            <div class="offcanvas-add-cart__img-box pos-relative">
                                <a href="{{ route('detailProduct', $item->id) }}"
                                   class="offcanvas-add-cart__img-link img-responsive">
                                    <img src="{{ $item->options->thumbnail }}" alt="{{ $item->name }}"
                                         class="add-cart__img">
                                </a>
                                <span class="offcanvas-add-cart__item-count pos-absolute">{{ $item->qty }}x</span>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="offcanvas-add-cart__detail">
                                <a href="/product-single-default" class="offcanvas-add-cart__link">{{ $item->name }}</a>
                                <span class="offcanvas-add-cart__price">{{ number_format($item->price) }}đ</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('removeCart', ['rowId' => $item->rowId]) }}">
                        <button class="offcanvas-add-cart__item-dismiss"><i class="fal fa-times"></i></button>
                    </a>
                </li> <!-- Start Single Add Cart Item-->
            @endforeach
        </ul> <!-- Start Add Cart Item Box-->
        <!-- Start Add Cart Checkout Box-->
        <div class="offcanvas-add-cart__checkout-box-bottom">
            <!-- Start offcanvas Add Cart Checkout Info-->
            <ul class="offcanvas-add-cart__checkout-info">
                <!-- Start Single Add Cart Checkout Info-->
                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Tạm tính</span>
                    <span
                        class="offcanvas-add-cart__checkout-right-info"><span class="cart-total">{{ \Gloudemans\Shoppingcart\Facades\Cart::subtotal() }}</span>đ</span>
                </li> <!-- End Single Add Cart Checkout Info-->
                <!-- Start Single Add Cart Checkout Info-->
                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Phí vận chuyển</span>
                    <span class="offcanvas-add-cart__checkout-right-info">0đ</span>
                </li> <!-- End Single Add Cart Checkout Info-->
                <!-- Start Single Add Cart Checkout Info-->
                <!-- Start Single Add Cart Checkout Info-->
                <li class="offcanvas-add-cart__checkout-list">
                    <span class="offcanvas-add-cart__checkout-left-info">Thành tiền</span>
                    <span class="offcanvas-add-cart__checkout-right-info"><span class="cart-total">{{ \Gloudemans\Shoppingcart\Facades\Cart::total() }}</span>đ</span>
                </li> <!-- End Single Add Cart Checkout Info-->
            </ul> <!-- End offcanvas Add Cart Checkout Info-->

            <div class="offcanvas-add-cart__btn-checkout">
                <a href="{{ route('checkout') }}"
                   class="btn btn--block btn--radius btn--box btn--black btn--black-hover-green btn--large btn--uppercase font--bold">Tiến
                    hành thanh toán</a>
            </div>
        </div> <!-- End Add Cart Checkout Box-->
    @else
        <div>Chưa có sản phẩm nào trong giỏ hàng.</div>
        <div class="mt-3">
            <a href="{{ route('home') }}" class="btn btn--block btn--radius btn--box btn--green btn--green-hover-black btn--large btn--uppercase font--bold">Mua sắm ngay</a>
        </div>
    @endif
</div> <!-- End Popup Add Cart -->

{{--    style="display: block"--}}
<div class="offcanvas-overlay"></div>
