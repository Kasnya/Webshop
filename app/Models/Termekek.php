<?php

namespace App\Models;

use App\Kategoriak;
use Illuminate\Database\Eloquent\Model;



class Termekek extends Model
{
    protected $table ='felhasznalo_cim';

    protected $fillable=[
        'termek_nev',
        'kat_id',
        'mennyiseg',
        'netto_ar',
        'afa_kulcs',
        'kedvezmeny'
              
    ];
    
    public function kategoria(){
        return $this->belongsTo(Kategoriak::class,'kat_id');
    }

    
}
