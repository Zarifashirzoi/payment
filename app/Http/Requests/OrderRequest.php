<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name_on_card" => 'required',
            "card_number" => 'required',
            "exp_date" => 'required',
            "city" => 'required',
            "state" => 'required',
            "zip_code" => 'required',
            "street_address" => 'required',
            "cvv" => 'required',
            "unit" => 'required',
            "country_id" => "required",
            "product_id" => 'required'
        ];
    }
}
