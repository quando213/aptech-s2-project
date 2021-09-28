@extends('.Admin.layout.list', [
    'limit_options' => null,
    'sort_options' => [
        'created_at DESC' => 'Mới nhất trước',
        'created_at' => 'Cũ nhất trước',
        'name' => 'Tên, A-Z',
        'name DESC' => 'Tên, Z-A',
        'sort_number' => 'Thứ tự, tăng dần',
        'sort_number DESC' => 'Thứ tự, giảm dần'],
    'create_href' => route('categoryCreate'),
    'create_label' => 'Thêm mới danh mục'
])
@section('title', 'Quản lý danh mục')

@section('thead')
    <tr>
        <th>Hình</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Thứ tự</th>
        <th>Thao tác</th>
    </tr>
@endsection

@section('tbody')
    @foreach($data as $item)
        <tr>
            <td>
                <div class="img-square-container" style="width: 100px;">
                    <img src="{{$item->thumbnail}}" alt="{{ $item->name }}">
                </div>
            </td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->sort_number}}</td>
            <td class="text-nowrap">
                <a href="{{route('categoryUpdate',$item->id)}}" type="button" class="btn btn-primary">Sửa</a>
                <x-button-delete href="{{ route('categoryDelete', $item->id) }}" :id="$item->id"></x-button-delete>
            </td>
        </tr>
    @endforeach
@endsection
