<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admissionController extends Controller
{
    public function newAdmission(){
        return view('admission.newAdmission');
    }
}
