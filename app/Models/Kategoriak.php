<?php

namespace App\Models;

use App\Termekek;
use Illuminate\Database\Eloquent\Model;



class Kategoriak extends Model
{
    protected $table ='felhasznalo_cim';

    protected $fillable=[
        'kat_nev'
              
    ];
    
    public function termekek(){
        return $this->hasMany(Termekek::class,'termek_id');
    }

    
}
