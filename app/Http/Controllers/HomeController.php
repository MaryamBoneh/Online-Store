<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
    function index(){
        $categories = Category::all();
        // $products = Product::all();
        $products = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);


        return view("index",[
            "categories"=>$categories,
            "products"=>$products
        ]);
    }

    function faq(){
        return view ('index');
    }
}
