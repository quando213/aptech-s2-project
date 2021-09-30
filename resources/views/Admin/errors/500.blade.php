@extends('Admin.layout.error')
@section('title', '500 Error')

@section('content')
    <div class="error-page container">
        <div class="col-md-8 col-12 offset-md-2">
            <img class="img-error" src="{{ asset('asset/images/samples/error-500.png') }}" alt="Not Found">
            <div class="text-center">
                <h1 class="error-title">Lỗi hệ thống</h1>
                <p class="fs-5 text-gray-600">Vui lòng thử lại hoặc liên hệ với quản trị viên.</p>
                <a href="{{ route('adminDashboard') }}" class="btn btn-lg btn-outline-primary mt-3">Về trang chủ</a>
            </div>
        </div>
    </div>
@endsection
