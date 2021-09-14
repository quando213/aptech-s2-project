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
                            <li class="breadcrumb-item"><a href="/admin">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{route('userList')}}"><button class="btn btn-primary">Quay lại</button></a></h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="card mb-0">
                                            <div class="card-header p-0">
                                                <h4 class="card-title">Nhập thông tin</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Tên đầu</label>
                                                            <input type="text" id="first-name-column"
                                                                   class="form-control"
                                                                   placeholder="Nhập tên đầu"
                                                                   value="{{$data ? $data->first_name:''}}"
                                                                   name="first_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="last-name-column">Họ</label>
                                                            <input type="text" id="last-name-column"
                                                                   class="form-control"
                                                                   placeholder="Nhập họ"
                                                                   value="{{$data ? $data->last_name:''}}"
                                                                   name="last_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-column">Email</label>
                                                            <input type="email" id="email-id-column"
                                                                   class="form-control"
                                                                   name="email" value="{{$data ? $data->email:''}}"
                                                                   placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12" {{$data != null ?'hidden' : ''}}>
                                                        <div class="form-group">
                                                            <label for="company-Password">Mật khẩu</label>
                                                            <input type="password" id="company-Password"
                                                                   placeholder="Nhập mật khẩu"
                                                                   class="form-control"
                                                                   name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12" {{$data != null ?'hidden' : ''}}>
                                                        <div class="form-group">
                                                            <label for="company-Password">Nhập lại mật khẩu</label>
                                                            <input type="password" id="company-Password"
                                                                   class="form-control"
                                                                   placeholder="Nhập lại mật khẩu"
                                                                   name="company-Password">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Phone">Số điện thoại</label>
                                                            <input type="text" id="Phone"
                                                                   value="{{ $data ? $data->phone : '' }}"
                                                                   class="form-control"
                                                                   placeholder="Nhập số điện thoại"
                                                                   name="phone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-0">
                                            <div class="card-header p-0">
                                                <h4 class="card-title">Địa chỉ</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="sel1">Quận</label>
                                                            <select class="form-control" id="sel1" name="district_id">
                                                                <option selected disabled hidden>Chọn quận nơi bạn sinh sống</option>
                                                                @foreach($districts as $district )
                                                                    <option
                                                                        value="{{$district->maqh}}" {{ $data && number_format($data->district_id) == $district->maqh ? 'selected' :'' }} >{{$district->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Ward">Phường</label>
                                                            <select class="form-control" id="Ward" name="ward_id">
                                                                <option selected disabled hidden>Chọn phường nơi bạn sinh sống</option>
                                                                @if($data)
                                                                    <option selected
                                                                            value="{{$data->ward->xaid}}">{{$data->$ward->name}}</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="Street">Đường & phố</label>
                                                            <input type="text" id="Street" class="form-control"
                                                                   placeholder="Nhập đường & phố"
                                                                   value="{{$data ? $data->street:''}}" name="street">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header p-0">
                                                <h4 class="card-title">Vai trò</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Role">Vai trò</label>
                                                            <select class="form-control" name="role" id="Role">
                                                                <option selected disabled hidden>Chọn vai trò</option>
                                                                @foreach(\App\Enums\UserRole::getValues() as $type)
                                                                    <option value="{{$type}}" {{$data && $data->role === $type ? 'selected' : ''}}>{{\App\Enums\UserRole::getDescription($type)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Group">Nhóm</label>
                                                            <select class="form-control" name="group_id" id="Group">
                                                                <option selected disabled hidden>Chọn nhóm</option>
                                                                @foreach($group as $item)
                                                                    <option
                                                                        {{ $data && number_format($data->group_id) == $item->id ? 'selected' :'' }} value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="position">Chức vụ</label>
                                                            <input type="text" id="position" class="form-control"
                                                                   value="{{$data ? $data->position:''}}"
                                                                   placeholder="Nhập chức vụ"
                                                                   name="position">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">{{$data ? 'Save':'Submit'}}</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Tải lại trang
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
