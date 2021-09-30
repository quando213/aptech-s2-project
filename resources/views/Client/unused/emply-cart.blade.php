@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Giỏ Hàng Rỗng</li>
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
                    <div class="section-content">
                        <h5 class="section-content__title">Giỏ Hàng Của Bạn</h5>
                    </div>
                    <div class="empty-cart m-t-40 text-center">
                        <div class="empty-cart-icon title--large"><i class="fal fa-shopping-cart"></i></div>
                        <h3 class="title title--normal title--thin m-tb-30">Không Có Sản Phẩm Nào Trong Giỏ Hàng</h3>
                        <a href="/" class="btn btn--box btn--large btn--radius btn--green btn--green-hover-black btn--uppercase font--semi-bold m-t-20">Tiếp Tực Mua Sắm</a>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
@section('moddal')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

@endsection

