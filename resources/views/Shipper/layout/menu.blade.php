<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a  href="/shipper"> {{\Illuminate\Support\Facades\Auth::user()->first_name.' '.\Illuminate\Support\Facades\Auth::user()->last_name}}</a>
                </div>
                <div class="toggler">
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Danh mục</li>

                <li class="sidebar-item active ">
                    <a href="/shipper" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('shipperOrderList')}}" class='sidebar-link'>
                        <i class="bi bi-card-list"></i>
                        <span>Danh sách đơn hàng</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{route('notification')}}" class='sidebar-link'>
                        <i class="bi bi-person-lines-fill"></i>
                        <span>Thông báo</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
