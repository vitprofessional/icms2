<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cofigurationController extends Controller
{
    public function configurationView(){
        return view('setting.configuration');
    }
}
