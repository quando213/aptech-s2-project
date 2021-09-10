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
                            @if ( session()->has('message') )
                                <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                            @endif
                            @if( session()->has('login-error'))
                                    <div class="alert alert-danger alert-dismissable">{{ session()->get('login-error') }}</div>
                                @endif
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-box__single-group">
                                    <label>Email*</label>
                                    <input type="email" id="form-email" placeholder="Email" class="form-control"
                                           name="email">
                                    @error('email')
                                    <div class="error-message alert-danger alert-dismissible">*{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-box__single-group">
                                    <label for="form-username-password">Mật Khẩu *</label>
                                    <div class="password__toggle">
                                        <input type="password" id="form-username-password" placeholder="Mật Khẩu"
                                               value="" name="password">

                                        <span data-toggle="#form-username-password"
                                              class="password__toggle--btn fa fa-fw fa-eye"></span>
                                    </div>
                                    @error('password')
                                    <div class="error-message alert-danger alert-dismissible">*{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12 pt-3 text-center">
                                    <button
                                        class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold"
                                        name="btn-submit" type="submit">Đăng Nhập
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection


