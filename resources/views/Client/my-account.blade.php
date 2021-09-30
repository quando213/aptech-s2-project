@extends('Client.layout.index')
@section('content')
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
                                            <a class="{{ !session()->has('tab') || session()->get('tab') == 'dashboard' ? 'active' : '' }} link--icon-left" id="pills-dashboard-tab"
                                               data-toggle="pill" href="#pills-dashboard"
                                               role="tab" aria-controls="pills-dashboard" aria-selected="true"><i
                                                    class="fas fa-tachometer-alt"></i>Đơn hàng</a>
                                        </li>
                                        <li>
                                            <a id="pills-notifications-tab" class="{{ session()->has('tab') && session()->get('tab') == 'notifications' ? 'active' : '' }} link--icon-left" data-toggle="pill"
                                               href="#pills-notifications" role="tab"
                                               aria-controls="pills-notifications" aria-selected="false"><i
                                                    class="fas fa-alarm-exclamation"></i>Thông báo</a>
                                        </li>
                                        <li>
                                            <a id="pills-account-tab" class="{{ session()->has('tab') && session()->get('tab') == 'account' ? 'active' : '' }} link--icon-left" data-toggle="pill"
                                               href="#pills-account" role="tab"
                                               aria-controls="pills-account" aria-selected="false"><i
                                                    class="fas fa-user"></i>
                                                Thông tin cá nhân</a>
                                        </li>
                                        <li>
                                            <a class="link--icon-left" href="{{route('logout')}}"><i
                                                    class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="tab-content my-account-tab" id="pills-tabContent">
                                    <div class="tab-pane fade {{ !session()->has('tab') || session()->get('tab') == 'dashboard' ? 'show active' : '' }}" id="pills-dashboard" role="tabpanel"
                                         aria-labelledby="pills-dashboard-tab">
                                        <div class="my-account-dashboard account-wrapper">
                                            <h4 class="account-title">Đơn hàng</h4>
                                        </div>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Mã đơn hàng</th>
                                                <th scope="col">Giá trị</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Ngày tạo</th>
                                                <th scope="col">Chi tiết</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(sizeof($order))
                                                @foreach($order as $item)
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{number_format($item->total_price)}}</td>
                                                        <td>{{\App\Enums\OrderStatus::getDescription($item->status)}}</td>
                                                        <td>{{$item->createdAtFormatted()}}</td>
                                                        <td><a href="{{route('myOrderDetail',$item->id)}}"
                                                               class="btn btn--tiny btn--radius btn--green btn--green-hover-black font--regular text-uppercase text-capitalize"
                                                               tabindex="0">Xem thêm</a></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr class="odd">
                                                    <td colspan="5" class="dataTables_empty">Bạn chưa tạo đơn hàng nào.
                                                    </td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade {{ session()->has('tab') && session()->get('tab') == 'notifications' ? 'active' : '' }}" id="pills-notifications" role="tabpanel">
                                        <div class="my-account-notifications account-wrapper">
                                            <h4 class="account-title">Thông báo <i class="bi bi-power"></i></h4>
                                        </div>
                                        <div class="list-group">
                                            @foreach($notifications as $notification)
                                                <a href="{{ $notification->custom_url ?? ($notification->order_id ? route('myOrderDetail', $notification->order_id) : 'javascript:void(0)') }}"
                                                   class="list-group-item list-group-item-action px-3"
                                                   style="background-color: {{ $notification->is_seen ? 'inherit' : '#deffbc' }};"
                                                >
                                                    @if(!$notification->is_seen)
                                                        <i class="fa fa-star"></i>
                                                    @endif
                                                    {{$notification->message}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade {{ session()->has('tab') && session()->get('tab') == 'account' ? 'active' : '' }}" id="pills-account" role="tabpanel"
                                         aria-labelledby="pills-account-tab">
                                        <div class="my-account-details account-wrapper">
                                            <h4 class="account-title">Thay đổi thông tin</h4>

                                            <div class="account-details">
                                                <div class="row">
                                                    <form method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="text" name="last_name"
                                                                           value="{{$user->last_name}}"
                                                                           placeholder="Nhập họ">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="text" name="first_name"
                                                                           value="{{$user->first_name}}"
                                                                           placeholder="Nhập tên">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <select class="form-control" id="sel1"
                                                                            name="district_id">
                                                                        <option selected disabled hidden>Chọn
                                                                        </option>
                                                                        @foreach($districts as $district)
                                                                            <option
                                                                                value="{{$district->id}}" {{$user->district_id ==$district->maqh ? 'selected':''  }} >{{$district->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <select class="form-control" id="Ward"
                                                                            name="ward_id">
                                                                        @if($user)
                                                                            @foreach($user->district->wards as $ward)
                                                                                <option value="{{ $ward->id }}" {{ $user && $user->ward_id ==  $ward->id ? 'selected' : '' }}>{{ $ward->name }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="text" name="street"
                                                                           value="{{$user->street}}"
                                                                           placeholder="Nhập số nhà và đường">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="text" name="phone"
                                                                           value="{{$user->phone}}"
                                                                           placeholder="Nhập số điện thoại">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <h5 class="title">Đổi mật khẩu</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <input type="password" name="current_password"
                                                                           placeholder="Nhập mật khẩu hiện tại">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="password" name="password"
                                                                           placeholder="Nhập mật khẩu mới">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <input type="password" name="password_confirmation"
                                                                           placeholder="Xác nhận mật khẩu mới">
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
                    data.forEach(item => selectWard.append(new Option(item.name, item.id)));
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
    </script>

    <script>
        function readNotifications() {
            axios.get('{{ route("readNotifications") }}');
        }

        @if(session()->has('tab') && session()->get('tab') == 'notifications')
            readNotifications();
        @endif

        $('#pills-notifications-tab').click(readNotifications());
    </script>
@endsection


