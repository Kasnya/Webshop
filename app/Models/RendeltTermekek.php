<?php

namespace App\Models;

use App\Rendelesek;
use Illuminate\Database\Eloquent\Model;



class RendeltTermekek extends Model
{
    protected $table ='rendelt_cuccok';

    protected $fillable=[
        'rendeles_id',
        'termek_id',
        'mennyiseg',
        'ar'
        
    ];
    private static $this= '';
    
    public static function rendelesek(){
        return static::$this->hasMany(Rendelesek::class,'id');
    }

    
}
