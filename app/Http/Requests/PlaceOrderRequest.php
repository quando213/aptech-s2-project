<?php

namespace App\Http\Requests;

use App\Enums\OrderPaymentMethod;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlaceOrderRequest extends FormRequest
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
            'shipping_name' => 'required',
            'shipping_street' => 'required',
            'shipping_district_id' => 'required',
            'shipping_ward_id' => 'required',
            'shipping_phone' => 'required',
            'payment_method' => ['nullable', Rule::in(OrderPaymentMethod::getValues())]
        ];
    }
}
