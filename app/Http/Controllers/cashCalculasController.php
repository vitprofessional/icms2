<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cashCalculasController extends Controller
{
    public function cashCalculas(){
        return view('cashCalculas.cashCalculasPage');
    }
}
