@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tài khoản người dùng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ( session()->has('status') )
                        <div
                            class="text-center alert alert-success alert-dismissable">{{ session()->get('status') }}</div>
                    @endif
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h1>Cảm ơn bạn đã đặt hàng</h1>
                                    <h4>Mã đơn hàng của bạn là: <a style="color: #89c74a" href="">{{$order->id}}</a>
                                    </h4>
                                    <h4>Chúng tôi đã gửi chi tiết của đơn hàng qua mail: <span
                                            style="color: #89c74a">thuandz01012002@gmmail.com</span></h4>
                                    <h4>Bạn có thế xem chi tiết đơn hàng trên web tại đây <span><a href=""
                                                                                                   data-toggle="modal"
                                                                                                   data-dismiss="modal"
                                                                                                   id="btn-add-to-cart"
                                                                                                   class="btn  btn--long btn--radius-tiny btn--green btn--green-hover-black btn--uppercase btn--weight m-r-20">Xem chi tiết</a></span>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

@endsection
