@extends('Admin.layout.index')
@section('title')
    Hồ sơ cá nhân
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Chứng minh quân nhân</th>
                                <td>012345678</td>
                            </tr>
                            <tr>
                                <th>Họ tên</th>
                                <td>{{$data->getFullName()}}</td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>{{$data->getFullAddress()}}</td>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Chức vụ</th>
                                <td>{{ $data->position }}</td>
                            </tr>
                            <tr>
                                <th>Nhóm</th>
                                <td>{{ $data->group->name }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
