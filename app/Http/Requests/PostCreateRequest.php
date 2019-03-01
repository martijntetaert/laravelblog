<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title'=>'required|string',
            'body'=>'required|string',
            'category_id'=>'required',

        ];
    }
    public function messages()
    {
        return[
            'title.required'=>'title is required',
            'body.required'=>'body is required',
            'category_id.required'=>'category_id is required',
        ];
    }
}
