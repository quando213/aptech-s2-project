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
                <!-- Start Client Shipping Address -->
                <div class="col-lg-7">
                    <div class="section-content">
                        <h5 class="section-content__title">Chi Tiết Thanh Toán</h5>
                    </div>
                    <form action="#" method="post" class="form-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-first-name">Tên</label>
                                    <input type="text" id="form-first-name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-last-name">Họ</label>
                                    <input type="text" id="form-last-name">
                                </div>
                            </div>
{{--                            <div class="col-md-12">--}}
{{--                                <div class="form-box__single-group">--}}
{{--                                    <label for="form-company-name">Company Name</label>--}}
{{--                                    <input type="text" id="form-company-name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-country">* Thành Phố</label>
                                    <select id="form-country">
                                        <option value="select-country" selected>Chọn Thành Phố</option>
                                        <option value="HN">Hà Nội</option>
                                        <option value="TN">Thái Nguyên </option>
                                        <option value="TB">Thái Bình</option>
                                        <option value="HY">Hưng Yên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <label for="form-address-1">Quận</label>
                                    <input type="text" id="form-address-1" placeholder="House number and street name">
                                    <input type="text" class="m-t-10" id="form-address-2" placeholder="Apartment, suite, unit etc.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-state">* Region / State</label>
                                    <select id="form-state">
                                        <option value="Dha" selected>Dhaka</option>
                                        <option value="Kha">Khulna</option>
                                        <option value="Raj">Rajshahi</option>
                                        <option value="Syl">Sylet</option>
                                        <option value="Chi">Chittagong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-zipcode">* Phường</label>
                                    <input type="text" id="form-zipcode">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-phone">Số Điện Thoại</label>
                                    <input type="text" id="form-phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box__single-group">
                                    <label for="form-email">Địa Chỉ Email</label>
                                    <input type="email" id="form-email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="m-tb-20">
                                    <label for="check-account">
                                        <input type="checkbox" name="check-account" class="creat-account"  id="check-account">
                                        <span>Tạo Tài Khoản?</span>
                                    </label>
                                    <div class="toogle-form open-create-account">
                                        <div class="form-box__single-group">
                                            <label for="form-email-new-account">Địc CHỉ Email</label>
                                            <input type="email" id="form-email-new-account">
                                        </div>
                                        <div class="form-box__single-group">
                                            <label for="form-password-new-account">Mật Khẩu</label>
                                            <input type="password" id="form-password-new-account">
                                        </div>
                                        <div class="from-box__buttons m-t-25">
                                            <button class="btn btn--box btn--small btn--radius btn--green btn--green-hover-black btn--uppercase btn--weight" type="submit">Đăng ký</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-box__single-group">
                                    <h6>Thông Tin Thêm</h6>
                                    <label for="form-additional-info">Ghi Chú</label>
                                    <textarea  id="form-additional-info" rows="5" placeholder="Ghi Chú."></textarea>
                                </div>
                            </div>
                            <!-- Add Another Shipping Address -->
                            <div class="col-md-12">
                                <div class="m-tb-20">
                                    <label for="shipping-account">
                                        <input type="checkbox" name="check-account" class="shipping-account"  id="shipping-account">
                                        <span>Gủi Đến Địa Chỉ Khác?</span>
                                    </label>
                                    <div class="toogle-form open-shipping-account">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-first-name">Tên</label>
                                                    <input type="text" id="shipping-form-first-name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-last-name">Họ</label>
                                                    <input type="text" id="shipping-form-last-name">
                                                </div>
                                            </div>
{{--                                            <div class="col-md-12">--}}
{{--                                                <div class="form-box__single-group">--}}
{{--                                                    <label for="shipping-form-company-name">Company Name</label>--}}
{{--                                                    <input type="text" id="shipping-form-company-name">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-country">* Thành Phố</label>
                                                    <select id="shipping-form-country">
                                                        <option value="select-country" selected>Select a country</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="US">USA</option>
                                                        <option value="UK">UK</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="CA">Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-address-1">Sôa Nhà </label>
                                                    <input type="text" id="shipping-form-address-1" placeholder="Số Nhà Và Tên Đường">
{{--                                                    <input type="text" class="m-t-10" id="shipping-form-address-2" placeholder="Apartment, suite, unit etc.">--}}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-state">* Quận</label>
                                                    <select id="shipping-form-state">
                                                        <option value="Dha" selected>Dhaka</option>
                                                        <option value="Kha">Khulna</option>
                                                        <option value="Raj">Rajshahi</option>
                                                        <option value="Syl">Sylet</option>
                                                        <option value="Chi">Chittagong</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-zipcode">* Phường</label>
                                                    <input type="text" id="shipping-form-zipcode">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-phone">SĐT</label>
                                                    <input type="text" id="shipping-form-phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-box__single-group">
                                                    <label for="shipping-form-email">Địa Chỉ Email</label>
                                                    <input type="email" id="shipping-form-email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  <!-- End Another Shipping Address -->
                        </div>
                    </form>
                </div> <!-- End Client Shipping Address -->

                <!-- Start Order Wrapper -->
                <div class="col-lg-5">
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
                                    <li class="d-flex justify-content-between">
                                        <span class="your-order-middle-left font--semi-bold">Tên Sản Phẩm  X 1</span>
                                        <span class="your-order-middle-right font--semi-bold">$329</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <span class="your-order-middle-left font--semi-bold">ên Sản Phẩm  X 2</span>
                                        <span class="your-order-middle-right font--semi-bold">$329</span>
                                    </li>
                                </ul>
                                <div class="your-order-bottom d-flex justify-content-between">
                                    <h6 class="your-order-bottom-left font--bold">Vận Đơn</h6>
                                    <span class="your-order-bottom-right font--semi-bold">Miễn Phí Vận Chuyển</span>
                                </div>
                                <div class="your-order-total d-flex justify-content-between">
                                    <h5 class="your-order-total-left font--bold">Tổng</h5>
                                    <h5 class="your-order-total-right font--bold">$329</h5>
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
                            <button class="btn btn--small btn--radius btn--green btn--green-hover-black btn--uppercase font--bold" type="submit">Đặt Hàng</button>
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


