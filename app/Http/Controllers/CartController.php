<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Termekek;

class CartController extends Controller
{

    public function add(Termekek $termek) {
       $item = Cart::add($termek, 1);
       Cart::setTax($item->rowId, $termek->afa_kulcs);
        return back();
    }

    public function index()
    {
     return view('kosar.index');
    }

    public function clear()
    {
        Cart::destroy();
        return redirect()->route("cart.index");
    }
}