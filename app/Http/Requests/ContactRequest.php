<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'address'  => 'required',
            'email'    => 'required',
            'phone'    => 'required',
            'code'     => 'required|min:8|max:15',
        ];
    }

    public function messages()
    {
        return [
            'address.required'          => 'Address is required!',
            'email.required'            => 'Email is required!',
            'phone.required'            => 'Phone is required!',
            'code.required'             => 'Code is required!',
            'code.min'                      => 'The code must be at least 8 characters.',
            'code.max'                      => 'The code may not be greater than 15 characters.',
        ];
    }
}
