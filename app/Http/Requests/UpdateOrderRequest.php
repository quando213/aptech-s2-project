<?php

namespace App\Http\Requests;

use App\Enums\OrderPaymentMethod;
use App\Enums\OrderStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOrderRequest extends FormRequest
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
            'payment_method' => ['required', Rule::in(OrderPaymentMethod::getValues())],
            'status' => ['required', Rule::in(OrderStatus::getValues())],
            'shipper_id' => 'nullable'
        ];
    }
}
