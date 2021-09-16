<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'min:1', 'max:10'],
            'last_name' => ['required', 'min:2', 'max:10'],
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => ['required'],
            'confirmpassword' => ['required'],
            'district_id' => ['required'],
            'ward_id' => ['required'],
            'street' => ['required'],
            'phone' => ['required'],

        ];
    }
    public function messages()
    {
        return [
            'first_name.required'=>'vui lòng nhập Tên',
            'first_name.min'=>'Tên không được ngắn hơn 1 kí tự',
            'first_name.max'=>'Tên không được dài hơn 10 kí tự',
            'last_name.required'=>'vui lòng nhập Họ',
            'last_name.min'=>'Họ không được ngắn hơn 2 kí tự',
            'last_name.max'=>'Họ không được dài hơn 10 kí tự',
            'email.required'=>'vui lòng nhập email',
            'email.email'=>'vui lòng nhập đúng email',
            'password.required'=>'vui long nhập mật khẩu',
            'confirmpassword.required'=>'vui long nhập lại mật khẩu',
            'district_id.required'=>'vui long Quận  ',
            'ward_id.required'=>'vui long nhập Phường ',
            'street.required'=>'vui long nhập Đường ',
            'phone.required'=>'vui long nhập số điện thoại ',
        ];
    }
}
