<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'phone' => 'required',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'phone.required'      => trans('admin.error_message.phone_required'),
            'password.required'  => trans('admin.error_message.password_required'),
        ];
    }
}
