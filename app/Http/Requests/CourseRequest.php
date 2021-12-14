<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|numeric'
        ];
    }


    public function messages ()
    {
        return [
            'name.required' => 'Este campo é obrigatório',
            'description.required' => 'Este campo é obrigatório',
            'price.required' => 'Este campo é obrigatório',
            'price.numeric' => 'O campo do preço deve ser preenchido com números',
            'duration.required' => 'Este campo é obrigatório',
            'duration.numeric' => 'O campo da duração deve ser preenchido com números'
        ];
    }
}
