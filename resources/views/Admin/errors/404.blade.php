@extends('Admin.layout.error')
@section('title', '404 Error')

@section('content')
    <div class="error-page container">
        <div class="col-md-8 col-12 offset-md-2">
            <img class="img-error" src="{{ asset('asset/images/samples/error-404.png') }}" alt="Not Found">
            <div class="text-center">
                <h1 class="error-title">NOT FOUND</h1>
                <p class='fs-5 text-gray-600'>Trang bạn đang tìm không tồn tại.</p>
                <a href="{{ route('adminDashboard') }}" class="btn btn-lg btn-outline-primary mt-3">Về trang chủ</a>
            </div>
        </div>
    </div>
@endsection
