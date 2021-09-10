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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- :::::::::: Start My Account Section :::::::::: -->
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="my-account-menu">
                                    <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">
                                        <li>
                                            <a class="active link--icon-left" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard"
                                               role="tab" aria-controls="pills-dashboard" aria-selected="true"><i
                                                    class="fas fa-tachometer-alt"></i> Công Cụ</a>
                                        </li>
                                        <li>
                                            <a id="pills-order-tab" class="link--icon-left" data-toggle="pill" href="#pills-order" role="tab"
                                               aria-controls="pills-order" aria-selected="false"><i
                                                    class="fas fa-shopping-cart"></i> Đặt Hàng</a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a id="pills-download-tab" class="link--icon-left" data-toggle="pill" href="#pills-download" role="tab"--}}
{{--                                               aria-controls="pills-download" aria-selected="false"><i--}}
{{--                                                    class="fas fa-cloud-download-alt"></i> Download</a>--}}
{{--                                        </li>--}}
                                        <li>
                                            <a id="pills-payment-tab" class="link--icon-left" data-toggle="pill" href="#pills-payment" role="tab"
                                               aria-controls="pills-payment" aria-selected="false"><i
                                                    class="fas fa-credit-card"></i>Phương Thức Thanh Toám</a>
                                        </li>
                                        <li>
                                            <a id="pills-address-tab" class="link--icon-left" data-toggle="pill" href="#pills-address" role="tab"
                                               aria-controls="pills-address" aria-selected="false"><i
                                                    class="fas fa-map-marker-alt"></i> Địa Chỉ</a>
                                        </li>
                                        <li>
                                            <a id="pills-account-tab" class="link--icon-left" data-toggle="pill" href="#pills-account" role="tab"
                                               aria-controls="pills-account" aria-selected="false"><i class="fas fa-user"></i>
                                              Chi Tiết Người Dùng</a>
                                        </li>
                                        <li>
                                            <a class="link--icon-left" href="/login"><i class="fas fa-sign-out-alt"></i> Đăng Nhập</a>
                                        </li>
                                        <li>
                                            <a class="link--icon-left" href="/sign-up"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng Ký</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="tab-content my-account-tab" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                         aria-labelledby="pills-dashboard-tab">
                                        <div class="my-account-dashboard account-wrapper">
                                            <h4 class="account-title">Công Cụ</h4>
                                            <div class="welcome-dashboard m-t-30">
                                                <p>Xin Chào,
{{--                                                    <strong>You</strong> (If Not <strong>Tuntuni !</strong> <a--}}
{{--                                                        href="#">Logout</a> )--}}
                                                </p>
                                            </div>
                                            <p class="m-t-25">Từ trang tổng quan tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem các đơn đặt hàng gần đây, quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa mật khẩu và chi tiết tài khoản của mình.</p>
                                        </div>
                                    </div>
{{--                                    <div class="tab-pane fade" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">--}}
{{--                                        <div class="my-account-order account-wrapper">--}}
{{--                                            <h4 class="account-title">Đặt Hàng</h4>--}}
{{--                                            <div class="account-table text-center m-t-30 table-responsive">--}}
{{--                                                <table class="table">--}}
{{--                                                    <thead>--}}
{{--                                                    <tr>--}}
{{--                                                        <th class="no">No</th>--}}
{{--                                                        <th class="name">Name</th>--}}
{{--                                                        <th class="date">Date</th>--}}
{{--                                                        <th class="status">Status</th>--}}
{{--                                                        <th class="total">Total</th>--}}
{{--                                                        <th class="action">Action</th>--}}
{{--                                                    </tr>--}}
{{--                                                    </thead>--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>1</td>--}}
{{--                                                        <td>Mostarizing Oil</td>--}}
{{--                                                        <td>Aug 22, 2020</td>--}}
{{--                                                        <td>Pending</td>--}}
{{--                                                        <td>$100</td>--}}
{{--                                                        <td><a href="#">View</a></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>2</td>--}}
{{--                                                        <td>Katopeno Altuni</td>--}}
{{--                                                        <td>July 22, 2020</td>--}}
{{--                                                        <td>Approved</td>--}}
{{--                                                        <td>$45</td>--}}
{{--                                                        <td><a href="#">View</a></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>3</td>--}}
{{--                                                        <td>Murikhete Paris</td>--}}
{{--                                                        <td>June 22, 2020</td>--}}
{{--                                                        <td>On Hold</td>--}}
{{--                                                        <td>$99</td>--}}
{{--                                                        <td><a href="#">View</a></td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="tab-pane fade" id="pills-download" role="tabpanel"
                                         aria-labelledby="pills-download-tab">
                                        <div class="my-account-download account-wrapper">
                                            <h4 class="account-title">Công Cụ</h4>
                                            <div class="account-table text-center m-t-30 table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="name">Sản Phẩm</th>
                                                        <th class="date">Date</th>
                                                        <th class="status">Expire</th>
                                                        <th class="action">Download</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2020</td>
                                                        <td>Yes</td>
                                                        <td><a href="#">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Katopeno Altuni</td>
                                                        <td>July 22, 2020</td>
                                                        <td>Never</td>
                                                        <td><a href="#">Download File</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                         aria-labelledby="pills-payment-tab">
                                        <div class="my-account-payment account-wrapper">
                                            <h4 class="account-title">Phương Thức Thanh Toán</h4>
                                            <p class="m-t-30">Bạn chưa thể lưu Phương thức thanh toán của mình.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                         aria-labelledby="pills-address-tab">
                                        <div class="my-account-address account-wrapper">
                                            <h4 class="account-title">Phương Thức thang Toán</h4>
                                            <div class="account-address m-t-30">
                                                <h6 class="name">Dương CHinh</h6>
                                                <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                                <p>SĐT: 0987654321</p>
                                                <a class="box-btn m-t-25 " href="#"><i class="far fa-edit"></i> Sửa Địa Chỉ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                         aria-labelledby="pills-account-tab">
                                        <div class="my-account-details account-wrapper">
                                            <h4 class="account-title">Chi Tiết Tài Khoản</h4>

                                            <div class="account-details">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <input type="text" placeholder="Họ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <input type="text" placeholder="Tên">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <input type="text" placeholder="Tên Đệm">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <h5 class="title">Đổi Mật Khẩu</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <input type="password" placeholder="Mật Khẩu Hiện Tại ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <input type="password" placeholder="Mật Khẩu Mới">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <input type="password" placeholder="Xác Nhận Lại Mật Khẩu">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <button class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold">Lưu Thay Đổi</button>
                                                        </div>
                                                    </div>
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


