<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;


// Create new invoice.
$invoice = new Invoice;

// Set invoice amount.
$invoice->amount(1000);

// Add invoice details: There are 4 syntax available for this.
// 1
$invoice->detail(['detailName' => 'your detail goes here']);
// 2 
$invoice->detail('detailName','your detail goes here');
// 3
$invoice->detail(['name1' => 'detail1','name2' => 'detail2']);
// 4
$invoice->detail('detailName1','your detail1 goes here')
        ->detail('detailName2','your detail2 goes here');

// Create new invoice.
$invoice = (new Invoice)->amount(1000);

// Purchase the given invoice.
Payment::purchase($invoice,function($driver, $transactionId) {
	// We can store $transactionId in database.
});

// Purchase method accepts a callback function.
Payment::purchase($invoice, function($driver, $transactionId) {
    // We can store $transactionId in database.
});

// You can specify callbackUrl
Payment::callbackUrl('http://yoursite.com/verify')->purchase(
    $invoice, 
    function($driver, $transactionId) {
    	// We can store $transactionId in database.
	}
);


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
