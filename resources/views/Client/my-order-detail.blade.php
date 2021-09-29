@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav"><a href="{{ route('myAccount') }}">Tài khoản người dùng</a>
                        </li>
                        <li class="page-breadcrumb__nav active">Đơn hàng #{{ $order->id }}</li>
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ( session()->has('status') )
                        <div
                            class="text-center alert alert-success alert-dismissable">{{ session()->get('status') }}</div>
                    @endif
                    @if($order->status == \App\Enums\OrderStatus::CREATED)
                        <div class="card my-2 mb-4">
                            <div class="card-header" style="background: #89c74a; color: white;">
                                <h4 class="card-title text-center py-3">
                                    Thanh toán ngay để nhanh chóng nhận được đơn hàng bạn đã đặt!
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-6 text-center"
                                         style="border-right: 1px solid rgba(0,0,0,.125);">
                                        <h4>Chuyển khoản</h4>
                                        <div class="text-left mt-3 px-4">
                                            <div>Vui lòng chuyển khoản vào số tài khoản sau:</div>
                                            <b>Chủ tài khoản:</b> Đi Chợ Hộ<br>
                                            <b>Số tài khoản:</b> 12345XXX69<br>
                                            <b>Ngân hàng:</b> Ngân hàng TMCP Kỹ thương Việt Nam (Techcombank)<br>
                                            <b>Số tiền:</b> {{number_format($order->total_price)}}đ<br>
                                            <b>Nội dung CK:</b> DCH-{{$order->id}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <h4>Thanh toán trực tuyến với <img
                                                src="{{ asset('assets/img/vnpay-logo.png') }}" class="ml-2" alt=""
                                                height="60"></h4>
                                        <a href="{{ route('makeVNPayPayment', ['id' => $order->id]) }}" type="button"
                                           target="_blank"
                                           class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black text-uppercase font--semi-bold mt-2">
                                            Thanh toán ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="card mt-2">
                        <div class="card-header d-md-flex justify-content-between align-items-center py-3">
                            <div class="d-md-flex">
                                <div class="mr-5 d-flex flex-md-column align-items-end align-items-md-start">
                                    <div class="text-secondary text-uppercase small font-weight-bold mr-3">Ngày đặt
                                    </div>
                                    <div>{{ $order->created_at }}</div>
                                </div>
                                <div class="mr-5 d-flex flex-md-column align-items-end align-items-md-start">
                                    <div class="text-secondary text-uppercase small font-weight-bold mr-3">Tổng giá
                                        trị
                                    </div>
                                    <div>{{ number_format($order->total_price) }}đ</div>
                                </div>
                                <div class="mr-5 d-flex flex-md-column align-items-end align-items-md-start">
                                    <div class="text-secondary text-uppercase small font-weight-bold mr-3">Người nhận
                                    </div>
                                    <div>
                                        {{ $order->getFullAddress() }}<br>
                                        {{ $order->shipping_phone }}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-md-column align-items-end">
                                <div class="text-secondary text-uppercase small mr-3 mr-md-0 font-weight-bold">Đơn hàng
                                    #{{$order->id}}</div>
                                <h3 class="font-weight-bold">
                                    <x-order-status-badge :status="$order->status"></x-order-status-badge>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body row d-md-flex justify-content-between py-4 pl-3">
                            <div class="col-md-9">
                                <div class="my-4 my-md-0">
                                    @foreach($orderDetails as $orderDetail)
                                        <div class="row d-flex align-items-center">
                                            <div class="col-3">
                                                <div class="offcanvas-add-cart__img-box pos-relative my-2">
                                                    <a href="{{ route('detailProduct', ['id' => $orderDetail->product_id]) }}"
                                                       class="offcanvas-add-cart__img-link img-responsive">
                                                        <img src="{{$orderDetail->product->thumbnail}}" alt=""
                                                             class="add-cart__img">
                                                    </a>
                                                    <span class="offcanvas-add-cart__item-count pos-absolute">{{ $orderDetail->quantity }}x</span>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <h5>
                                                    <a href="{{ route('detailProduct', ['id' => $orderDetail->product_id]) }}">
                                                        {{$orderDetail->product->name}}</a></h5>
                                                Giá: {{ number_format($orderDetail->unit_price) }}đ<br>
                                                <a href="javascript:void(0)"
                                                   data-product-id="{{ $orderDetail->product_id }}" type="button"
                                                   class="quick-add-to-cart btn btn--box btn--tiny btn--radius btn--green btn--green-hover-black text-uppercase font--semi-bold mt-2">
                                                    Mua thêm
                                                </a>
                                                <a type="button"
                                                   href="{{ route('detailProduct', ['id' => $orderDetail->product_id]) }}"
                                                   class="btn btn--box btn--tiny btn--radius btn--black btn--black-hover-green text-uppercase font--semi-bold mt-2">
                                                    Xem sản phẩm
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-column justify-content-center">
                                @if($order->status == \App\Enums\OrderStatus::CREATED)
                                    <a type="button"
                                       class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black text-uppercase font--semi-bold mb-2">
                                        Thay đổi địa chỉ
                                    </a>
                                    <a type="button"
                                       class="btn btn--box btn--large btn--radius btn--black btn--black-hover-green text-uppercase font--semi-bold">Hủy
                                        đơn hàng</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection
