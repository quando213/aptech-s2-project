@extends('Admin.layout.index', [
    'back_href' => route('orderList'),
])
@section('title')
    Thông tin đơn hàng
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title">Cập nhật đơn hàng</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST">
                            @csrf
                            <div class="row">
                                @include('Admin.layout.form-fields', [
'fields' => [
    [
        'element' => 'select',
        'col' => 12,
        'name' => 'status',
        'label' => 'Trạng thái',
        'placeholder' => 'Chọn trạng thái',
        'options' => \App\Enums\OrderStatus::asSelectArray(),
    ],
    [
        'element' => 'select',
        'col' => 12,
        'name' => 'payment_method',
        'label' => 'Phương thức thanh toán',
        'placeholder' => 'Chọn phương thức thanh toán',
        'options' => \App\Enums\OrderPaymentMethod::asSelectArray(),
    ],
    [
        'element' => 'select',
        'col' => 12,
        'name' => 'shipper_id',
        'label' => 'Quân nhân phụ trách',
        'placeholder' => 'Chọn người phụ trách mua hộ',
        'options' => arrayToOptions($shippers ?? [], 'first_name', 'id'),
    ],
],
'data' => $order
])
                                <div class="col-12 d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Lưu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title">Thông tin chung</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Người đặt hàng</th>
                                <td>{{$order->user->getFullName()}}</td>
                            </tr>
                            <tr>
                                <th>Người nhận hàng</th>
                                <td>{{$order->shipping_name}}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ người nhận</th>
                                <td>{{$order->getFullAddress()}}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại người nhận</th>
                                <td>{{$order->shipping_phone}}</td>
                            </tr>
                            <tr>
                                <th>Giá trị đơn hàng</th>
                                <td>{{$order->total_price}} ₫</td>
                            </tr>
                            <tr>
                                <th>Ngày đặt hàng</th>
                                <td>{{$order->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title">Chi tiết đơn hàng</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng giá</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->details as $orderDetail)
                                <tr>
                                    <td>
                                        <div class="img-square-container">
                                            <img src="{{$orderDetail->product->thumbnail}}" alt=""
                                                 width="80" height="80">
                                        </div>
                                    </td>
                                    <td>{{$orderDetail->product->name}}</td>
                                    <td style="text-align: right;">{{number_format($orderDetail->unit_price)}}đ</td>
                                    <td style="text-align: right;">{{$orderDetail->quantity}}</td>
                                    <td style="text-align: right;">{{number_format($orderDetail->unit_price * $orderDetail->quantity)}}đ</td>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="3">&nbsp;</th>
                                <th style="text-align: right;">Tổng giá trị</th>
                                <th style="text-align: right;">{{$order->total_price}} ₫</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
