<?php

namespace App\Http\Controllers;


use App\Models\product_register;
use App\Models\cart_register;


use Illuminate\Http\Request;

class cartController extends Controller
{





    function index()
    {
        $cartItems = cart_register::content();
        return view('frontend.cart', compact('cartItems'));
    }
    //
    // function addtocart(Request $request)
    // {

    //     // if (Auth()->check()) {




    //     // } else {
    //     //     return redirect('login');
    //     // }



    // }
    public function addToCart($id)
    {
        if (auth()->check()) {
            $product = product_register::find($id);

            cart_register::add([
                'pro_id' => $product->pro_id,
                'user_id' => auth()->id(),
                'pro_qty' => 1,
                'selling_price' => $product->selling_price,
            ]);

            // return back();
            return redirect('cart')->with('success', 'Item added to cart successfully!');
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to add items to the cart.');
        }
    }
}
