<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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

//Resticciones para el llenado de los campos de los articulos

    public function rules()
    {
        return [
            'title'  =>  'min:5|max:100|required',
            'category_id'  =>  'required',
            'content'  =>  'min:5|max:150|required',
            'region'  =>  'required',
            'image'  =>  'max:5000|image'
        ];
    }
}
