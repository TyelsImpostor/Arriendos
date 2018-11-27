<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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

//Resticciones para el llenado de los campos de los tags

    public function rules()
    {
        return [
          'name'  =>  'min:5|max:100|required|unique:tags'
        ];
    }
}
