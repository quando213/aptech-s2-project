<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupPostRequest extends FormRequest
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
            'name' => ['required','min:5'],
            'ward_id' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên đơn vị',
            'name.min' => 'Tên đơn vi it nhất gồm 5 ký tự',
            'ward_id.required' => 'Vui lòng chọn đơn vị hành chính quản lý',

        ];
    }
}
