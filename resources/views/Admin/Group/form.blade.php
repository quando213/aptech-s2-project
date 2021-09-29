@extends('Admin.layout.form', [
    'back_href' => route('groupList'),
])
@section('title')
    @isset($data)
        Chỉnh sửa nhóm
    @else
        Thêm mới nhóm
    @endif
@endsection

@section('fields')
    @include('Admin.layout.form-fields', [
    'fields' => [
        [
            'element' => 'input',
            'col' => 12,
            'name' => 'name',
            'label' => 'Tên nhóm'
        ],
        [
            'element' => 'select',
            'col' => 6,
            'name' => 'district_id',
            'label' => 'Quận/huyện',
            'placeholder' => 'Chọn quận/huyện',
            'selected' => isset($data) && $data->ward_id ? $data->ward->maqh : '',
            'options' => arrayToOptions($districts, 'name', 'maqh'),
        ],
        [
            'element' => 'select',
            'col' => 6,
            'name' => 'ward_id',
            'label' => 'Phường/xã quản lý',
            'placeholder' => 'Chọn phường/xã',
            'options' => arrayToOptions($wards ?? [], 'name', 'xaid'),
        ],
    ],
    'data' => $data ?? null
])
@endsection
