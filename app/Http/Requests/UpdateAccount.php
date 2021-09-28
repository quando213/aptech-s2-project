<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAccount extends FormRequest
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
            'password' => ['nullable', 'confirmed', 'min:6'],
            'password_current' => ['nullable', 'required_with:password', 'min:6'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'ward_id' => ['required'],
            'district_id' => ['required'],
            'street' => ['required'],
        ];
    }
}
