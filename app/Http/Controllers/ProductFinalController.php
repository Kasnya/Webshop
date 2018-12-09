<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use App\Models\FelhasznaloCim;
use Illuminate\Support\Facades\DB;

class ProductFinalController extends Controller
{
    public function final()
    {
        $products = Termekek::all();
 
        return view('product/ProductFinal');
    }
}
    