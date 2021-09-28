@extends('.Admin.layout.list', [
    'limit_options' => null,
    'sort_options' => [
        'created_at DESC' => 'Mới nhất trước',
        'created_at' => 'Cũ nhất trước',
        'first_name' => 'Tên, A-Z',
        'first_name DESC' => 'Tên, Z-A'],
    'create_href' => route('userCreate'),
    'create_label' => 'Thêm mới tài khoản'
])
@section('title', 'Quản lý khách hàng')

@section('thead')
    <tr>
        <th>Họ & tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Nhóm</th>
        <th>Số điện thoại</th>
        <th>Vai trò</th>
        <th>Chức vụ</th>
        <th>Hoạt động</th>
    </tr>
@endsection

@section('tbody')
    @foreach($data as $item)
        <tr>
            <td>{{$item->first_name . ' '. $item->last_name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->district->name . ', '. $item->ward->name . ', '. $item->street}}</td>
            <td>{{$item->group ? $item->group->name : "USER"}}</td>
            <td>{{$item->phone}}</td>
            <td>{{\App\Enums\UserRole::getDescription($item->role)}}</td>
            <td>{{$item->position}}</td>
            <td>
                <a href="{{route('userUpdate',$item->id)}}" type="button" class="btn btn-primary">Sửa</a>
                <x-button-delete href="{{ route('productDelete', $item->id) }}" :id="$item->id"></x-button-delete>
            </td>
        </tr>
    @endforeach
@endsection

@section('filter')
    <div class="col-6">
        <x-select name="district_id" option-all="Tất cả quận/huyện" icon="bi-filter" is-filter="true"
                  :options="arrayToOptions($districts, 'name', 'maqh')"></x-select>
    </div>
    <div class="col-6">
        <x-select name="ward_id" option-all="Tất cả phường/xã" icon="bi-filter" is-filter="true"
                  :disabled="!sizeof($wards)" :options="arrayToOptions($wards, 'name', 'xaid')"></x-select>
    </div>
@endsection
