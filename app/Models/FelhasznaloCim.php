<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;



class FelhasznaloCim extends Model
{
    protected $table ='felhasznalo_cim';

    protected $fillable=[
        'irszam',
        'varos',
        'utca',
        'hazszam',
        'emelet',
        'ajtoszam'        
    ];
    
    public function user(){
        return $this->belongsTo(User::class,'id');
    }

    
}
