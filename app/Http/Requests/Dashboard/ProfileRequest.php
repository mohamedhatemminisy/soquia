<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this -> id,
            'password'  => 'nullable|confirmed|min:8'
        ];
    }

    public function message(){
        return [
            'name.required'       => 'admin.error_message.name_required',
            'email.required'      => 'admin.error_message.email_required',
            'password.confirmed'  => 'admin.error_message.password_confirmed',
        ];
    }
}
