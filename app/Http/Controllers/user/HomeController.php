<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Subscriber;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric',
            'message' => 'required',
        ]);

        // Create a new FormData instance and fill it with the validated data
        $message = new Message();
        $message->name = $validatedData['name'];
        $message->email = $validatedData['email'];
        $message->number = $validatedData['number'];
        $message->message = $validatedData['message'];

        // Save the data to the database
        $message->save();

        return redirect()->back()->with('success', 'Message data has been submitted.');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);

        Subscriber::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }


    public function showCategories()
    {
        $categories = Category::all(); // Fetch categories from the database
        return view('user.home', compact('categories'));
    }
  
    public function show_product()
    {
        $products = Product::all(); // Fetch all products from the database

        return view('user.product', compact('products'));
    }

    public function show_homeProduct()
    {
        $products = Product::limit(6)->get(); // Fetch 6 products
        return view('user.home', compact('products'));
    }

    public function showHome()
{
    $products = Product::limit(6)->get();
    $categories = Category::all();

    return view('user.home', compact('products', 'categories'));
}

// Example of a controller method to add a product to favorites



   
}
