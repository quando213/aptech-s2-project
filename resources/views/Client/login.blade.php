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
                    @if(session()->get('status'))
                        <h2 style="padding-left:100px;color: #89c74a">{{ session()->get( 'status' ) }}</h2>
                    @endif
                </div>
                <!-- Start Login Area -->
                <div class="col-lg-6 col-12">
                    <div class="login-form-container">
                        <h5 class="sidebar__title">Đăng Nhập</h5>
                        @if(session('error-login'))
                            <div class="text-danger" style="font-weight: bold; margin-bottom: 10px;">
                                {{session('error-login')}}
                            </div>
                        @endif
                        <div class="login-register-form">
                            <form action="{{route('processLogin')}}" method="post">
                                @csrf
                                <div class="form-box__single-group">
                                    <label for="form-username">Địa Chỉ Email*</label>
                                    <input type="text" id="form-username" name="email" placeholder="Tên" required>
                                </div>
                                <div class="form-box__single-group">
                                    <label for="form-username-password">Mật Khẩu *</label>
                                    <div class="password__toggle">
                                        <input type="password" id="form-username-password" name="password" placeholder="Enter password"
                                               required>
                                        <span data-toggle="#form-username-password"
                                              class="password__toggle--btn fa fa-fw fa-eye"></span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                    <label for="account-remember">
                                        <input type="checkbox" name="account-remember" id="account-remember">
                                        <span>Nhớ Mật Khẩu</span>
                                    </label>
                                </div>
                                <button
                                    class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold"
                                    type="submit">LOGIN
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="login-form-container">
                        <h5 class="sidebar__title">Đăng Ký</h5>
                        <div class="login-register-form">
                            <form action="{{route('processRegister')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tên đầu</label>
                                            <input type="text" id="first-name-column"
                                                   class="form-control"
                                                   placeholder="Nhập tên đầu"
                                                   name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Họ</label>
                                            <input type="text" id="last-name-column"
                                                   class="form-control"
                                                   placeholder="Nhập họ"
                                                   name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Email</label>
                                        <input type="email" id="email-id-column"
                                               class="form-control"
                                               name="email"
                                               placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-Password">Mật khẩu</label>
                                            <input type="password" id="company-Password"
                                                   class="form-control"
                                                   name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-Password">Nhập lại mật khẩu</label>
                                            <input type="password" id="company-Password"
                                                   class="form-control"
                                                   name="company-Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Phone">Số điện thoại</label>
                                            <input type="text" id="Phone"
                                                   class="form-control"
                                                   name="phone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sel1">Quận</label>
                                                <select class="form-control" id="sel1" name="district_id">
                                                    <option selected disabled hidden>Chọn</option>
                                                    @foreach($data as $district )
                                                        <option
                                                            value="{{$district->maqh}}" >{{$district->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="Ward">Phường</label>
                                                <select class="form-control" id="Ward" name="ward_id">
                                                    <option selected disabled hidden>Chọn</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="Street">Đường & phố</label>
                                            <input type="text" id="Street" class="form-control"
                                                    name="street">
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4 text-center">
                                    <button  class="btn btn--box btn--medium btn--radius btn--black btn--black-hover-green btn--uppercase font--semi-bold" type="submit">Đăng Ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  <!-- End Login Area -->
            </div>
        </div>
    </main>

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



