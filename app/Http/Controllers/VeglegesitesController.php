<?php

namespace App\Http\Controllers;

use App\Models\Termekek;
use App\Models\Rendelesek;
use App\Models\RendeltTermekek;
use App\User;
use Carbon\Carbon;
use Auth;
use Cart;
use Illuminate\Support\Facades\DB;

class VeglegesitesController extends Controller
{
    public function finally()
    {
        $rendeles= Rendelesek::create([
            'user_id' => Auth::user()->id,
            'rendelesi_datum' =>Carbon::now(),
            'szallitasi_koltseg' =>Cart::total(),
            'statusz'=>'ok',
            


        ]);
        
        
        foreach (Cart::content() as $termek=>$value)
        {
            RendeltTermekek::create([
                'rendeles_id'=>'1',
                'termek_id'=>$value->id,
                'mennyiseg'=>$value->qty,
                'ar'=>$value->price
            ]);

        }
          

        

        
        
        Cart::destroy();
        return redirect()->route('home');
    }
}
    