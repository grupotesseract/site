<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UploadPhotoRequest extends Request
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
            'owner_id' => 'required|exists:users,id',
            'owner_type' => 'required|string',
            'file' => 'required|image|mimes:jpeg,jpg,bmp,png|max:12000',
        ];
    }
}
