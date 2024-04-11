<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Destinations;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart()
    {
        return view('cart');
    }

    public function removeItem($destinations)
    {
        Cart::remove($destinations);

        if (Cart::isEmpty()) {
            return redirect('/');
        }
        return redirect()->back()->with('message', 'Item removed from cart successfully.');
    }

    public function updatedCart(Request $request){
        $data = Destinations::where('id',$request->destination_id)->with('tags','category')->first();
        $quantity = $request->quantity_input;
        $parts = explode(" ", $data->pricing);
        $lastPart = end($parts);
        if (is_numeric($lastPart) && is_numeric($request->quantity_input)) {
            $cartValue = ($lastPart * $request->quantity_input);
        } else {
            $cartValue = 0;
        }
        return view('updatedCart', compact('data','quantity', 'cartValue'))->with('destinations', Destinations::all())->with('tags', Tag::all())->with('categories', Category::all());;

        // return view('updatedCart', compact('data', 'quantity', 'cartValue'))->with([
        //     'message', 'Item removed from cart successfully.',
        //     'categories', Category::all()
        //      ]);
    }
    public function clearCart()
    {
        Cart::clear();

        return redirect('/');
    }
}

