<?php

namespace App\Http\ViewComposers;

use DB;
use Illuminate\View\View;

class FrontViewComposer {

    public function compose(View $view)
    {
        $view->with('kat_nev', DB::select('select * from kategoriak '));
    }
}