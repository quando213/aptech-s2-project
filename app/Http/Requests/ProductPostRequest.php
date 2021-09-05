<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPostRequest extends FormRequest
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
            'name'=>['required','min:2'],
            'price'=>['required','numeric'],
            'thumbnail'=>['required','max:2048'],
            'category_id'=>['required','numeric'],
            'stock'=>['required','numeric'],
            'description'=>['required','min:5'],
            'unit'=>['required','numeric','max:5'],
            'quantity'=>['required','numeric'],
            'origin'=>['required','min:2'],
            'brand'=>['required','min:2'],
        ];
    }
}
