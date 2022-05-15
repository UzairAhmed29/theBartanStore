<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'fname'             => 'required',
            'country'           => 'required',
            'addressline1'      => 'required',
            'country'           => 'required',
            'city'              => 'required',
            'zipcode'       	=> 'required',
            'phone'             => 'required',
        ];
    }

    public function messages()
    {
        return [
            'addressline1.required'            => 'The Address Field is required',
            'fname.required'              	 => 'Name is required!',
            'city.required'               	=> 'City is required!',
            'phone.required'              	 => 'Phone is required!',
            'zipcode.required'              	=> 'Postal / Zip Code is required!',
        ];
    }
}
