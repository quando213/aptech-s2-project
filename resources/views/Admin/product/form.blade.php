@extends('Admin.layout.form', [
    'back_href' => route('productList'),
])
@section('title')
    @isset($data)
        Chỉnh sửa sản phẩm
    @else
        Thêm mới sản phẩm
    @endif
@endsection

@section('fields')
    @include('Admin.layout.form-fields', [
    'fields' => [
        [
            'element' => 'select',
            'col' => 3,
            'name' => 'category_id',
            'label' => 'Danh mục',
            'placeholder' => 'Chọn danh mục',
            'options' => arrayToOptions($categories, 'name', 'id'),
        ],
        [
            'element' => 'input',
            'col' => 6,
            'name' => 'name',
            'label' => 'Tên sản phẩm'
        ],
        [
            'element' => 'input',
            'col' => 3,
            'name' => 'price',
            'label' => 'Giá',
            'type' => 'number'
        ],
        [
            'element' => 'textarea',
            'col' => 12,
            'name' => 'description',
            'label' => 'Mô tả sản phẩm',
            'rows' => 5
        ],
        [
            'element'  => 'divider'
        ],
        [
            'element' => 'select',
            'col' => 4,
            'name' => 'unit',
            'label' => 'Đơn vị tính',
            'placeholder' => 'Chọn đơn vị',
            'options' => App\Enums\ProductUnit::asSelectArray(),
        ],
        [
            'element' => 'input',
            'col' => 4,
            'name' => 'quantity',
            'label' => 'Lượng trong mỗi SP',
            'type' => 'number'
        ],
        [
            'element' => 'input',
            'col' => 4,
            'name' => 'stock',
            'label' => 'SL hàng trong kho',
            'type' => 'number'
        ],
                [
            'element' => 'input',
            'col' => 6,
            'name' => 'origin',
            'label' => 'Nguồn gốc'
        ],
        [
            'element' => 'input',
            'col' => 6,
            'name' => 'brand',
            'label' => 'Tên thương hiệu'
        ],
        [
            'element'  => 'divider'
        ],
        [
            'element' => 'single-image',
            'col' => 4,
            'name' => 'thumbnail',
            'label' => 'Ảnh sản phẩm'
        ],
    ],
    'data' => $data ?? null
])
@endsection
