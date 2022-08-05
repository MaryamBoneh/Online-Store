<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login_get()
    {
        return view('login');
    }

    function login_post(Request $request)
    {
        $this->validate($request,[
            'user_name' => 'required',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt(["username" => $request['username'], "password" => $request['password']]))
        {
            return redirect('/profile')->with([
                "message" => "شما با موفقیت وارد حساب کاربری خود شدید"
            ]);
        }
        else{
            return redirect('/profile')->with([
                "message" => "شما با موفقیت وارد حساب کاربری خود شدید"
            ]);
            
        }
        
    }

    function register_get()
    {
        return view('register')->with([
        ]);
    }
    
    function register_post(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|unique:users',
            'user_name' => 'required|unique:users',
            'name' => 'required|max:120',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        
        $new_user = new User();
        $new_user->name = $request['name'];
        $new_user->email = $request['email'];

        return redirect('\login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
