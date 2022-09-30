<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
    public function register(){
        return view('users.register');
    }

    public function store_users(Request $request){
       $fields = $request->validate([
        'name'=>['required', 'min:3'],
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed']

       ]);

       $fields['password'] = bcrypt($fields['password']);

       $user = User::create($fields);
       auth()->login($user);

       return redirect('/')->with('message', "Logged In");

    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
       
    }


    public function login(){
        return view('users.login');
    }


    public function authenticate(Request $request){
        $fields = $request->validate([
            'name'=>['required'],
            'password' => ['required']
    
           ]);
    
        if(auth()->attempt($fields)){
            $request->session()->regenerate();

            dd($request);

            return redirect('/')->with('message',"Logged In");

        }

        return redirect('/login')->with('message',"Invalid Credentials");
    

        
    }
}
