@extends('.Admin.layout.list', [
    'limit_options' => null,
    'sort_options' => ['created_at DESC' => 'Mới nhất trước', 'created_at ASC' => 'Cũ nhất trước'],
    'create_href' => null,
    'create_label' => null
])
@section('title', 'Quản lý đơn hàng')

@section('thead')
    <tr>
        <th>ID</th>
        <th>Người nhận</th>
        <th>Thành tiền</th>
        <th>Ngày tạo</th>
        <th>Trạng thái</th>
        <th>Thao tác</th>
    </tr>
@endsection

@section('tbody')
    @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>
                <strong>{{$item->shipping_name}}</strong><br>
                {{ $item->shipping_street }}<br>
                {{$item->ward->name . ', ' . $item->district->name}}<br>
                {{$item->shipping_phone}}
            </td>
            <td style="text-align: right;">{{number_format($item->total_price)}}đ</td>
            <td>{{ $item->createdAtFormatted() }}</td>
            <td>
                <x-order-status-badge :status="$item->status"></x-order-status-badge>
                @if(isAdmin() && $item->status == \App\Enums\OrderStatus::CREATED)
                    <a href="{{route('orderMarkAsPaid', $item->id)}}"
                       data-bs-toggle="tooltip" title="" data-bs-original-title="Đánh dấu đã nhận chuyển khoản">
                        <i class="bi bi-check-circle-fill text-danger" style="font-size: 1rem;"></i>
                    </a>
                @endif
            </td>
            <td class="text-nowrap text-center">
                <a href="{{route('orderDetail', $item->id)}}" type="button"
                   class="btn btn-primary">Xem</a>
                @if(isShipper() && $item->status == \App\Enums\OrderStatus::PAID)
                    <a href="{{route('orderMarkAsShipped', $item->id)}}" type="button" class="btn btn-warning">
                        Nhận đơn
                    </a>
                @endif
                @if(isShipper() && $item->status == \App\Enums\OrderStatus::IN_DELIVERY)
                    <a href="{{route('orderMarkAsCompleted', $item->id)}}" type="button" class="btn btn-info">
                        Hoàn thành
                    </a>
                    <a href="{{route('orderCancelShipment', $item->id)}}" type="button" class="btn btn-dark">
                        Huỷ
                    </a>
                @endif
            </td>
        </tr>
    @endforeach
@endsection

@section('filter')
    @if(isAdmin())
        <x-select :col="6" name="shipping_district_id" option-all="Tất cả quận/huyện" icon="bi-filter" is-filter="true"
                  :options="arrayToOptions($districts, 'name', 'id')"></x-select>
        <x-select :col="6" name="shipping_ward_id" option-all="Tất cả phường/xã" icon="bi-filter" is-filter="true"
                  :disabled="!sizeof($wards)" :options="arrayToOptions($wards, 'name', 'id')"></x-select>
    @endif
    <x-select :col="6" name="status" option-all="Tất cả trạng thái" icon="bi-filter" is-filter="true"
              :options="App\Enums\OrderStatus::asSelectArray()"></x-select>
    <div class="col-6">
        <x-date-range-picker></x-date-range-picker>
    </div>
@endsection

@section('extraJs')
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
@endsection
