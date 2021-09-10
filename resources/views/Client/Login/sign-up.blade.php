@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Đăng Ký</li>
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
                <div class="col-lg-6 col-12">
                    <div class="login-form-container">
                        <h5 class="sidebar__title">Đăng Ký</h5>
                        <div class="login-register-form">
                            @if ( session()->has('message') )
                                <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                            @endif
                            <form method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-box__single-group">
                                            <label for="form-register-username">Tên *</label>
                                            <input type="text" id="form-register-username" name="first_name"
                                                   placeholder="Tên"
                                            value="">
                                            @error('first_name')
                                            <div class="error-message alert-danger">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-box__single-group">
                                            <label for="form-register-username">Họ *</label>
                                            <input type="text" id="form-register-username" name="last_name"
                                                   placeholder="Họ">
                                            @error('last_name')
                                            <div class="error-message alert-danger">
                                                *{{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-box__single-group">
                                            <label for="form-uregister-sername-email">Email *</label>
                                            <input type="email" id="form-uregister-sername-email"
                                                   name="email" placeholder="Email">
                                            @error('email')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-box__single-group m-b-20">
                                            <label for="form-register-username-password">Mật Khẩu *</label>
                                            <div class="password__toggle">
                                                <input type="password" id="form-register-username-password"
                                                       name="password" placeholder="Mật Khẩu">

                                                <span data-toggle="#form-register-username-password"
                                                      class="password__toggle--btn fa fa-fw fa-eye"></span>
                                            </div>
                                            @error('password')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-box__single-group m-b-20">
                                            <label for="form-register-username-password">Nhập lại mật khẩu *</label>
                                            <div class="password__toggle">
                                                <input type="password" id="form-register-username-password"
                                                       name="confirmpassword" placeholder="Nhập Lại Mật Khẩu">
                                                <span data-toggle="#form-register-username-password"
                                                      class="password__toggle--btn fa fa-fw fa-eye"></span>
                                            </div>
                                            @error('confirmpassword')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-box__single-group">
                                            <label for="form-uregister-sername-email">Số Điện Thoại *</label>
                                            <input type="text" id="phone" placeholder="Số điện thoại" name="phone">
                                            @error('phone')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-box__single-group">
                                            <label for="District">Quận *</label>
                                            <select class="form-control" id="sel1" name="district_id">
                                                <option selected disabled hidden>-</option>
                                                @foreach($districts as $district )
                                                    <option
                                                        value="{{$district->maqh}}"  >{{$district->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('district_id')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-box__single-group m-b-20">
                                            <label for="ward">Phường *</label>
                                            <select class="form-control" id="Ward" name="ward_id">
                                                <option selected disabled hidden>-</option>
                                            </select>
                                            @error('ward_id')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" col-12">
                                        <div class="form-box__single-group m-b-20">
                                            <label for="Street">Phố *</label>
                                            <div class="password__toggle">
                                                <input type="text"
                                                       id="street"
                                                       placeholder="Phố"
                                                       name="street"
                                                       value="">
                                            </div>
                                            @error('street')
                                            <div class="error-message alert-danger ">
                                                *{{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-3 text-center">
                                    <button
                                        class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold"
                                        type="submit">Đăng Ký
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  <!-- End Login Area -->
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




