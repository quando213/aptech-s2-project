@extends('Admin.layout.form', [
    'back_href' => route('userList'),
])
@section('title')
    @isset($data)
        Chỉnh sửa tài khoản
    @else
        Thêm mới tài khoản
    @endif
@endsection

@section('fields')
    @include('Admin.layout.form-fields', [
    'fields' => [
        [
            'element' => 'input',
            'col' => 3,
            'name' => 'last_name',
            'label' => 'Họ'
        ],
        [
            'element' => 'input',
            'col' => 3,
            'name' => 'first_name',
            'label' => 'Tên'
        ],
        [
            'element' => 'input',
            'col' => 3,
            'name' => 'email',
            'label' => 'Email',
            'type' => 'email'
        ],
        [
            'element' => 'input',
            'col' => 3,
            'name' => 'phone',
            'label' => 'Số điện thoại'
        ],
        [
            'element' => 'select',
            'col' => 4,
            'name' => 'district_id',
            'label' => 'Quận/huyện',
            'placeholder' => 'Chọn quận/huyện',
            'options' => arrayToOptions($districts, 'name', 'maqh'),
        ],
        [
            'element' => 'select',
            'col' => 4,
            'name' => 'ward_id',
            'label' => 'Phường/xã',
            'placeholder' => 'Chọn phường/xã',
            'options' => arrayToOptions($wards ?? [], 'name', 'xaid'),
        ],
        [
            'element' => 'input',
            'col' => 4,
            'name' => 'street',
            'label' => 'Địa chỉ'
        ],
        [
            'element' => 'select',
            'col' => 4,
            'name' => 'role',
            'label' => 'Phân quyền',
            'placeholder' => 'Chọn phân quyền',
            'options' => App\Enums\UserRole::asSelectArray(),
        ],
        [
            'element' => 'select',
            'col' => 4,
            'name' => 'group_id',
            'label' => 'Nhóm vận chuyển',
            'placeholder' => 'Chọn nhóm',
            'options' => arrayToOptions($groups, 'name', 'id'),
        ],
        [
            'element' => 'input',
            'col' => 4,
            'name' => 'position',
            'label' => 'Chức vụ'
        ],
        [
            'element' => 'divider',
            'text' => 'Mật khẩu mặc định',
        ],
        [
            'element' => 'input',
            'col' => 4,
            'name' => 'password',
            'label' => 'Mật khẩu',
            'type' => 'password'
        ],
        [
            'element' => 'input',
            'col' => 4,
            'name' => 'password_confirmation',
            'label' => 'Xác nhận mật khẩu',
            'type' => 'password'
        ],
    ],
    'data' => $data ?? null
])
@endsection
