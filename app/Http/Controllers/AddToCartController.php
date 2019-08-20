<?php

namespace App\Http\Controllers;

use App\Book_Bank;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddToCartController extends Controller
{
    public function addToCart(Request $request, $book_id){

        $cart = Cart::where('book_id',$book_id)->first();
//        dd($cart);
        if(isset($cart)){
            return redirect()->back()->with(['warning' => 'Product already on cart!']);
        }else{
            $books = Book_Bank::find($book_id);

            $cart_data = [
                'book_id' => $books->id,
//            'order_id' => null,
                'ip_address' => $request->ip(),
                'price' => $books->price,
                'product_quantity' => 1
            ];
            if(Auth::check()){
                $cart_data['user_id'] = Auth::user()->id;
            }
            Cart::insert($cart_data);
            return redirect()->back()->with(['success' => 'Product Successfully added on cart!']);
        }
    }
}
