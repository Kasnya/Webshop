<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Termekek;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function add(Request $request, Termekek $termek) {
        $db = $request->input("mennyiseg_{$termek->id}");
       $item = Cart::add($termek, $db);
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

    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route("cart.index");

    }
}