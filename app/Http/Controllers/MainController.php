<?php

namespace App\Http\Controllers;

use App\Currency;

class MainController extends Controller
{
    public function index()
    {
        return view('fronts.main.index', ['$dub' => 1]);
    }
}
