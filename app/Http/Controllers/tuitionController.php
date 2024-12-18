<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tuitionController extends Controller
{
    // tuition form page
    public function tutionFee(){
        return view('tuition.tuitionFeesFrom');
    }
    
    // tution Fee List
    public function tutionFeeList(){
        return view('tuition.tuitionFeesList');
    }
}
