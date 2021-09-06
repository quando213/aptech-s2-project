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
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{route('userCreate')}}">Tạo mới người dùng</a></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="myTable" class="table table-lg">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>Họ & tên</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Tập đoàn</th>
                                            <th>Số điện thoại</th>
                                            <th>Vai trò</th>
                                            <th>Chức vụ</th>
                                            <th>Trạng thái</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this User {{$item->first_name . ' '. $item->last_name}}?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a href="{{route('userDelete', $item->id)}}"
                                                               class="btn btn-primary">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <tr>
                                                <td class="text-bold-500">{{$item->first_name . ' '. $item->last_name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td class="text-bold-500">{{$item->district->name . ', '. $item->ward->name . ', '. $item->street}}</td>
                                                <td class="text-bold-500">{{$item->group->name}}</td>
                                                <td class="text-bold-500">{{$item->phone}}</td>
                                                <td class="text-bold-500">{{\App\Enums\UserRole::getDescription($item->role)}}</td>
                                                <td class="text-bold-500">{{$item->position}}</td>
                                                <td>
                                                    <a href="{{route('userUpdate',$item->id)}}" type="button" class="btn btn-primary">Edit</a>
                                                    <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">Delete</a>
                                                </td>
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
        </section>
    </div>
@endsection
