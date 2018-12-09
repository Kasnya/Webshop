<?php

namespace App\Models;

use App\RendeltTermekek;
use Illuminate\Database\Eloquent\Model;



class Rendelesek extends Model
{
    protected $table ='rendelesek';

    protected $fillable=[
        'user_id',
        'rendelesi_datum',
        'szallitasi_koltseg',
        'statusz'
              
    ];
    
    public function rendelttermekek(){
        return $this->hasMany(RendeltTermekek::class,'rendeles_id');
    }

    
}
