<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ValidationRegisterUserForm;

use function Laravel\Prompts\error;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    
    public function registerAuth(ValidationRegisterUserForm $request)
    {   
        $credentials = [
            'nome'=> $request->nome,
            'email' => $request->email,
            'password' => $request->password,
            //'categoria_id'=> $request->categoria_id
        ];

        $userExists = User::whereIn('email',[$credentials['email']]);
        if ($userExists) {
            redirect()->route('login')->with(session()->flash('status', 
            [
                'type'=> 'UserExists',
                'message'=> 'Usuário já existente.'
            ]));
        }
        
        $validatedData = $request->validated();

        if ($validatedData){
            $user = new User();
            $user->nome = $credentials['nome'];
            $user->email = $credentials['email'];
            $user->password = bcrypt($credentials['password']);
            $user->save();
            return redirect()->route('login')->with('status', 
            ['type'=> 'sucessRegister'
            ,'message' => 'Usuário criado com sucesso!'
            ]);
        }

    }
}
