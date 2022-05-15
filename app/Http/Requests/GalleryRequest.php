<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'product_id' => 'required',
            'image_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image_type.required' => 'Image type is required', 
            'product_id.required' => 'Product is required', 
        ];
    }
}
