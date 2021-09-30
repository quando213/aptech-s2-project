@extends('Admin.layout.master')
@section('main')
    <div id="error">
        @yield('content')
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/css/pages/error.css') }}">
@endsection
