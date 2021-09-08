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
                            <h4 class="card-title"><a href="{{route('categoryList')}}"><button class="btn btn-primary">Quay lại</button></a></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name">Tên sản phẩm</label>
                                                <input type="text" id="name" class="form-control"
                                                       name="name" value="{{$data ? $data->name:''}}" placeholder="Nhập tên sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="description">Miêu tả sản phẩm</label>
                                                <input type="text" id="description" class="form-control"
                                                       name="description" value="{{$data ? $data->description:''}}" placeholder="Nhập miêu tả sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="sort_number">Số thứ tự</label>
                                                <input type="number" id="sort_number" class="form-control"
                                                       name="sort_number" value="{{$data ? $data->sort_number:''}}" placeholder="Nhập số thứ tự sản phẩm">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">{{$data ? 'Save':'Submit'}}</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
