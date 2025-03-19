<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRegisterUserForm extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'nome'=> 'required|string|max:65',
            'sobrenome' => 'required|string|max:65',
            'email'=>'required|email|unique:users,email|max:65',
            'password'=>'required|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/',
            //'categoria_id'=>'required|int|max:1'
        ];
    }
}
