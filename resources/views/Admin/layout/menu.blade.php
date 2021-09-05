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
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active ">
                    <a href="/admin" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('userList')}}" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('productList')}}" class='sidebar-link'>
                        <i class="bi bi-box-seam"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a href="{{route('categoryList')}}" class='sidebar-link'>
                        <i class="bi bi-list-nested"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('groupList')}}" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Groups</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Combo Manager</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('comboList')}}" class='sidebar-link'>
                                <i class="bi bi-cart-plus-fill"></i>
                                <span>Combos</span>
                            </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{route('comboDetail')}}" class='sidebar-link'>
                                <i class="bi bi-card-checklist"></i>
                                <span>Combo Detail</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="/input">Input</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  ">
                    <a href="/form-layout" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Layout</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="/table" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Table</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="/datatable" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Datatable</span>
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

                <li class="sidebar-title">Pages</li>

                <li class="sidebar-item  ">
                    <a href="/email" class='sidebar-link'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Email Application</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="/login">Login</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/sign-up">Register</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/forgot">Forgot Password</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
