@extends('Client.layout.index')
@section('contact')
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Giỏ hàng</li>
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
                        <div>
                            <a href="{{ route('home') }}"
                               class="btn btn--box btn--medium btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-r-20">Tiếp tục mua hàng</a>
                            <a href="{{ route('destroyCart') }}"
                               class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--bold">Xóa
                                giỏ hàng</a>
                        </div>
                    </div>
                    <!-- Start Cart Table -->
                    <div class="table-content table-responsive cart-table-content m-t-30">
                        <table>
                            <thead class="gray-bg">
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
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
{{--                                                <button class="pb-3">Lưu</button>--}}
                                                <input type="text" name="rowId" hidden value="{{$item->rowId}}">
                                            </td>
                                        </form>
                                        <td class="product-subtotal">{{$item->subtotal(0)}} ₫</td>
                                    </tr>
                                @endforeach
                                <tr class="cart-summary">
                                    <td colspan="3">&nbsp;</td>
                                    <td>Tạm tính</td>
                                    <td>{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} ₫</td>
                                </tr>
                                <tr class="cart-summary">
                                    <td colspan="3">&nbsp;</td>
                                    <td>Phí vận chuyển</td>
                                    <td>0 ₫</td>
                                </tr>
                                <tr class="cart-summary">
                                    <td colspan="3">&nbsp;</td>
                                    <td class="h4">Thành tiền</td>
                                    <td class="h4">{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} ₫</td>
                                </tr>
                                </tbody>

                            @else
                                <tbody>
                                <tr class="odd">
                                    <td colspan="5" class="dataTables_empty">Chưa có sản phẩm nào.
                                    </td>
                                </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>  <!-- End Cart Table -->
                    <!-- Start Cart Table Button -->
                    <div class="cart-table-button m-t-10">
                        <div class="cart-table-button--left"></div>
                        <div class="cart-table-button--right">
                            <a href="#"
                               class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20 m-r-20 text-uppercase">Cập
                                nhật giỏ hàng</a>
                            <a href="{{ route('checkout') }}"
                                class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--bold m-t-20 text-uppercase"
                                type="submit">Thanh toán</a>
                        </div>
                    </div>  <!-- End Cart Table Button -->
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection

