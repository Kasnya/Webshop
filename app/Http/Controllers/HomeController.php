<?php

namespace App\Http\Controllers;

use App\Models\Status;

class HomeController extends Controller
{
    public function index() {
        return view('Auth\home.index');
    }
}