<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newAdmission;
use App\Models\classManage;
use App\Models\sectionManage;
use File;


class admissionController extends Controller
{

    public function newAdmission(){
        $classDetails = classManage::all();
        $sectionDetails= sectionManage::all();
        return view('admission.newAdmission',['classDetails'=>$classDetails,'sectionDatails'=>$sectionDetails]);
    }

    public function studentList(){
        $studentData= newAdmission::all();
        return view('admission.studentList',['stdDetails'=>$studentData]);
    }

    public function saveAdmission(Request $requ){
        $chk = newAdmission::where(['rollNumber'=>$requ->rollNumber,'className'=>$requ->className,'sessName'=>$requ->sessName,'sectionName'=>$requ->sectionName])->get();
        if(!empty($chk) && count($chk)>0):
            return back()->with('error','Data already exist');
        else:
            $data = new newAdmission();

            $data->fullName         = $requ->fullName;
            $data->sureName         = $requ->sureName;
            $data->father           = $requ->fatherName;
            $data->mother           = $requ->motherName;
            $data->gender           = $requ->gender;
            $data->dob              = $requ->dob;
            $data->blGroup          = $requ->blGroup;
            $data->religion         = $requ->religion;
            $data->address          = $requ->address;
            $data->mail             = $requ->mail;
            $data->phone            = $requ->phone;
            $data->sessName         = $requ->sessName;
            $data->className        = $requ->className;
            $data->sectionName      = $requ->sectionName;
            $data->rollNumber       = $requ->rollNumber;
            $data->gurdianName      = $requ->gurdian;
            $data->gurdianMobile    = $requ->gurdianPhone;
            $data->relationGurdian  = $requ->relationWithStd;
            $data->status           = "newProfile";
            if(!empty($requ->avatar)):
                $stdAvatar = $requ->file('avatar');
                $newAvatar = rand().date('Ymd').'.'.$stdAvatar->getClientOriginalExtension();
                $stdAvatar->move(public_path('upload/image/student/'),$newAvatar);

                $data->avatar = $newAvatar;
            endif;


            if($data->save()):
                return back()->with('success','Data saved sucessfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
    }


    public function viewAdmission($id){
        $singleData= newAdmission::find($id);
        return view('admission.viewAdmission',['singleData'=>$singleData]);
    }

    public function editAdmission($id){
        
        $classDetails = classManage::all();
        $sectionDetails= sectionManage::all();
        $editData= newAdmission::find($id);
        return view('admission.editAdmission',['classDetails'=>$classDetails,'sectionDatails'=>$sectionDetails,'editData'=>$editData]);
    }

    //update
    public function updateAdmission(Request $requ){
            $upData = newAdmission::find($requ->admissionId);

                $upData->fullName         = $requ->fullName;
                $upData->sureName         = $requ->sureName;
                $upData->father           = $requ->fatherName;
                $upData->mother           = $requ->motherName;
                $upData->gender           = $requ->gender;
                $upData->dob              = $requ->dob;
                $upData->blGroup          = $requ->blGroup;
                $upData->religion         = $requ->religion;
                $upData->address          = $requ->address;
                $upData->mail             = $requ->mail;
                $upData->phone            = $requ->phone;
                $upData->sessName         = $requ->sessName;
                $upData->className        = $requ->className;
                $upData->sectionName      = $requ->sectionName;
                $upData->rollNumber       = $requ->rollNumber;
                $upData->gurdianName      = $requ->gurdian;
                $upData->gurdianMobile    = $requ->gurdianPhone;
                $upData->relationGurdian  = $requ->relationWithStd;
            
            if($upData->save()):
                return redirect(route('studentList'))->with("success");
            else:
                return back()->with("error");
            endif;

     }
     
    //delelte 
    public function dltAdmission($id){
        $dltData = newAdmission::find($id);

        if($dltData->delete()):
            return back()->with('success','data entry successfully');
        else:
            return back()->with('error','data deletion failed');
        endif;
    
     }


}
