<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayRequest extends FormRequest
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
          'title'  =>  'min:5|max:100|required',
          'rut'  =>  'min:10|max:10|required',
          'pay'  =>  'min:5|max:6|required'
      ];
    }
}
