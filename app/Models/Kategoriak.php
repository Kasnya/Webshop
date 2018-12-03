<?php

namespace App\Models;

use App\Termekek;
use Illuminate\Database\Eloquent\Model;



class Kategoriak extends Model
{
    protected $table ='kategoriak';

    protected $fillable=[
        'kat_nev'
              
    ];
    
    public function termekek(){
        return $this->hasMany(Termekek::class,'id');
    }

    
}
