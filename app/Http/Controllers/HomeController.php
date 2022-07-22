<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        DB::table('users')
        ->select('users.id','users.name','profiles.photo')
        ->join('profiles','profiles.id','=','users.id')
        ->where(['something' => 'something', 'otherThing' => 'otherThing'])
        ->get();
        return view ('index');
    }

    function faq(){
        return view ('index');
    }
}
