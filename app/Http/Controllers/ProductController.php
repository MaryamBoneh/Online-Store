<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Star;

class ProductController extends Controller
{

    function get_all_for_client(){
        $products = Product::paginate(6);

        return view("products",[
            "products" => $products
        ]);
    }

    function get_all_for_admin(){
        $products = Product::all();

        return view("admin.products.products",[
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
        $product = Product::find($id);

        return view("product",[
            "product" => $product,
        ]);
    }

    function get_by_category($category_id){

    }
    
    function add_rating(Request $request){

        $stars = Star::where('user_id', '=', Auth::id())->where('product_id', '=', $request['product_id']);

        if($stars->count() == 0) 
        {
            $star = new Star();
            $star->user_id = Auth::id();
            $star->product_id = $request["product_id"];
            $star->score = $request["score"];
            $star->save();
        }
        else 
        {
            $star = $stars->first();
            $star->score = $request["score"];
            $star->update();
        }
        
        return $request["score"];
    }
    
    function add_get(){
        return view('admin.products.add_product');
    }
    
    function add_post(Request $request){

        $new_product = new Product();
        $new_product->name = $request["name"];
        $new_product->price = $request["price"];
        $new_product->description = $request["description"];
        $new_product->save();
        
        $new_image = new Image();
        $new_image->url = $request["image"];
        
        $new_product->images()->save($new_image);
        
        return redirect('admin.products.products');
    }

    function edit(){

    }

    function delete(){

    }
}
