<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function messages ()
    {
        return [
            'title.required' => 'O campo título é obrigatório',
            'content.required' => 'O campo artigo/post é obrigatório'
        ];
    }
}
