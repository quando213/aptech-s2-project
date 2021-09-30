@extends('Client.layout.index')
@section('title', '404')

@section('content')
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                    <div class="error-section-top text-center">
                        <h1>404</h1>
                        <h4 class="m-b-20">OOOPS! LỖI 404</h4>
                        <h5 class="font--light">Trang bạn đang tìm không tồn tại!</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
                    <div class="page-not-found text-center">
                        <a href="{{route('home')}}" class="btn btn--icon-left btn--small btn--radius-tiny btn--green btn--green-hover-black font--bold text-capitalize m-t-20">VỀ TRANG CHỦ</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
