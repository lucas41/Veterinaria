<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize() { 
        return true;
    }
    public function rules()
    {
        return [
            'nome' => 'required|min:5|max:15',
            'raca' => 'required|min:5|max:15', 
        ];
    }
    public function messages() { 
        return [ 
            'required' => 'O campo :attribute é obrigatório', 
            'min' => 'O campo :attribute precisa ter no mínimo 5 caracteres', 
            'max' => 'O campo :attribute não pode ter mais do que 15 caracteres', 
           ]
            ;
    }
}

