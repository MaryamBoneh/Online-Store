<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    function get_all_products(){
        $products = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url']);

        return view("products",[
            "products" => $products
        ]);
    }

    function get_categories(){
        $categories = Category::all();

        return view("index",[
            "categories" => $products
        ]);
    }
   
    function product_details($id){
        $product = Product::join('images','products.id','=','images.product_id')->get(['products.*','images.url'])->find($id);

        return view("product",[
            "product" => $product,
        ]);
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
