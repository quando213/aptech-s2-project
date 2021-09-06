
@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Đăng Nhập</li>
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
                    <div class="section-content m-b-40">
                        <h5 class="section-content__title text-center">Tài Khoản Người Dùng</h5>
                    </div>
                </div>
                <!-- Start Login Area -->
                <div class="col-lg-6 col-12">
                    <div class="login-form-container">
                        <h5 class="sidebar__title">Đăng Nhập</h5>
                        <div class="login-register-form">
                            <form action="#" method="post">
                                <div class="form-box__single-group">
                                    <label for="form-username">Tên Người Dùng hoặc Địa Chỉ Email*</label>
                                    <input type="text" id="form-username" placeholder="Tên" required>
                                </div>
                                <div class="form-box__single-group">
                                    <label for="form-username-password">Mật Khẩu *</label>
                                    <div class="password__toggle">
                                        <input type="password" id="form-username-password" placeholder="Enter password" required>
                                        <span data-toggle="#form-username-password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                    <label for="account-remember">
                                        <input type="checkbox" name="account-remember" id="account-remember">
                                        <span>Nhớ Mật Khẩu</span>
                                    </label>
                                    <a class="link--gray" href="">Quên Mật Khẩu?</a>
                                </div>
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="login-form-container">
                        <h5 class="sidebar__title">Đăng Ký</h5>
                        <div class="login-register-form">
                            <form action="#" method="post">
                                <div class="form-box__single-group">
                                    <label for="form-register-username">Tên *</label>
                                    <input type="text" id="form-register-username" placeholder="Tên" required>
                                </div>
                                <div class="form-box__single-group">
                                    <label for="form-uregister-sername-email">Địa Chỉ Email *</label>
                                    <input type="email" id="form-uregister-sername-email" placeholder="Email" required>
                                </div>
                                <div class="form-box__single-group m-b-20">
                                    <label for="form-register-username-password">Mật Khẩu *</label>
                                    <div class="password__toggle">
                                        <input type="password" id="form-register-username-password" placeholder="Mật Khẩu" required>
                                        <span data-toggle="#form-register-username-password" class="password__toggle--btn fa fa-fw fa-eye"></span>
                                    </div>
                                </div>
                                <button class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">Đăng Ký</button>
                            </form>
                        </div>
                    </div>
                </div>  <!-- End Login Area -->
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection


