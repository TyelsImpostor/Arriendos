<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

//Resticciones para el llenado de los campos de los usaurios

    public function rules()
    {
        return [
            'name'  =>  'min:5|max:100|required',
            'email' =>  'min:5|max:100|required|unique:users',
            'password'  =>  'min:5|max:100|required'
        ];
    }
}
