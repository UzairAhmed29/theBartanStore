<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'new_confirm_password' => 'required|same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'current_password.required'          => 'Current Passsword is required!',
            'new_password.required'              => 'New Password is required!',
            'new_confirm_password.required'      => 'Confirm Password is required!',
        ];
    }
}
