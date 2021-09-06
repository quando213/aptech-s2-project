<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/admin"><img src="asset/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Danh mục</li>

                <li class="sidebar-item active ">
                    <a href="/admin" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('userList')}}" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Danh sách người dùng</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('productList')}}" class='sidebar-link'>
                        <i class="bi bi-box-seam"></i>
                        <span>Danh sách sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{route('categoryList')}}" class='sidebar-link'>
                        <i class="bi bi-list-nested"></i>
                        <span>Danh sách thể loại sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('groupList')}}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Danh sách các nhóm</span>
                    </a>
                </li>
                <li class="sidebar-title">Biểu mẫu &amp; Bảng</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Phần tử biểu mẫu</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="/input">Dữ liệu đầu vào</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="/form-layout" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Bố cục biểu mẫu</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="/table" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Bảng kiểm tra dánh sách người dùng</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="/datatable" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Bảng dữ liệu</span>
                    </a>
                </li>

                {{--                <li class="sidebar-title">Extra UI</li>--}}

                {{--                <li class="sidebar-item  has-sub">--}}
                {{--                    <a href="#" class='sidebar-link'>--}}
                {{--                        <i class="bi bi-pentagon-fill"></i>--}}
                {{--                        <span>Widgets</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="submenu ">--}}
                {{--                        <li class="submenu-item ">--}}
                {{--                            <a href="ui-widgets-chatbox.html">Chatbox</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                {{--                <li class="sidebar-item  has-sub">--}}
                {{--                    <a href="#" class='sidebar-link'>--}}
                {{--                        <i class="bi bi-map-fill"></i>--}}
                {{--                        <span>Maps</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="submenu ">--}}
                {{--                        <li class="submenu-item ">--}}
                {{--                            <a href="ui-map-google-map.html">Google Map</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="submenu-item ">--}}
                {{--                            <a href="ui-map-jsvectormap.html">JS Vector Map</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}

                <li class="sidebar-title">Các ứng dụng trên trang</li>

                <li class="sidebar-item  ">
                    <a href="/email" class='sidebar-link'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Ứng dụng gửi email</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Xác thực tài khoản</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="/login">Đăng nhập</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/sign-up">Đăng ký</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/forgot">Quên mật khẩu</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
