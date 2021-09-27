@extends('.Shipper.layout.index')
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
                            <li class="breadcrumb-item"><a href="/shipper">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="row" id="table-hover-row">
                        <div class="col-12">
                            <div class="card widget-todo">
                                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h4 class="card-title d-flex">
                                        <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tasks
                                    </h4>
                                </div>
                                <div class="card-body px-0 py-1">
                                    <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                                        @foreach($notifications as $notification)
                                            <li class="widget-todo-item">
                                                <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                    <div class="widget-todo-title-area d-flex align-items-center">

                                                        <div class="checkbox checkbox-shadow">
                                                            <input disabled type="checkbox" class="form-check-input"  id="checkbox1" {{ $notification->the_send == true ? 'checked' :''}}>
                                                            <label for="checkbox1"></label>
                                                        </div>
                                                        <span class="widget-todo-title ml-50">{{$notification->message}}</span>
                                                    </div>
                                                    <div class="widget-todo-item-action d-flex align-items-center">
                                                        <div class="badge badge-pill badge-light-success me-1">frontend
                                                        </div>
                                                        <a href="{{$notification->link}}" class="btn btn-primary">Xem chi tiet</a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
