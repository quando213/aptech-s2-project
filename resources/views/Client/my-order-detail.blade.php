@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tài khoản người dùng</li>
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
                        <div class="text-center alert alert-success alert-dismissable">{{ session()->get('status') }}</div>
                    @endif
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="my-account-menu">
                                    <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab"
                                        role="tablist">
                                        <div class="card-body">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th scope="col">Trang thái</th>
                                                    <td>@switch($order->status)
                                                            @case(1)
                                                            <span
                                                                class="badge bg-primary">{{\App\Enums\OrderStatus::getDescription($order->status) }}</span>
                                                            @break
                                                            @case(2)
                                                            <span
                                                                class="badge bg-info">{{\App\Enums\OrderStatus::getDescription($order->status) }}</span>
                                                            @break
                                                            @case(3)
                                                            <span
                                                                class="badge bg-warning">{{\App\Enums\OrderStatus::getDescription($order->status) }}</span>
                                                            @break
                                                            @case(4)
                                                            <span
                                                                class="badge bg-success">{{\App\Enums\OrderStatus::getDescription($order->status) }}</span>
                                                            @break
                                                            @case(5)
                                                            <span
                                                                class="badge bg-danger">{{\App\Enums\OrderStatus::getDescription($order->status) }}</span>
                                                            @break
                                                        @endswitch</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Người đặt hàng</th>
                                                    <td>{{$order->user->first_name .' '.$order->user->last_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Người nhân hàng</th>
                                                    <td>{{$order->shipping_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Địa chỉ người nhận</th>
                                                    <td>{{$order->district->name .', '.$order->ward->name.', '.$order->shipping_street}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Số điện thoại người nhận</th>

                                                    <td>{{$order->shipping_phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Gía trị đơn hàng</th>
                                                    <td>{{$order->total_price}} ₫</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Ngày đạt hàng</th>
                                                    <td>{{$order->created_at}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </ul>
                                    <div class="tab-content my-account-tab" id="pills-tabContent">
                                        <div class="card-body">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                <tr>
                                                    <th>Ảnh sản phẩm</th>
                                                    <th>Tên sản phâm</th>
                                                    <th>Gía sản phâm</th>
                                                    <th>Số lượng sản phâm</th>
                                                    <th>Tông giá</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orderDetails as $orderDetail)
                                                    <tr>
                                                        <td class="text-bold-500"><img
                                                                src="{{$orderDetail->product->thumbnail}}" alt=""
                                                                width="100" height="100"></td>
                                                        <th scope="col">{{$orderDetail->product->name}}</th>
                                                        <th scope="col">{{$orderDetail->product->price}}</th>
                                                        <th scope="col">{{$orderDetail->quantity}}</th>
                                                        <th scope="col">{{$orderDetail->unit_price}}</th>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tbody>
                                                <tr>
                                                    <td colspan="3">&nbsp;</td>
                                                    <td>Tổng giá trị</td>
                                                    <td>{{$order->total_price}} ₫</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- :::::::::: End My Account Section :::::::::: -->
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection
