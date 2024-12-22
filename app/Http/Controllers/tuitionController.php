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

    //edit tiutionfee
    public function editTuitionFee($id){
        $sectionData= sectionManage::all();
        $classData= classManage::all();
        $sessionData = sessionManage::all();
        $tuitionFeeData = tuitionFee::find($id);    
        return view('tuition.editTuitionFee',['editData'=>$tuitionFeeData,'sectionDetails'=>$sectionData,'classDetails'=>$classData ,'sessionDetails'=>$sessionData ]);
    }

    //update tiutionfee 
    public function updateTuitionFee(Request $requ){
            $updateData =  tuitionFee::find($requ->tuitionFeeId);
            $updateData->session         = $requ->session;
            $updateData->className       = $requ->className;
            $updateData->section         = $requ->section;
            $updateData->stdName         = $requ->stdName;
            $updateData->rollNumber      = $requ->rollNumber;
            $updateData->amount          = $requ->amount;

            if($updateData->save()):
                return redirect(route('tuitionFeeList'))->with("success",'update successfully');
            else:
                return back()->with("error",'Data update failed');
            endif;
    
    }

    //delelte 
    public function dltTuitionFee($id){
        $dltData = tuitionFee::find($id);

        if($dltData->delete()):
            return back()->with('success','data entry successfully');
        else:
            return back()->with('error','data deletion failed');
        endif;
    
     }

}
