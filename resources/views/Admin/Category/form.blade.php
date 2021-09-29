@extends('Admin.layout.form', [
    'back_href' => route('categoryList'),
])
@section('title')
    @isset($data)
        Chỉnh sửa danh mục
    @else
        Thêm mới danh mục
    @endif
@endsection

@section('fields')
    @include('Admin.layout.form-fields', [
    'fields' => [
        [
            'element' => 'input',
            'col' => 9,
            'name' => 'name',
            'label' => 'Tên danh mục'
        ],
        [
            'element' => 'input',
            'col' => 3,
            'name' => 'sort_number',
            'label' => 'Thứ tự sắp xếp',
            'type' => 'number'
        ],
        [
            'element' => 'textarea',
            'col' => 12,
            'name' => 'description',
            'label' => 'Mô tả',
            'rows' => 5
        ],
        [
            'element'  => 'divider'
        ],
        [
            'element' => 'single-image',
            'col' => 4,
            'name' => 'thumbnail',
            'label' => 'Ảnh đại diện'
        ],
    ],
    'data' => $data ?? null
])
@endsection
