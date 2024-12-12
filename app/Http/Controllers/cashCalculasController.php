<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cashCalculasController extends Controller
{
    public function cashCalculasView(){
        return view('cashCalculas.cashCalculasPage');
    }

    public function reportListView(){
        return view('cashCalculas.reportList');
    }
}
