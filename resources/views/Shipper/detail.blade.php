@extends('.Shipper.layout.index')
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
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">Thông tin người nhận</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false">Trang thái đơn hàng</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact" aria-selected="false">Chi tiết đơn hàng</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                            <div class=" tab-pane fade show active" id="home" role="tabpanel"
                                 aria-labelledby="home-tab">
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
                                            <td>{{$order->createdAtFormatted()}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body">
                                    <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Border-Less</h5>
                                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Bonbon caramels muffin. Chocolate bar oat cake cookie pastry
                                                        dragée
                                                        pastry. Carrot cake
                                                        chocolate tootsie roll chocolate bar candy canes biscuit.
                                                        Gummies bonbon apple pie fruitcake icing biscuit apple pie
                                                        jelly-o sweet
                                                        roll. Toffee sugar
                                                        plum sugar plum jelly-o jujubes bonbon dessert carrot cake.
                                                        Cookie
                                                        dessert tart muffin topping
                                                        donut icing fruitcake. Sweet roll cotton candy dragée danish
                                                        Candy canes
                                                        chocolate bar cookie.
                                                        Gingerbread apple pie oat cake. Carrot cake fruitcake bear
                                                        claw. Pastry
                                                        gummi bears
                                                        marshmallow jelly-o.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <a type="button" class=" btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#border-less">
                                            huy don
                                        </a>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <form action="" method="post">
                                        @csrf
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
                                        <div>
                                            <button type="submit" class="btn btn-primary">Save</button>
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
                                            <td>{{$order->total_price}} ₫ ₫</td>
                                        </tr>
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
@section('script')
    <script>
        $('input:radio[name="choice"]').change(function () {
            if ($(this).val() === '0') {
                $('')
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        });
    </script>
@endsection
