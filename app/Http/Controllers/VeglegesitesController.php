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
        $rendelesi_datum = Carbon::now();

        $rendeles= Rendelesek::create([
            'user_id' => Auth::user()->id,
            'rendelesi_datum' => $rendelesi_datum,
            'szallitasi_koltseg' => Cart::total(),
            'statusz'=>'ok'
        ]);
        
        $rendeles_id = DB::table('rendelesek')->select('id')->where('user_id', '=', Auth::user()->id)->where('rendelesi_datum', '=', $rendelesi_datum)->value('id');
        
        
        foreach (Cart::content() as $termek=>$value)
        {
            RendeltTermekek::create([
                'rendeles_id'=>$rendeles_id,
                'termek_id'=>$value->id,
                'mennyiseg'=>$value->qty,
                'ar'=>$value->price
            ]);

        }
          

        

        
        
        Cart::destroy();
        return redirect()->route('home')->withErrors(['Sikeres Vásárlás', 'Sikeres vásárlás']);
      
    }
}
    