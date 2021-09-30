@extends('Admin.layout.master')
@section('main')
    <div id="app">
        @include('Admin.layout.components.menu')
        <div id="main">
            @include('Admin.layout.components.header')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                            <h3>
                                @if(isset($back_href))
                                    <a href="{{ $back_href }}" style="margin-right: 10px; vertical-align: middle;">
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                @endif
                                @yield('title')
                                @if(isset($create_href))
                                    <a href="{{ $create_href }}" class="btn btn-primary" style="margin-left: 10px;">
                                        {{ $create_label ?? 'Thêm mới' }}
                                    </a>
                                @endif
                            </h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Trang chủ</a></li>
                                    @if(isset($back_href))
                                        <li class="breadcrumb-item"><a href="{{ $back_href }}">Quản lý</a></li>
                                    @endif
                                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    @if ( session()->has('message') )
                        <div class="alert alert-success alert-dismissible show fade">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show fade">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <section>
                    @yield('content')
                </section>
            </div>
            @include('Admin.layout.components.footer')
        </div>
    </div>
@endsection
