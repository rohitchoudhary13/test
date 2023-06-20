<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'mobile' => 'required|unique:users|digits:10',
            'email' => 'required|unique:users|email:rfc',
        ];
    }

    public function messages()
    {
        return [
            'mobile.unique' => 'The mobile already exists',
            'email.unique' => 'The email already exists',
        ];
    }
}
