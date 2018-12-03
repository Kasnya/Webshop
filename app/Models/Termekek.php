<?php

namespace App\Models;

use App\Kategoriak;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;


class Termekek extends Model implements Buyable
{
    protected $table ='termekek';

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

    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {

        return $this->termek_nev;
    }
    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->netto_ar;
    }

    
}
