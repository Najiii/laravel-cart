<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // GET
    public function show() {
        $matchThese = ["user_id" => auth()->user()->id];

        $cart = Cart::select('products.*', 'carts.*')->where($matchThese)->join('products', 'products.id', '=', 'carts.product_id')->get('products.*');


        return view('cart.index', compact('cart'));
    }

    // GET
    public function store(Request $req) {
        Cart::insert([
            "user_id" => auth()->user()->id,
            "product_id" => $req->pID,
        ]);

        return redirect('cart/show');
    }

    // DELETE
    public function delete(Request $req) {
        Cart::findOrfail($req->cID)->delete();

        return redirect('cart/show');
    }
}
