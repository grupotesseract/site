<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserEditRequest extends Request
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
        $user = Request::all();
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user['id'],
            'role_id' => 'required',
            'social.*' => 'url',
            'institution' => 'required',
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
