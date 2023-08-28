<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //     public function addToCart(Request $request, $productId)
    // {
    //     // Retrieve the user's cart (you might need to implement this)
    //     $cart = Cart::where('user_id', auth()->id())->firstOrFail();

    //     // Add the product to the cart
    //     $cart->products()->attach($productId);

    //     return response()->json(['success' => true]);
    // }

    public function index()
    {

        if (!empty(Auth::user())) {

            $products = Cart::where('email', Auth::user()->email)->get();
            return view('user.cart', compact('products'));
        }
        return redirect()->route('login');
    }
    public function add_cart($id)
    {

        if (!empty(Auth::user())) {
            $product = Product::find($id);

            if (!empty($product)) {
                $cart = new Cart;
                $cart->name = $product->name;
                $cart->user_name = Auth::user()->name;
                $cart->email = Auth::user()->email;

                $cart->price = $product->price;
                $cart->image = $product->image;
                $cart->category = $product->category;
                $cart->original_price = $product->original_price;
                $cart->discount_price = $product->discount_price;
                $cart->save();
            }
            return redirect()->back();
        }
        return redirect()->route('login');
        // return view('user.cart');
    }
    public function delete_cart($id){
        $product = Cart::find($id);
        if(!empty($product)){
            $product = Cart::find($id)->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }
}
