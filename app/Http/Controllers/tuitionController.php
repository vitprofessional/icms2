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
    public function tuitionFee(){
        $sectionDetails= sectionManage::all();
        $classDetails= classManage::all();
        $sessionDetails = sessionManage::all();
        return view('tuition.tuitionFeesFrom',['sectionData'=>$sectionDetails,'classData'=>$classDetails,'sessionData'=>$sessionDetails]);
    }

    public function saveTuitionfee(Request $requ){
        $saveData = new tuitionFee();
         
        $saveData->session         = $requ->session;
        $saveData->className       = $requ->className;
        $saveData->section         = $requ->section;
        $saveData->stdName         = $requ->stdName;
        $saveData->rollNumber      = $requ->rollNumber;
        $saveData->amount          = $requ->amount;


        if($saveData->save()):
            return back()->with('success','Data saved sucessfully');
        else:
            return back()->with('error','An error ocoured! please try later');
        endif;
    }
    
    // tution Fee List
    public function tuitionFeeList(){

        $tutionfeeData = tuitionFee::all();
        return view('tuition.tuitionFeesList',['tfd'=>$tutionfeeData]);
    }

    public function tuitionFeeView($id){
        $singleData = tuitionFee::find($id);
        return view('tuition.viewTutionFee',['singleView'=>$singleData]);
    }

}
