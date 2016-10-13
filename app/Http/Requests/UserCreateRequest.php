<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'social.*' => 'url',
            'skills' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'social.*' => 'Seu puto, os campos de redes sociais devem ser links.'
        ];
    }
}
