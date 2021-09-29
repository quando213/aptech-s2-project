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
            <td style="text-align: right;">{{$item->total_price}}đ</td>
            <td>{{ \Carbon\Carbon::parse($item->created_at)->format(DISPLAY_DATETIME_FORMAT) }}</td>
            <td>
                <x-order-status-badge :status="$item->status"></x-order-status-badge>
            </td>
            <td>
                <a href="{{route('orderDetail',$item->id)}}" type="button"
                   class="btn btn-primary text-nowrap">Xem</a>
            </td>
        </tr>
    @endforeach
@endsection

@section('filter')
    <div class="col-6">
        <x-select name="shipping_district_id" option-all="Tất cả quận/huyện" icon="bi-filter" is-filter="true"
                  :options="arrayToOptions($districts, 'name', 'id')"></x-select>
    </div>
    <div class="col-6">
        <x-select name="shipping_ward_id" option-all="Tất cả phường/xã" icon="bi-filter" is-filter="true"
                  :disabled="!sizeof($wards)" :options="arrayToOptions($wards, 'name', 'id')"></x-select>
    </div>
    <div class="col-6">
        <x-select name="status" option-all="Tất cả trạng thái" icon="bi-filter" is-filter="true"
                  :options="App\Enums\OrderStatus::asSelectArray()"></x-select>
    </div>
    <div class="col-6">
        <x-date-range-picker></x-date-range-picker>
    </div>
@endsection
