<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            //
            'name'=>'required|string',
            'email'=>'required',
            'role_id'=>'required',

        ];
    }
    public function messages()
    {
        return[
            'email.required'=>'email is required',
            'name.required'=>'name is required',
            'role_id.required'=>'role_id is required',
        ];
    }

}
