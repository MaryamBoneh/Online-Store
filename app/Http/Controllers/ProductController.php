<?php

namespace App\Http\Controllers;

use App\DTO\ProductDTO;
use App\Http\Requests\ProductRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

/**
 *
 */
class ProductController extends Controller
{

    function get_all_for_client(){
        $products = Product::all();

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
            "categories" => $categories
        ]);
    }

    function product_details($id){
        $product = Product::find($id);

        return view("product",[
            "product" => $product,
        ]);
    }

    function get_by_category($category_id){
        $products = Category::query()->where('category_id', '=', $category_id)->get();

        return view("product",[
            "product" => $products,
        ]);
    }

    function add_get(){
        return view('admin.products.add_product');
    }


    /**
     * @param ProductRequest $request
     * ProductRequest is validation file
     * DTO => Data Transfer Object you should read about this
     */
    function add_post(ProductRequest $request, ProductDTO $DTO){

        $new_product = new Product();
        $new_product_data = $DTO->getArray($request->validated());
        $new_product->create($new_product_data);
//        $new_product = new Product();
//        $new_product->name = $request["name"];
//        $new_product->price = $request["price"];
//        $new_product->description = $request["description"];
//        $new_product->save();

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
