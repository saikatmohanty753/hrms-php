<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userlogin(Request $request)
    {
        if($request->method() == 'POST')
        {
            $request->validate([
                'username' =>'required',
                'password' => 'required',
            ],[
                'username.required' => 'Username is required',
                'password.required' => 'Please enter a password',
            ]);
            $username = $request->username;
            $password = $request->password;
            if(auth()->attempt(['username' => $username, 'password' => $password, 'is_active' => 1]))
            {
                return redirect()->route('dashboard');
            }else{
                session()->put('error','Invalid username or password');
            }
        }
        return redirect('/')->with('username', $username)->with('password', $password);
    }

    public function logout(){
        auth()->logout();
        session()->flush();
        return redirect('/');
    }
}
