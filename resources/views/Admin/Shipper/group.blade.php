@extends('Admin.layout.index')
@section('title')
    Nhóm của tôi
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin nhóm</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Tên nhóm</th>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th>Địa bàn phụ trách</th>
                                <td>{{ $data->ward->name }}, {{ $data->ward->district->name }}</td>
                            </tr>
                            <tr>
                                <th>Số thành viên</th>
                                <td>{{ sizeof($data->users) }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Danh sách quân nhân</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-lg">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Chức vụ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data->users as $item)
                                    <tr>
                                        <td>{{$item->getFullName()}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->getFullAddress()}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->position}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
