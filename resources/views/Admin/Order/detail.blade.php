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
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="sel1">Trang thái</label>
                                        <select class="form-select" name="status"
                                                aria-label="Default select example">
                                            <option selected disabled hidden>Open this select menu</option>
                                            @foreach(\App\Enums\OrderStatus::getValues() as $type)
                                                <option
                                                    value="{{$type}}" {{$order && $order->status === $type ? 'selected' : ''}}>{{\App\Enums\OrderStatus::getDescription($type)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="sel1">Trạng thái thanh toán</label>
                                        <select class="form-select" name="payment_method"
                                                aria-label="Default select example">
                                            <option selected disabled hidden>Open this select menu</option>
                                            @foreach(\App\Enums\OrderPaymentMethod::getValues() as $type)
                                                <option
                                                    value="{{$type}}" {{$order && $order->payment_method === $type ? 'selected' : ''}}>{{\App\Enums\OrderPaymentMethod::getDescription($type)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if($shippers)
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-Password">Người nhận đơn</label>
                                            <select class="form-select" name="shipper_id"
                                                    aria-label="Default select example">
                                                <option selected disabled hidden>Open this select menu</option>
                                                @foreach($shippers as $shipper)
                                                    <option
                                                        value="{{$shipper->id}}" {{$order && $order->shipper_id === $shipper->id ? 'selected' : ''}}>{{$shipper->first_name.' '.$shipper->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @else
                                    <div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Nơi nhận đơn hàng hiên không có đơn vị
                                                    vận chuyển nào
                                                    <br>Bạn có thể hủy hơn hàng hoặc chọn đơn vi vân chuyển mắc
                                                    định</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="card-body">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                           value="1" name="choice"
                                                                           id="flexRadioDefault1" checked="">
                                                                    <label class="form-check-label"
                                                                           for="flexRadioDefault1">
                                                                        Nhận đơn hàng với đợn vị vân chuyển mặc
                                                                        định
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                           value="0" name="choice"
                                                                           id="flexRadioDefault2">
                                                                    <label class="form-check-label"
                                                                           for="flexRadioDefault2">
                                                                        Hủy đơn hàng và thông báo với khác hàng
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3" id="text"
                                                                 style="display:none">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label">Lý do hủy đơn</label>
                                                                <textarea class="form-control" name="message"
                                                                          id="exampleFormControlTextarea1"
                                                                          placeholder="Viết lý do hủy đơn cũ thể cho khác hàng"
                                                                          rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
                                <td>{{$order->user->first_name .' '.$order->user->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Người nhận hàng</th>
                                <td>{{$order->shipping_name}}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ người nhận</th>
                                <td>{{$order->shipping_street .', '.$order->ward->name.', '.$order->district->name}}</td>
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
                                <td>{{\Carbon\Carbon::parse($order->created_at)->format(DISPLAY_DATETIME_FORMAT)}}</td>
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
                            @foreach($orderDetails as $orderDetail)
                                <tr>
                                    <td>
                                        <div class="img-square-container">
                                            <img src="{{$orderDetail->product->thumbnail}}" alt=""
                                                 width="80" height="80">
                                        </div>
                                    </td>
                                    <td>{{$orderDetail->product->name}}</td>
                                    <td style="text-align: right;">{{number_format(floatval($orderDetail->unit_price))}}đ</td>
                                    <td style="text-align: right;">{{$orderDetail->quantity}}</td>
                                    <td style="text-align: right;">{{number_format(floatval($orderDetail->unit_price) * $orderDetail->quantity)}}đ</td>
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

    {{--    @include('Admin.layout.form-fields', [--}}
    {{--    'fields' => [--}}
    {{--        [--}}
    {{--            'element' => 'input',--}}
    {{--            'col' => 12,--}}
    {{--            'name' => 'name',--}}
    {{--            'label' => 'Tên nhóm'--}}
    {{--        ],--}}
    {{--        [--}}
    {{--            'element' => 'select',--}}
    {{--            'col' => 6,--}}
    {{--            'name' => 'district_id',--}}
    {{--            'label' => 'Quận/huyện',--}}
    {{--            'placeholder' => 'Chọn quận/huyện',--}}
    {{--            'selected' => isset($data) && $data->ward_id ? $data->ward->district_id : '',--}}
    {{--            'options' => arrayToOptions($districts, 'name', 'id'),--}}
    {{--        ],--}}
    {{--        [--}}
    {{--            'element' => 'select',--}}
    {{--            'col' => 6,--}}
    {{--            'name' => 'ward_id',--}}
    {{--            'label' => 'Phường/xã quản lý',--}}
    {{--            'placeholder' => 'Chọn phường/xã',--}}
    {{--            'options' => arrayToOptions($wards ?? [], 'name', 'id'),--}}
    {{--        ],--}}
    {{--    ],--}}
    {{--    'data' => $data ?? null--}}
    {{--])--}}
@endsection
