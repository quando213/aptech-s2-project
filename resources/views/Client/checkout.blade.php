@extends('Client.layout.index')
@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav"><a href="{{ route('viewCart') }}">Giỏ hàng</a></li>
                        <li class="page-breadcrumb__nav active">Thanh toán</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
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
            <div class="row">
                    <div class="section-content text-danger pb-3" id="text-danger">
                        @if(!$group)
                            <h5 class=" text-danger" >Hiên khu vực {{$data->ward->name}} của bạn không có đơn vị vận chuyển nào. Vui lòng chọn khu vực khác hoặc quay lại sau.</h5>
                        @endif
                    </div>
                <div class="col-lg-7 pt-3">
                    <div class="section-content">
                        <h5 class="section-content__title">Thông tin người nhận</h5>
                    </div>

                    <form method="post" class="form-box" id="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-first-name">Tên</label>
                                    <input type="text" name="shipping_name"
                                           value="{{$data ? $data->last_name .' '.$data->first_name :''}}"
                                           id="form-first-name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-box__single-group">
                                    <label for="sel1">Quận/Huyện</label>
                                    <select class="form-control" id="sel1" name="shipping_district_id">
                                        <option selected disabled hidden>Chọn</option>
                                        @foreach($districts as $district)
                                            <option
                                                value="{{$district->id}}" {{ $data && $data->district_id == $district->id ? 'selected' :'' }} >{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class=" form-box__single-group">
                                    <label for="Ward">Phường/Xã</label>
                                    <select class="form-control" id="Ward" name="shipping_ward_id">
                                        <option selected disabled hidden>Chọn</option>
                                        @if($data)
                                            @foreach($data->district->wards as $ward)
                                                <option value="{{ $ward->id }}" {{ $data && $data->ward_id ==  $ward->id ? 'selected' : '' }}>{{ $ward->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-address-1">Đường</label>
                                    <input type="text" name="shipping_street" id="form-address-1"
                                           value="{{$data->street}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-phone">Số điện thoại</label>
                                    <input type="text" name="shipping_phone" value="{{$data->phone}}" id="form-phone">
                                </div>
                            </div>
                            <x-select :col="12" name="payment_method" label="Phương thức thanh toán"
                                      placeholder="Chọn phương thức thanh toán" css-class="form-box__single-group"
                                      :options="App\Enums\OrderPaymentMethod::asSelectArray()"></x-select>
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-box__single-group">--}}
{{--                                    <label for="bankcode">Ngân hàng</label>--}}
{{--                                    <select name="bankcode" id="bankcode" class="form-control">--}}
{{--                                        <option value="">Không chọn</option>--}}
{{--                                        <option value="VNPAYQR">VNPAYQR</option>--}}
{{--                                        <option value="VNBANK">LOCAL BANK</option>--}}
{{--                                        <option value="IB">INTERNET BANKING</option>--}}
{{--                                        <option value="ATM">ATM CARD</option>--}}
{{--                                        <option value="INTCARD">INTERNATIONAL CARD</option>--}}
{{--                                        <option value="VISA">VISA</option>--}}
{{--                                        <option value="MASTERCARD"> MASTERCARD</option>--}}
{{--                                        <option value="JCB">JCB</option>--}}
{{--                                        <option value="UPI">UPI</option>--}}
{{--                                        <option value="VIB">VIB</option>--}}
{{--                                        <option value="VIETCAPITALBANK">VIETCAPITALBANK</option>--}}

{{--                                        <option value="SCB">Ngân hàng SCB</option>--}}
{{--                                        <option value="NCB">Ngân hàng NCB</option>--}}
{{--                                        <option value="SACOMBANK">Ngân hàng SacomBank  </option>--}}
{{--                                        <option value="EXIMBANK">Ngân hàng EximBank </option>--}}
{{--                                        <option value="MSBANK">Ngân hàng MSBANK </option>--}}
{{--                                        <option value="NAMABANK">Ngân hàng NamABank </option>--}}
{{--                                        <option value="VNMART"> Vi dien tu VnMart</option>--}}
{{--                                        <option value="VIETINBANK">Ngân hàng Vietinbank  </option>--}}
{{--                                        <option value="VIETCOMBANK">Ngân hàng VCB </option>--}}
{{--                                        <option value="HDBANK">Ngân hàng HDBank</option>--}}
{{--                                        <option value="DONGABANK">Ngân hàng Dong A</option>--}}
{{--                                        <option value="TPBANK">Ngân hàng TPBank </option>--}}
{{--                                        <option value="OJB">Ngân hàng OceanBank</option>--}}
{{--                                        <option value="BIDV">Ngân hàng BIDV </option>--}}
{{--                                        <option value="TECHCOMBANK">Ngân hàng Techcombank </option>--}}
{{--                                        <option value="VPBANK">Ngân hàng VPBank </option>--}}
{{--                                        <option value="AGRIBANK">Ngân hàng Agribank </option>--}}
{{--                                        <option value="MBBANK">Ngân hàng MBBank </option>--}}
{{--                                        <option value="ACB">Ngân hàng ACB </option>--}}
{{--                                        <option value="OCB">Ngân hàng OCB </option>--}}
{{--                                        <option value="IVB">Ngân hàng IVB </option>--}}
{{--                                        <option value="SHB">Ngân hàng SHB </option>--}}

{{--                                        <option value="SCB">Ngan hang SCB</option>--}}
{{--                                        <option value="NCB">Ngan hang NCB</option>--}}
{{--                                        <option value="SACOMBANK">Ngan hang SacomBank</option>--}}
{{--                                        <option value="EXIMBANK">Ngan hang EximBank</option>--}}
{{--                                        <option value="MSBANK">Ngan hang MSBANK</option>--}}
{{--                                        <option value="NAMABANK">Ngan hang NamABank</option>--}}
{{--                                        <option value="VNMART"> Vi dien tu VnMart</option>--}}
{{--                                        <option value="VIETINBANK">Ngan hang Vietinbank</option>--}}
{{--                                        <option value="VIETCOMBANK">Ngan hang VCB</option>--}}
{{--                                        <option value="HDBANK">Ngan hang HDBank</option>--}}
{{--                                        <option value="DONGABANK">Ngan hang Dong A</option>--}}
{{--                                        <option value="TPBANK">Ngân hàng TPBank</option>--}}
{{--                                        <option value="OJB">Ngân hàng OceanBank</option>--}}
{{--                                        <option value="BIDV">Ngân hàng BIDV</option>--}}
{{--                                        <option value="TECHCOMBANK">Ngân hàng Techcombank</option>--}}
{{--                                        <option value="VPBANK">Ngan hang VPBank</option>--}}
{{--                                        <option value="AGRIBANK">Ngan hang Agribank</option>--}}
{{--                                        <option value="MBBANK">Ngan hang MBBank</option>--}}
{{--                                        <option value="ACB">Ngan hang ACB</option>--}}
{{--                                        <option value="OCB">Ngan hang OCB</option>--}}
{{--                                        <option value="IVB">Ngan hang IVB</option>--}}
{{--                                        <option value="SHB">Ngan hang SHB</option>--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-additional-info">Ghi chú thêm</label>
                                    <textarea name="note" id="form-additional-info" rows="5"
                                              placeholder="Nhập ghi chú"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- End Client Shipping Address -->

                <!-- Start Order Wrapper -->
                <div class="col-lg-5 pt-3">
                    <div class="your-order-section">
                        <div class="section-content">
                            <h5 class="section-content__title">Đơn Hàng Của Bạn</h5>
                        </div>
                        <div class="your-order-box gray-bg m-t-40 m-b-30">
                            <div class="your-order-product-info">
                                <div class="your-order-top d-flex justify-content-between">
                                    <h6 class="your-order-top-left font--bold">Sản phẩm</h6>
                                    <h6 class="your-order-top-right font--bold">Tổng</h6>
                                </div>
                                <ul class="your-order-middle">
                                    @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                        <li class="d-flex justify-content-between">
                                            <span
                                                class="your-order-middle-left font--semi-bold">{{$item->name}}  X {{$item->qty}}</span>
                                            <span
                                                class="your-order-middle-right font--semi-bold">{{$item->subtotal(0)}} đ</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="your-order-bottom d-flex justify-content-between">
                                    <h6 class="your-order-bottom-left font--bold">Phí vận chuyển</h6>
                                    <span class="your-order-bottom-right font--semi-bold">0 đ</span>
                                </div>
                                <div class="your-order-total d-flex justify-content-between">
                                    <h5 class="your-order-total-left font--bold">Thành tiền</h5>
                                    <h5 class="your-order-total-right font--bold">{{\Gloudemans\Shoppingcart\Facades\Cart::total(0)}} đ</h5>
                                </div>
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
        const selectDistrict = $('select[name="shipping_district_id"]');
        const selectWard = $('select[name="shipping_ward_id"]');
        selectDistrict.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/' + selectDistrict.val(),
                beforeSend: function () {
                    selectWard.html('<option value hidden disabled selected>Chọn</option>').prop('disabled', false);
                },
                success: function (data) {
                    data.forEach(item => selectWard.append(new Option(item.name, item.id)));
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
                    if (data == ''){
                        text_danger.html(`<h5 class="text-danger" >Hiên khu vực bạn chọn không có đơn vị vận chuyển nào. Vui lòng chọn khu vực khác hoặc quay lại sau.</h5>`)
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


