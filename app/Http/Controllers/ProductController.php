<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;

class ProductController extends Controller
{

    function index(){
        $products = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);
        $categories = Category::all();

        return view("index",[
            "categories"=>$categories,
            "products"=>$products
        ]);
    }

    function get_products(){
        $products = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);

        return view("index",[
            "products"=>$products
        ]);
    }

    function get_categories(){
        $categories = Category::all();

        return view("index",[
            "categories"=>$products
        ]);
    }
   
    function product_detail(){
        return view('product');
    }

    function get_by_category($category_id){

    }

    function add(){
        
    }

    function edit(){

    }

    function delete(){

    }
}
