<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    function get(){
        $carts = Auth::user()->carts;
        return view('cart')->with([
            "carts" => $carts
        ]);
        return view('cart');
    }

    function add(Request $request)
    {
        $carts = Cart::where("user_id", "=", Auth::id())->where("product_id", "=", $request["product_id"]);

        if($carts->count() == 0) 
        {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $request["product_id"];
            $cart->save();
            return "ok";
        }

        else 
        {
            
        }
    }

    function delete($id)
    {
        $cart = Cart::find($id);
        if(!$cart) 
        {
            $message = 'cart is empty';
            $message_tyoe = 'danger';
        }
        else{
            $cart->delete();
            $message = "The cart has been successfully emptied" ;
            $message_type = "success"; 
        }

        return redirect("/cart")->with([
            "message"=>$message,
            "message_type"=>$message_type
        ]); 
    }
}
