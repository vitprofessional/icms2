<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sectionManage;
use App\Models\classManage;
use App\Models\sessionManage;
use App\Models\tuitionFee;



class tuitionController extends Controller
{
    // tuition form page
    public function tutionFee(){
        $sectionDetails= sectionManage::all();
        $classDetails= classManage::all();
        $sessionDetails = sessionManage::all();
        return view('tuition.tuitionFeesFrom',['sectionData'=>$sectionDetails,'classData'=>$classDetails,'sessionData'=>$sessionDetails]);
    }

    public function saveTutionfee( Request $requ){
        $savetutionfee= new tuitionFee();
         
        $savetutionfee->session         =$requ->session;
        $savetutionfee->className       =$requ->className;
        $savetutionfee->section         =$requ->section;
        $savetutionfee->stdName         =$requ->stdName;
        $savetutionfee->rollNumber      =$requ->rollNumber;
        $savetutionfee->amount          =$requ->amount;


        if($savetutionfee->save()):
            return back()->with('success','Data saved sucessfully');
        else:
            return back()->with('error','An error ocoured! please try later');
        endif;
    }
    
    // tution Fee List
    public function tutionFeeList(){

        $tutionfeeData = tuitionFee::all();
        return view('tuition.tuitionFeesList',['tfd'=>$tutionfeeData]);
    }

}
