@extends('.Admin.layout.list', [
    'limit_options' => null,
    'sort_options' => [
        'created_at DESC' => 'Mới nhất trước',
        'created_at' => 'Cũ nhất trước',
        'name' => 'Tên, A-Z',
        'name DESC' => 'Tên, Z-A'],
    'create_href' => route('groupCreate'),
    'create_label' => 'Thêm mới nhóm'
])
@section('title', 'Quản lý nhóm')

@section('thead')
    <tr>
        <th>Tên nhóm</th>
        <th>Khu vực quản lý</th>
        <th>Thao tác</th>
    </tr>
@endsection

@section('tbody')
    @foreach($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>
                <span class="badge bg-light-secondary" style="margin-right: 5px;">{{$item->ward->district->name}}</span>
                {{$item->ward->name}}
            </td>
            <td>
                <a href="{{route('groupUpdate',$item->id)}}" type="button" class="btn btn-primary">Sửa</a>
                <x-button-delete href="{{ route('productDelete', $item->id) }}" :id="$item->id"></x-button-delete>
            </td>
        </tr>
    @endforeach
@endsection

@section('filter')
    <div class="col-6">
        <x-select name="district_id" option-all="Tất cả quận/huyện" icon="bi-filter" is-filter="true"
                  :options="arrayToOptions($districts, 'name', 'id')"></x-select>
    </div>
    <div class="col-6">
        <x-select name="ward_id" option-all="Tất cả phường/xã" icon="bi-filter" is-filter="true"
                  :disabled="!sizeof($wards)" :options="arrayToOptions($wards, 'name', 'id')"></x-select>
    </div>
@endsection
