<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class HomeController extends Controller
{
    function index(){
        return view ('index');
    }

    function faq(){
        return view ('index');
    }
}
