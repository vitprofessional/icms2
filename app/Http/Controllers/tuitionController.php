<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sectionManage;
use App\Models\classManage;
use App\Models\sessionManage;


class tuitionController extends Controller
{
    // tuition form page
    public function tutionFee(){
        $sectionDetails= sectionManage::all();
        $classDetails= classManage::all();
        $sessionDetails = sessionManage::all();
        return view('tuition.tuitionFeesFrom',['sectionData'=>$sectionDetails,'classData'=>$classDetails,'sessionData'=>$sessionDetails]);
    }
    
    // tution Fee List
    public function tutionFeeList(){
        return view('tuition.tuitionFeesList');
    }
}
