<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title'            => 'required',
            'category_id'      => 'required',
            'retailPrice'      => 'required',
            'meta_description' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'title.required'            => 'Title is required!',
            'category_id.required'      => 'Category is required!',
            'retailPrice.required'      => 'The Retail price is required!',
            'meta_description.required' => 'Meta description is required!',
        ];
    }
}
