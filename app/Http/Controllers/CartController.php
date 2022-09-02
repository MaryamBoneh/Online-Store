<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function get(){
        // read from database
        return view('cart');
    }
}
