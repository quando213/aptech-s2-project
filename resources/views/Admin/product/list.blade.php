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
        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{route('productCreate')}}">
                                    <button class="btn btn-primary">Thêm mới sản phẩm</button>
                                </a></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-lg">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Ảnh sản phẩm</th>
                                            <th>Đơn vị</th>
                                            <th>Hàng có trong kho</th>
                                            <th>Khối lượng</th>
                                            <th>Nguồn gốc xuất sứ</th>
                                            <th>Thương hiệu</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        @if($data && sizeof($data) > 0)
                                            <tbody>
                                            @foreach($data as $item)
                                                <div class="modal fade" id="delete{{$item->id}}" tabindex="-1"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal
                                                                    title</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Bạn có chắc muốn xóa gói sản phẩm này
                                                                    không? {{$item->name}}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Hủy
                                                                </button>
                                                                <a href="{{route('productDelete', $item->id)}}"
                                                                   class="btn btn-primary">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <tr>
                                                    <td class="text-bold-500">{{$item->name}}</td>
                                                    <td>{{number_format($item->price)}}</td>
                                                    <td class="text-bold-500"><img src="{{$item->thumbnail}}" alt=""
                                                                                   width="100" height="100"></td>
                                                    <td class="text-bold-500">{{$item->category->name}}</td>
                                                    <td class="text-bold-500">{{$item->stock}}</td>
                                                    <td class="text-bold-500">{{$item->quantity." \ ". \App\Enums\ProductUnit::getDescription($item->unit)}}</td>
                                                    <td class="text-bold-500">{{$item->origin}}</td>
                                                    <td class="text-bold-500">{{$item->brand}}</td>
                                                    <td>
                                                        <a href="{{route('productUpdate',$item->id)}}" type="button"
                                                           class="btn btn-primary">Sửa</a>
                                                        <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                           data-bs-target="#delete{{$item->id}}">Xóa</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tbody>
                                            <tr class="odd">
                                                <td colspan="10" class="dataTables_empty">Không có dư liệu nào
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endif
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
