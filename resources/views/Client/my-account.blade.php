@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tài Khoản Người Dùng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="">
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
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="my-account-menu">
                                    <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab"
                                        role="tablist">
                                        <li>
                                            <a class="active link--icon-left" id="pills-dashboard-tab"
                                               data-toggle="pill" href="#pills-dashboard"
                                               role="tab" aria-controls="pills-dashboard" aria-selected="true"><i
                                                    class="fas fa-tachometer-alt"></i>Đơn hàng</a>
                                        </li>
                                        <li>
                                            <a id="pills-payment-tab" class="link--icon-left" data-toggle="pill"
                                               href="#pills-payment" role="tab"
                                               aria-controls="pills-payment" aria-selected="false"><i
                                                    class="fas fa-credit-card"></i>Thông báo</a>
                                        </li>
                                        <li>
                                            <a id="pills-address-tab" class="link--icon-left" data-toggle="pill"
                                               href="#pills-address" role="tab"
                                               aria-controls="pills-address" aria-selected="false"><i
                                                    class="fas fa-map-marker-alt"></i> Địa Chỉ</a>
                                        </li>
                                        <li>
                                            <a id="pills-account-tab" class="link--icon-left" data-toggle="pill"
                                               href="#pills-account" role="tab"
                                               aria-controls="pills-account" aria-selected="false"><i
                                                    class="fas fa-user"></i>
                                                Chi Tiết Người Dùng</a>
                                        </li>
                                        <li>
                                            <a class="link--icon-left" href="{{route('logout')}}"><i
                                                    class="fas fa-sign-out-alt"></i> Đăng Xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="tab-content my-account-tab" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                         aria-labelledby="pills-dashboard-tab">
                                        <div class="my-account-dashboard account-wrapper">

                                            <h4 class="account-title">Đơn hàng</h4>
                                        </div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Mã đơn hàng</th>
                                                <th scope="col">Gía trị</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Ngày tạo</th>
                                                <th scope="col">Chi Tiết</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($order)
                                                @foreach($order as $item)
                                                    <tr>
                                                        <th scope="row">{{$item->id}}</th>
                                                        <td>{{$item->total_price}}</td>
                                                        <td>{{$item->status}}</td>
                                                        <td>{{$item->created_at}}</td>
                                                        <td><a href="{{route('myOrder',$item->id)}}"
                                                               class="btn btn--small btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize"
                                                               tabindex="0">Xem
                                                                Thêm </a></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr class="odd">
                                                    <td colspan="5" class="dataTables_empty">Không có dư liệu nào
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                         aria-labelledby="pills-payment-tab">
                                        <div class="my-account-payment account-wrapper">
                                            <h4 class="account-title">Thông báo</h4>
                                        </div>
                                        <div class="account-table text-center table-responsive">
                                            <table class="table text-left">
                                                <thead>
                                                @foreach($notifications as $notification)
                                                    <tr>
                                                        <td>
                                                            @if($notification->the_send == 1)
                                                                <a href="{{$notification->link.'/'.$notification->id}}"
                                                                   class="btn btn btn--small btn--green-hover-black font--regular text-uppercase text-capitalizebtn-warning"
                                                                   style="background: wheat">{{$notification->message}} </a>
                                                            @else
                                                                <a href="{{$notification->link.'/'.$notification->id}}"
                                                                   class="btn btn btn--small btn--green-hover-black font--regular text-uppercase text-capitalizebtn-warning"
                                                                   style="background: #89c74a">{{$notification->message}} </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </thead>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                         aria-labelledby="pills-address-tab">
                                        <div class="my-account-address account-wrapper">
                                            <h4 class="account-title">Thông tin cá nhân</h4>
                                            <div class="account-address m-t-30">
                                                <table class="table text-left">
                                                    <tbody class="text-left">
                                                    <tr>
                                                        <th scope="col">Họ va tên</th>
                                                        <td>{{$user->first_name .' '.$user->last_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Địa chỉ</th>
                                                        <td>{{$user->district->name .', '.$user->ward->name.', '.$user->street}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Số điện thoại người nhận</th>

                                                        <td>{{$user->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Email</th>

                                                        <td>{{$user->email}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                         aria-labelledby="pills-account-tab">
                                        <div class="my-account-details account-wrapper">
                                            <h4 class="account-title">Thay đổi thông tin</h4>

                                            <div class="account-details">
                                                <div class="row">
                                                    <form method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="first-name-column">Tên đầu</label>
                                                                    <input type="text" id="first-name-column"
                                                                           class="form-control"
                                                                           placeholder="Nhập tên đầu"
                                                                           value="{{$user->first_name}}"
                                                                           name="first_name">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <label for="last-name-column">Họ</label>
                                                                    <input type="text" id="last-name-column"
                                                                           class="form-control"
                                                                           placeholder="Nhập họ"
                                                                           value="{{$user->last_name}}"
                                                                           name="last_name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="Phone">Số điện thoại</label>
                                                                    <input type="text" id="Phone"
                                                                           class="form-control"
                                                                           value="{{$user->phone}}"
                                                                           name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="sel1">Quận</label>
                                                                        <select class="form-control" id="sel1"
                                                                                name="district_id">
                                                                            <option selected disabled hidden>Chọn
                                                                            </option>
                                                                            @foreach($data as $district )
                                                                                <option
                                                                                    value="{{$district->maqh}}" {{$user->district_id ==$district->maqh ? 'selected':''  }} >{{$district->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12">
                                                                    <div class="form-group">
                                                                        <label for="Ward">Phường</label>
                                                                        <select class="form-control" id="Ward"
                                                                                name="ward_id">
                                                                            <option selected
                                                                                    value="{{$user->ward_id}}">{{$user->ward->name}}</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="Street">Đường & phố</label>
                                                                    <input type="text" id="Street" class="form-control"
                                                                           value="{{$user->street}}"
                                                                           name="street">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <h5 class="title">Đổi Mật Khẩu</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <input type="password_now"
                                                                           placeholder="Mật Khẩu Hiện Tại ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="password" name="password"
                                                                           placeholder="Mật Khẩu Mới">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="password_cf"
                                                                           placeholder="Xác Nhận Lại Mật Khẩu">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pt-4 text-center">
                                                            <button
                                                                class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold"
                                                                type="submit">Lưu thông tin
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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
@section('script')
    <script>
        const selectDistrict = $('select[name="district_id"]');
        const selectWard = $('select[name="ward_id"]');
        selectDistrict.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/' + selectDistrict.val(),
                beforeSend: function () {
                    selectWard.html('<option value hidden disabled selected></option>').prop('disabled', false);
                },
                success: function (data) {
                    data.forEach(item => selectWard.append(new Option(item.name, item.xaid)));
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
    </script>
@endsection


