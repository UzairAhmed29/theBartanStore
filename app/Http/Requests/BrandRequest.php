<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required|mimes:jpg,jpeg,png,gif'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Brand Image is required!',
            'image.mimes' => 'Brand Image must be of the following file type: JPG, JPEG, PNG or GIF',
        ];
    }
}
