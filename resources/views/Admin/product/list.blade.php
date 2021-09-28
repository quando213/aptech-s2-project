@extends('.Admin.layout.list', [
    'limit_options' => null,
    'sort_options' => [
        'created_at DESC' => 'Mới nhất trước',
        'created_at' => 'Cũ nhất trước',
        'name' => 'Tên, A-Z',
        'name DESC' => 'Tên, Z-A',
        'price' => 'Giá, tăng dần',
        'price DESC' => 'Giá, giảm dần'],
    'create_href' => route('productCreate'),
    'create_label' => 'Thêm mới sản phẩm'
])
@section('title', 'Quản lý sản phẩm')

@section('thead')
    <tr>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Giá</th>
        <th>SL trong kho</th>
        <th>Xuất xứ</th>
        <th>Thương hiệu</th>
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
            <td>
                <span class="badge bg-light-secondary" style="margin-bottom: 5px;">{{$item->category->name}}</span><br>
                {{$item->name}}<br>
                ĐVT: <span class="text-lowercase">{{$item->quantity . ' ' . \App\Enums\ProductUnit::getDescription($item->unit)}}</span>
            </td>
            <td style="text-align: right;">{{number_format($item->price)}}đ</td>
            <td>{{$item->stock}}</td>
            <td>{{$item->origin}}</td>
            <td>{{$item->brand}}</td>
            <td class="text-nowrap">
                <a href="{{route('productUpdate',$item->id)}}" type="button"
                   class="btn btn-primary">Sửa</a>
                <x-button-delete href="{{ route('productDelete', $item->id) }}" :id="$item->id"></x-button-delete>
            </td>
        </tr>
    @endforeach
@endsection

@section('filter')
    <div class="col-6">
        <x-select name="stock" option-all="Không lọc số lượng hàng" icon="bi-filter" is-filter="true"
                  :options="[1 => 'Còn hàng', 0 => 'Hết hàng']"></x-select>
    </div>
    <div class="col-6">
        <x-select name="category_id" option-all="Tất cả danh mục" icon="bi-filter" is-filter="true"
                  :options="arrayToOptions($categories, 'name', 'id')"></x-select>
    </div>
@endsection
