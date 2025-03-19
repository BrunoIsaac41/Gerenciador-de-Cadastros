<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use League\Uri\QueryString;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function loginAuth(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
       

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withInput()->with(session()->flash('status', 
        ['type'=> 'error'
        ,'message' => 'Login inválido!'
    ]));
    }

}