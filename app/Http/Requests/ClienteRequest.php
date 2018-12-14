<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
      return [
        'nome' => 'required|min:3|max:255',
        'data_nascimento'=> 'required|date|max:150',
        'cep'=> 'required|max:150',
        'email'=> 'required|email|max:150',
        'telefone'=> 'required|string|max:15',
        'celular'=> 'required|string|max:15',
        'matricula'=> 'required|string|max:150',
        'login'=> 'required|string|max:150',
        'password'=> 'required|max:150',

      ];
    }
}
