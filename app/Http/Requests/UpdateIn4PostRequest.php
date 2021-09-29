<?php

namespace App\Http\Requests;

use App\Enums\UserRole;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateIn4PostRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
//            'email' => ['required', 'email', Rule::unique('users')],
            'district_id'=>['required'],
            'ward_id'=>['required'],
            'street'=>['required'],
            'phone'=>['required'],
            'role'=>['required'],
            'group_id'=>['required_if:role,'.UserRole::SHIPPER],
            'position'=>['required_if:role,'.UserRole::SHIPPER],
        ];
    }
}
