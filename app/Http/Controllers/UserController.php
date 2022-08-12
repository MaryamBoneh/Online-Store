<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
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
            'mobile_number' => 'required',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt(["mobile_number" => $request['mobile_number'], "password" => $request['password']], $request['remember_me']))
        {
            $id = Auth::id();
            Session::put("user_id", $id);

            return redirect('/')->with([
                "message" => "شما با موفقیت وارد حساب کاربری خود شدید"
            ]);
        }
        // else {
        //     return redirect('/profile')->with([
        //         "message" => "شما با موفقیت وارد حساب کاربری خود شدید"
        //     ]);
        // }
        
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
