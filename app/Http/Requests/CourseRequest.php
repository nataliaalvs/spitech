<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|numeric',
            'link' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório',
            'description.required' => 'O campo descrição é obrigatório',
            'price.numeric' => 'O campo preço deve ser um número',
            'duration.numeric' => 'O campo duração precisa ser um número',
            'link.required' => 'O campo link é obrigatório'
        ];
    }
}
