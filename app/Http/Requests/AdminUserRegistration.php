<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRegistration extends FormRequest
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
        return  [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return[
            'first_name.required' => 'First Name Cannot be Empty.',
            'last_name.required' => 'Last Name Cannot be Empty.',
            'email.required' => 'Email Cannot be Empty.',
            'password.required' => 'Password Cannot be Empty.',
            'confirmed' => 'Confirm password should be same.',
            'min' => 'Password should be min 8 char.'
        ];
    }
}
