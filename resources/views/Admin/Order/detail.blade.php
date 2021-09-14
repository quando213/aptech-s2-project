@extends('.Admin.layout.index')
@section('title')
    Admin Dashboard - {{$title}}
@endsection
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                    @if ( session()->has('message') )
                        <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                    @endif
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{route('comboCreate')}}">Add Combo</a></h4>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin người nhận</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Trang thái đơn hàng</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Chi tiết đơn hàng</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class=" tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
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
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body">
                                    <form action="">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sel1">Trang thái</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sel1">Người gửi</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
                                                <td class="text-bold-500"><img src="{{$orderDetail->product->thumbnail}}" alt=""
                                                                               width="100" height="100"></td>
                                                <th scope="col">{{$orderDetail->product->name}}</th>
                                                <th scope="col">{{$orderDetail->product->price}}</th>
                                                <th scope="col">{{$orderDetail->quantity}}</th>
                                                <th scope="col">{{$orderDetail->unit_price}}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
