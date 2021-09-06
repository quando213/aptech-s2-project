@extends('Client.layout.index')
@section('contact')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Câu hỏi thường gặp</li>
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
                    <div class="section-content m-b-60 text-center">
                        <h5 class="section-content__title">Câu hỏi thường gặp</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="faq-section ">
                        <div class="faq-top m-b-40">
                            <h5 class="faq__title font--bold m-b-15">Dưới đây là những câu hỏi thường gặp, bạn có thể tìm thấy câu trả lời cho mình</h5>
                        </div>
                        <div class="faq__accordion accordian" id="faq__accordion">
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Làm sao biết thực phẩm tại Gsore.com có sạch không?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Các sản phẩm tại Gsore.com đều có nguồn gốc xuất xứ rõ ràng,
                                            đã qua kiểm định nghiêm ngặt, được nhập từ các công ty sản xuất,
                                            nhà cung cấp lớn như Vissan, An Việt, Đông Thành, CJ Foods... Gsore.com luôn sẵn sàng cung cấp giấy chứng nhận thực phẩm sạch - an toàn để Quý khách có thể yên tâm mua hàng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Giá các sản phẩm của Gsore.com có cố định không?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Giá các sản phẩm của Gsore.com là giá tốt nhất mà chúng tôi có thể cung cấp cho Quý khách.
                                            Một số mặt hàng đặc thù như trái cây, giá thay đổi theo mùa, nên sẽ có những điều chỉnh về giá
                                            mà không có được sự thông báo trước. Bên cạnh đó, Gsore.com luôn có những chương trình ưu đãi
                                            - khuyến mãi hấp dẫn để khách hàng có thể lựa chọn nhiều sản phẩm với giá tốt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        Loại sản phẩm này khá lạ, tôi có thể làm gì khi mua về?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Với mỗi sản phẩm, Gsore.com đều giải thích về nguồn gốc, thành phần, đặc
                                            tính nổi bật cũng như cách bảo quản và chế biến sản phẩm. Quý khách có thể tham khảo những gợi
                                            ý từ Gsore.com để bữa ăn thêm phần đa dạng và đầy đủ dinh dưỡng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4> Sản phẩm rau hay trái cây tại Gsore.com có đảm bảo tươi ngon mỗi ngày không?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Các loại rau, trái cây, thịt, cá... tại Gsore.com được nhập trong ngày để đảm bảo độ tươi.
                                            Sản phẩm được đóng gói cẩn thận khi giao đến khách hàng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>Tôi mua hàng tươi sống nhưng nếu hàng không được tươi hay bị hư thì làm sao?</h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Đối với các sản phẩm tươi sống/ đông lạnh/ bảo quản lạnh, sản phẩm sơ chế / nấu chín/ thực phẩm
                                            có hạn sử dụng dưới 07 ngày, nếu giao đến bị hư hỏng/ không đảm bảo chất lượng/ giao sai sản phẩm
                                            hoặc số lượng, quý khách có thể từ chối tại thời điểm nhận hàng
                                            . Gsore.com không có chính sách đổi/ trả nếu quý khách đã nhận hàng.
                                        </p>
                                        <p>
                                            Đối với các sản phẩm còn lại, quý khách cần thông báo đến Gsore.com trong vòng
                                            24 giờ kể từ khi giao hàng thành công. Yêu cầu đổi trả chỉ được chấp nhận trong trường
                                            hợp có cơ sở chứng minh sản phẩm hư hỏng do nhà sản xuất/ không đảm bảo chất lượng/ giao
                                            sai sản phẩm hoặc sai số lượng. Trong trường hợp sản phẩm được hỗ trợ đổi/trả,
                                            Gsore.com sẽ thu hồi và thỏa thuận phương án hỗ trợ cụ thể với quý khách.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        Tôi có thể đặt hàng qua điện thoại không?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Chúng tôi luôn hỗ trợ Quý khách đặt hàng qua điện thoại.
                                            Tuy nhiên chúng tôi luôn khuyến khích Quý khách tìm hiểu thêm
                                            về cách đặt hàng trực tuyến tại Gsore.com để đảm bảo tính tiện lợi và chủ động.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        Gsore.com có những hình thức giao hàng nào?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Gsore.com nhận đặt hàng trực tuyến và giao hàng đến tận nhà của Quý khách.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordian-item">
                                <div class="accordian-item-header">
                                    <h4>
                                        Gsore.com có những phương thức thanh toán nào?
                                    </h4>
                                </div>
                                <div class="accordian-item-body">
                                    <div class="accordian-item-body-content">
                                        <p>
                                            Hiện tại Gsore.com hỗ trợ thanh toán trực tuyến qua tài khoản ngân hàng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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


