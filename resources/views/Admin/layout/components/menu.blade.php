<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('adminDashboard') }}" class="btn btn-primary btn-sm">{{ \App\Enums\UserRole::getDescription(\Illuminate\Support\Facades\Auth::user()->role) }}</a>
                    <a href="{{ route('home') }}" class="d-block" target="_blank">Chợ hộ Hà Nội</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Đơn hàng</li>
                <li class="sidebar-item {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'adminDashboard' ? 'active' : '' }} ">
                    <a href="/admin" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/orders' ? 'active' : '' }}">
                    <a href="{{route('orderList')}}" class='sidebar-link'>
                        <i class="bi bi-card-list"></i>
                        <span>Đơn hàng</span>
                    </a>
                </li>
                <li class="sidebar-title">Sản phẩm</li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/products' ? 'active' : '' }}">
                    <a href="{{route('productList')}}" class='sidebar-link'>
                        <i class="bi bi-box-seam"></i>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/categories' ? 'active' : '' }}">
                    <a href="{{route('categoryList')}}" class='sidebar-link'>
                        <i class="bi bi-list-nested"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                </li>
{{--                <li class="sidebar-item has-sub {{ request()->route()->getPrefix() == 'admin/combos' ? 'active' : '' }}">--}}
{{--                    <a class='sidebar-link'>--}}
{{--                        <i class="bi bi-hexagon-fill"></i>--}}
{{--                        <span>Combo sản phẩm</span>--}}
{{--                    </a>--}}
{{--                    <ul class="submenu ">--}}
{{--                        <li class="submenu-item ">--}}
{{--                            <a href="{{route('comboList')}}" class='sidebar-link'>--}}
{{--                                <i class="bi bi-cart-plus-fill"></i>--}}
{{--                                <span>Gói sản phẩm</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="submenu-item">--}}
{{--                            <a href="{{route('comboDetail')}}" class='sidebar-link'>--}}
{{--                                <i class="bi bi-card-checklist"></i>--}}
{{--                                <span>Chi tiết các gói sản phẩm</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li class="sidebar-title">Người dùng</li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/users' && !request()->route()->hasParameter('role') ? 'active' : '' }}">
                    <a href="{{route('userList')}}" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Khách hàng</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/users' && request()->route()->hasParameter('role') && request()->route()->parameter('role') == \App\Enums\UserRole::SHIPPER ? 'active' : '' }}">
                    <a href="{{route('userList', ['role' => \App\Enums\UserRole::SHIPPER])}}" class='sidebar-link'>
                        <i class="bi bi-star-fill"></i>
                        <span>Quân nhân</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/groups' ? 'active' : '' }}">
                    <a href="{{route('groupList')}}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Nhóm quân nhân</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->route()->getPrefix() == 'admin/users' && request()->route()->hasParameter('role') && request()->route()->parameter('role') == \App\Enums\UserRole::ADMIN ? 'active' : '' }}">
                    <a href="{{route('userList', ['role' => \App\Enums\UserRole::ADMIN])}}" class='sidebar-link'>
                        <i class="bi bi-key-fill"></i>
                        <span>Quản trị viên</span>
                    </a>
                </li>
                <li class="sidebar-title">
                    @if(\Illuminate\Support\Facades\Auth::user()->role == \App\Enums\UserRole::SHIPPER && \Illuminate\Support\Facades\Auth::user()->position)
                        {{ \Illuminate\Support\Facades\Auth::user()->position }}
                    @endif
                    {{ \Illuminate\Support\Facades\Auth::user()->last_name . ' ' . \Illuminate\Support\Facades\Auth::user()->first_name }}
                </li>
                <li class="sidebar-item">
                    <a href="{{route('logout')}}" class='sidebar-link'>
                        <i class="bi bi-arrow-left-square-fill"></i>
                        <span>Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
