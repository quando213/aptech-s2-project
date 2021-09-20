@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang Chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tiến Hành Thanh Toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                    <div class="section-content text-danger pb-3" id="text-danger">
{{--                        <h5 class=" text-danger" >Hiên khu vựng {{$data->ward->name}} của bạn không có đơn vị vân chuyển nào vui lòng chọn khu vưc khác hoặc qoay lại sau </h5>--}}
                    </div>
                <div class="col-lg-7 pt-3">
                    <div class="section-content">
                        <h5 class="section-content__title">Chi Tiết Thanh Toán</h5>
                    </div>

                    <form method="post" class="form-box" id="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-first-name">Tên</label>
                                    <input type="text" name="shipping_name"
                                           value="{{$data ? $data->first_name .' '.$data->last_name :''}}"
                                           id="form-first-name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-box__single-group">
                                    <label for="sel1">Quận</label>
                                    <select class="form-control" id="sel1" name="shipping_district_id">
                                        <option selected disabled hidden>Chọn</option>
                                        @foreach($districts as $district )
                                            <option
                                                value="{{$district->maqh}}" {{ $data && number_format($data->district_id) == $district->maqh ? 'selected' :'' }} >{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class=" form-box__single-group">
                                    <label for="Ward">Phường</label>
                                    <select class="form-control" id="Ward" name="shipping_ward_id">
                                        <option selected disabled hidden>Chọn</option>
                                        @if($data)
                                            <option selected
                                                    value="{{$data->ward->xaid}}">{{$data->ward->name}}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-address-1">Đường</label>
                                    <input type="text" name="shipping_street" id="form-address-1"
                                           value="{{$data->street}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-phone">Số Điện Thoại</label>
                                    <input type="text" name="shipping_phone" value="{{$data->phone}}" id="form-phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="bankcode">Ngân hàng</label>
                                    <select name="bankcode" id="bankcode" class="form-control">
                                        <option value="">Không chọn</option>
                                        <option value="VNPAYQR">VNPAYQR</option>
                                        <option value="VNBANK">LOCAL BANK</option>
                                        <option value="IB">INTERNET BANKING</option>
                                        <option value="ATM">ATM CARD</option>
                                        <option value="INTCARD">INTERNATIONAL CARD</option>
                                        <option value="VISA">VISA</option>
                                        <option value="MASTERCARD"> MASTERCARD</option>
                                        <option value="JCB">JCB</option>
                                        <option value="UPI">UPI</option>
                                        <option value="VIB">VIB</option>
                                        <option value="VIETCAPITALBANK">VIETCAPITALBANK</option>
                                        <option value="SCB">Ngan hang SCB</option>
                                        <option value="NCB">Ngan hang NCB</option>
                                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                                        <option value="EXIMBANK">Ngan hang EximBank</option>
                                        <option value="MSBANK">Ngan hang MSBANK</option>
                                        <option value="NAMABANK">Ngan hang NamABank</option>
                                        <option value="VNMART"> Vi dien tu VnMart</option>
                                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                        <option value="VIETCOMBANK">Ngan hang VCB</option>
                                        <option value="HDBANK">Ngan hang HDBank</option>
                                        <option value="DONGABANK">Ngan hang Dong A</option>
                                        <option value="TPBANK">Ngân hàng TPBank</option>
                                        <option value="OJB">Ngân hàng OceanBank</option>
                                        <option value="BIDV">Ngân hàng BIDV</option>
                                        <option value="TECHCOMBANK">Ngân hàng Techcombank</option>
                                        <option value="VPBANK">Ngan hang VPBank</option>
                                        <option value="AGRIBANK">Ngan hang Agribank</option>
                                        <option value="MBBANK">Ngan hang MBBank</option>
                                        <option value="ACB">Ngan hang ACB</option>
                                        <option value="OCB">Ngan hang OCB</option>
                                        <option value="IVB">Ngan hang IVB</option>
                                        <option value="SHB">Ngan hang SHB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <h6>Thông Tin Thêm</h6>
                                    <label for="form-additional-info">Ghi Chú</label>
                                    <textarea name="node" id="form-additional-info" rows="5"
                                              placeholder="Ghi Chú."></textarea>
                                </div>
                            </div>

                            <!-- Add Another Shipping Address -->
                            {{--                            <div class="col-md-12">--}}
                            {{--                                <div class="m-tb-20">--}}
                            {{--                                    <label for="shipping-account">--}}
                            {{--                                        <input type="checkbox" name="check-account" class="shipping-account"  id="shipping-account">--}}
                            {{--                                        <span>Gủi Đến Địa Chỉ Khác?</span>--}}
                            {{--                                    </label>--}}
                            {{--                                    <div class="toogle-form open-shipping-account">--}}
                            {{--                                        <div class="row">--}}
                            {{--                                            <div class="col-md-6">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-first-name">Tên</label>--}}
                            {{--                                                    <input type="text" id="shipping-form-first-name">--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-6">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-last-name">Họ</label>--}}
                            {{--                                                    <input type="text" id="shipping-form-last-name">--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-12">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-country">* Thành Phố</label>--}}
                            {{--                                                    <select id="shipping-form-country">--}}
                            {{--                                                        <option value="select-country" selected>Select a country</option>--}}
                            {{--                                                        <option value="BD">Bangladesh</option>--}}
                            {{--                                                        <option value="US">USA</option>--}}
                            {{--                                                        <option value="UK">UK</option>--}}
                            {{--                                                        <option value="TR">Turkey</option>--}}
                            {{--                                                        <option value="CA">Canada</option>--}}
                            {{--                                                    </select>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-12">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-address-1">Sôa Nhà </label>--}}
                            {{--                                                    <input type="text" id="shipping-form-address-1" placeholder="Số Nhà Và Tên Đường">--}}
                            {{--                                                    <input type="text" class="m-t-10" id="shipping-form-address-2" placeholder="Apartment, suite, unit etc.">--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-6">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-state">* Quận</label>--}}
                            {{--                                                    <select id="shipping-form-state">--}}
                            {{--                                                        <option value="Dha" selected>Dhaka</option>--}}
                            {{--                                                        <option value="Kha">Khulna</option>--}}
                            {{--                                                        <option value="Raj">Rajshahi</option>--}}
                            {{--                                                        <option value="Syl">Sylet</option>--}}
                            {{--                                                        <option value="Chi">Chittagong</option>--}}
                            {{--                                                    </select>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-6">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-zipcode">* Phường</label>--}}
                            {{--                                                    <input type="text" id="shipping-form-zipcode">--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-6">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-phone">SĐT</label>--}}
                            {{--                                                    <input type="text" id="shipping-form-phone">--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="col-md-6">--}}
                            {{--                                                <div class="form-box__single-group">--}}
                            {{--                                                    <label for="shipping-form-email">Địa Chỉ Email</label>--}}
                            {{--                                                    <input type="email" id="shipping-form-email">--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>  <!-- End Another Shipping Address -->--}}
                        </div>
                    </form>
                </div> <!-- End Client Shipping Address -->

                <!-- Start Order Wrapper -->
                <div class="col-lg-5 pt-3">
                    <div class="your-order-section">
                        <div class="section-content">
                            <h5 class="section-content__title">Dơn Hàng Của Bạn</h5>
                        </div>
                        <div class="your-order-box gray-bg m-t-40 m-b-30">
                            <div class="your-order-product-info">
                                <div class="your-order-top d-flex justify-content-between">
                                    <h6 class="your-order-top-left font--bold">Sản Phẩm</h6>
                                    <h6 class="your-order-top-right font--bold">tổng</h6>
                                </div>
                                <ul class="your-order-middle">
                                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                        <li class="d-flex justify-content-between">
                                            <span
                                                class="your-order-middle-left font--semi-bold">{{$item->name}}  X {{$item->qty}}</span>
                                            <span
                                                class="your-order-middle-right font--semi-bold">{{$item->subtotal(0)}}</span>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="your-order-bottom d-flex justify-content-between">
                                    <h6 class="your-order-bottom-left font--bold">Vận Đơn</h6>
                                    <span class="your-order-bottom-right font--semi-bold">Miễn Phí Vận Chuyển</span>
                                </div>
                                <div class="your-order-total d-flex justify-content-between">
                                    <h5 class="your-order-total-left font--bold">Tổng</h5>
                                    <h5 class="your-order-total-right font--bold">{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}}</h5>
                                </div>

                                {{--                                <div class="payment-method">--}}
                                {{--                                    <div class="payment-accordion element-mrg">--}}
                                {{--                                        <div class="panel-group" id="accordion">--}}
                                {{--                                            <div class="panel payment-accordion">--}}
                                {{--                                                <div class="panel-heading" id="method-one">--}}
                                {{--                                                    <h4 class="panel-title">--}}
                                {{--                                                        <a class="collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-parent="#accordion" href="#method1" aria-expanded="false">--}}
                                {{--                                                            Chuyển Khoản <i class="far fa-chevron-down"></i>--}}
                                {{--                                                        </a>--}}
                                {{--                                                    </h4>--}}
                                {{--                                                </div>--}}
                                {{--                                                <div id="method1" class="panel-collapse collapse">--}}
                                {{--                                                    <div class="panel-body">--}}
                                {{--                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="panel payment-accordion">--}}
                                {{--                                                <div class="panel-heading" id="method-two">--}}
                                {{--                                                    <h4 class="panel-title">--}}
                                {{--                                                        <a class="collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-parent="#accordion" href="#method2" aria-expanded="false">--}}
                                {{--                                                            Check payments <i class="far fa-chevron-down"></i>--}}
                                {{--                                                        </a>--}}
                                {{--                                                    </h4>--}}
                                {{--                                                </div>--}}
                                {{--                                                <div id="method2" class="panel-collapse collapse" >--}}
                                {{--                                                    <div class="panel-body">--}}
                                {{--                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="panel payment-accordion">--}}
                                {{--                                                <div class="panel-heading" id="method-three">--}}
                                {{--                                                    <h4 class="panel-title">--}}
                                {{--                                                        <a class="collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-parent="#accordion" href="#method3" aria-expanded="false">--}}
                                {{--                                                            Cash on delivery <i class="far fa-chevron-down"></i>--}}
                                {{--                                                        </a>--}}
                                {{--                                                    </h4>--}}
                                {{--                                                </div>--}}
                                {{--                                                <div id="method3" class="panel-collapse collapse">--}}
                                {{--                                                    <div class="panel-body">--}}
                                {{--                                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <div class="text-center">
                            <button
                                class="btn btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--bold"
                                id="btn" type="submit">Đặt Hàng
                            </button>
                        </div>
                    </div>
                </div> <!-- End Order Wrapper -->
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
@section('moddal')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

@endsection
@section('script')
    <script>
        const text_danger = $('#text-danger');
        if ({{$group == null}}){
            text_danger.append(`<h5 class=" text-danger" >Hiên khu vựng {{$data->ward->name}} của bạn không có đơn vị vân chuyển nào vui lòng chọn khu vưc khác hoặc quay lại sau </h5>`)
        }
        const selectDistrict = $('select[name="shipping_district_id"]');
        const selectWard = $('select[name="shipping_ward_id"]');
        selectDistrict.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/' + selectDistrict.val(),
                beforeSend: function () {
                    selectWard.html('<option value hidden disabled selected></option>').prop('disabled', false);
                },
                success: function (data) {
                    data.forEach(item => selectWard.append(new Option(item.name, item.xaid)));
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
        selectWard.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/check/' + selectWard.val(),
                beforeSend: function () {
                    text_danger.html(``)
                },
                success: function (data) {
                    console.log(data)
                    if (data == ''){
                        text_danger.html(`<h5 class="text-danger" >Hiên khu vựng bạn chọn không có đơn vị vân chuyển nào vui lòng chọn khu vưc khác hoặc qoay lại sau </h5>`)
                    }
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
        $('#btn').click(function (){
            $('#form').submit()
        })
    </script>
@endsection


