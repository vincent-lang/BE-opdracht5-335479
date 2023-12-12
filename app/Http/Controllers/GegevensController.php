<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index()
    {
        return view('snoep.index');
    }
}
