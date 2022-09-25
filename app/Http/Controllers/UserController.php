<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\City;
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
        else
        {
            return redirect('/login')->with([
                "message" => "نام کاربری یا کلمه عبور اشتباه است."
            ]);
        }
        
    }

    function register_get()
    {        
        $cities = City::all();

        return view('register')->with([
            "cities"=>$cities
        ]);
    }
    
    function register_post(Request $request)
    {
        $this->validate($request,[
            'mobile_number'=>'required|unique:users',
            'name'=>'required|max:120',
            'email'=>'required|unique:users',
            'password'=>'required|min:8',
            'password2'=>'required|same:password',
        ]);
        
        $new_user = new User();
        $new_user->name = $request["name"];
        $new_user->mobile_number = $request["mobile_number"];
        $new_user->email = $request["email"];
        $new_user->city_id = $request["city"];
        $new_user->address = $request["address"];
        $new_user->password = bcrypt($request["password"]);
        $new_user->save();

        return redirect('\login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
