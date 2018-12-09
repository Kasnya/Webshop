<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function list_all()
    {
        $products = Termekek::all();
 
        return view('product/list', ['products' => $products]);
    }

    public function list($kategoria_id)
    {
        $products = DB::select('select * from termekek where kat_id = ?', array($kategoria_id));

        return view('product/list', ['products' => $products]);
    }
}