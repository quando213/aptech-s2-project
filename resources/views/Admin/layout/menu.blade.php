<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a  href="/admin"> {{\Illuminate\Support\Facades\Auth::user()->first_name.' '.\Illuminate\Support\Facades\Auth::user()->last_name}}</a>
                </div>
                <div class="toggler">

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
                <li class="sidebar-item  ">
                    <a href="{{route('orderList')}}" class='sidebar-link'>
                        <i class="bi bi-card-list"></i>
                        <span>Danh sách đơn hàng</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a  class='sidebar-link'>
                    <i class="bi bi-person-lines-fill"></i>
                        <span>Danh sách nhân sự</span>
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
                    <a class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Quản lý các gói sản phẩm</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('comboList')}}" class='sidebar-link'>
                                <i class="bi bi-cart-plus-fill"></i>
                                <span>Gói sản phẩm</span>
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{route('comboDetail')}}" class='sidebar-link'>
                                <i class="bi bi-card-checklist"></i>
                                <span>Chi tiết các gói sản phẩm</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
