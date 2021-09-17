@extends('Client.layout.index')
@section('contact')
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Giỏ Hàng</li>
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
                    <div class="section-content">
                        <h5 class="section-content__title">Giỏ Hàng Của Bạn</h5>
                    </div>
                    <!-- Start Cart Table -->
                    <div class="table-content table-responsive cart-table-content m-t-30">
                        <table>
                            <thead class="gray-bg">
                            <tr>
                                <th>ẢNh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>KHối Lượng</th>
                                <th>Tổng</th>
                                <th>Thay Đổi</th>
                            </tr>
                            </thead>

                            @if(\Gloudemans\Shoppingcart\Facades\Cart::content()->count() > 0)
                                <tbody>
                                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{$item->options->thumbnail}}"
                                                             alt=""></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{number_format($item->price)}} ₫</span></td>
                                        <form method="post">
                                            @csrf
                                            <td class="product-quantities">
                                                <div class="quantity d-inline-block">
                                                    <input type="number" name="qty" min="1" step="1" value="{{$item->qty}}">
                                                </div>
                                                <input type="text" name="rowId" hidden value="{{$item->rowId}}">
                                            </td>
                                            <td class="product-subtotal">{{$item->subtotal(0)}} ₫</td>
                                            <td class="product-remove">
                                                <button><i class="fa fa-pencil-alt"></i></button>
                                                <a href="/cart/remove/{{$item->rowId}}"><i class="fa fa-times"></i></a>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                    <td>Tổng giá trị</td>
                                    <td>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} ₫</td>
                                </tr>
                                </tbody>

                            @else
                                <tbody>
                                <tr class="odd">
                                    <td colspan="6" class="dataTables_empty">Không có dư liệu nào
                                    </td>
                                </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>  <!-- End Cart Table -->
                    <!-- Start Cart Table Button -->
                    <div class="cart-table-button m-t-10">
                        <div class="cart-table-button--left">
                            <a href="/"
                               class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20">Tiếp
                                Tục Mua Sắm</a>
                        </div>
                        <div class="cart-table-button--right">
                            <a href="#"
                               class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20 m-r-20">Cập
                                Nhật Giỏ Hàng</a>
                            <a href="/cart/destroy"
                               class="btn btn--box btn--large btn--radius btn--black btn--black-hover-green btn--uppercase font--bold m-t-20">Xóa
                                Giỏ Hàng</a>
                        </div>
                    </div>  <!-- End Cart Table Button -->
                </div>
            </div>
            <div class="row">
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="sidebar__widget m-t-40">--}}
{{--                        <div class="sidebar__box">--}}
{{--                            <h5 class="sidebar__title">Phí Vận Chuyển</h5>--}}
{{--                        </div>--}}
{{--                        <span>Nhập Địa Chỉ Nhận Hàng.</span>--}}
{{--                        <form action="#" method="post" class="form-box">--}}
{{--                            <div class="form-box__single-group">--}}
{{--                                <label for="form-country">* Thành Phố</label>--}}
{{--                                <select id="form-country">--}}
{{--                                    <option value="HN" selected>Hà Nội</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-box__single-group">--}}
{{--                                <label for="form-state">* Quận</label>--}}
{{--                                <select id="form-country">--}}
{{--                                    <option value="HN" selected>Mê Linh</option>--}}
{{--                                    <option value="NTL">Cầu Giấy</option>--}}
{{--                                    <option value="CG">Bắc Từ Liêm</option>--}}
{{--                                    <option value="GL">Gia Lâm</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-box__single-group">--}}
{{--                                <label for="form-state">* Phường</label>--}}
{{--                                <select id="form-country">--}}
{{--                                    <option value="HN" selected>Mĩ Đình 1</option>--}}
{{--                                    <option value="NTL">Mĩ Đình 2</option>--}}
{{--                                    <option value="CG">Đình Thôn</option>--}}
{{--                                    <option value="GL">Thiên Hiền</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-box__single-group">--}}
{{--                                <label for="form-zipcode">* Số Nhà</label>--}}
{{--                                <input type="text" id="form-zipcode">--}}
{{--                            </div>--}}
{{--                            <div class="from-box__buttons m-t-25">--}}
{{--                                <button--}}
{{--                                    class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold"--}}
{{--                                    type="submit">Gửi Địa Chỉ--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="sidebar__widget m-t-40">--}}
{{--                        <div class="sidebar__box">--}}
{{--                            <h5 class="sidebar__title">Sử Dụng Mã Giảm Giá</h5>--}}
{{--                        </div>--}}
{{--                        <span>Nhập Mã Phiếu Giảm Giá Nếu Có.</span>--}}
{{--                        <form action="#" method="post" class="form-box">--}}
{{--                            <div class="form-box__single-group">--}}
{{--                                <label for="form-coupon">*Nhập mã Phiếu</label>--}}
{{--                                <input type="text" id="form-coupon">--}}
{{--                            </div>--}}
{{--                            <div class="from-box__buttons m-t-25">--}}
{{--                                <button--}}
{{--                                    class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold"--}}
{{--                                    type="submit">Áp Dụng--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar__widget m-t-40">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Tổng Giỏ Hàng</h5>
                        </div>
                        <h6 class="total-cost">Tổng Sản Phẩm<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} ₫</span></h6>
                        <div class="total-shipping">
                            <span>Phí Vận Chuyển</span>
                            <ul class="shipping-cost m-t-10">
                                <li>
                                    <label for="ship-standard">
                                        <input type="radio" class="shipping-select" name="shipping-cost"
                                               value="Standard" id="ship-standard" checked><span>Tiêu Chuẩn</span>
                                    </label>
                                    <span class="ship-price">$20.00</span>
                                </li>
                                <li>
                                    <label for="ship-express">
                                        <input type="radio" class="shipping-select" name="shipping-cost" value="Express"
                                               id="ship-express"><span>Nhanh</span>
                                    </label>
                                    <span class="ship-price">$30.00</span>
                                </li>
                            </ul>
                        </div>
                        <h4 class="grand-total m-tb-25">Tổng Thanh Toán <span>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} ₫</span></h4>
                        <button
                            class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold"
                            type="submit">
                            <a href="/checkout" class=" btn--green-hover-black btn--uppercase font--semi-bold">Thanh
                                Toán</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection

