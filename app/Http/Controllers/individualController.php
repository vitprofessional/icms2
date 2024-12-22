<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sessionManage;
use App\Models\classManage;
use App\Models\sectionManage;
class individualController extends Controller
{
    //add session
    public function sessionForm(){
        $sessionLi = sessionManage::all();
        return view ('individualPart.sessionForm',['sessionList'=>$sessionLi]); 
    }
    //save session 
    public function saveSession(Request $requ){
        $chkData = sessionManage::where(['session'=>$requ->session])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $savedata = new sessionManage();
            
            $savedata ->session = $requ->session;

            if($savedata->save()):
                return back()->with('success','Data saved successfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
        
    }

    //edit session
    public function editSession($id){
        $sessionData = sessionManage::find($id);
        return view('individualPart.editSession',['editData'=>$sessionData]);
    }

    //update session 
    public function updateSession(Request $requ){
        $chkData = sessionManage::where(['session'=>$requ->session])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $updateData =  sessionManage::find($requ->sessionId);
            $updateData ->session = $requ->session;

            if($updateData->save()):
                return redirect(route('sessionForm'))->with("success",'update successfully');
            else:
                return back()->with("error",'Data update failed');
            endif;
        endif;
    
    }
    
    
    //delelte session
    public function deleteSession($id){
        $dltData = sessionManage::find($id);

        if($dltData->delete()):
            return back()->with('success','data Delete successfully');
        else:
            return back()->with('error','data deletion failed');
        endif;
    
     }
    //add class
    public function classForm(){
        
        $classLi = classManage::all();
        return view('individualPart.classForm',['classList'=>$classLi]);
    }

    //save class 
    public function saveClass(Request $requ){
        $chkData = classManage::where(['className'=>$requ->className])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $savedata = new classManage();
            
            $savedata ->className = $requ->className;

            if($savedata->save()):
                return back()->with('success','Data saved successfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
        
    }

    //edit class
    public function editClass($id){
        $classData = classManage::find($id);
        return view('individualPart.editClass',['editData'=>$classData]);
    }

     //update class 
     public function updateClass(Request $requ){
        $chkData = classManage::where(['className'=>$requ->className])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $updateData =  classManage::find($requ->classId);
            
            $updateData ->className = $requ->className;

            if($updateData->save()):
                return redirect(route('classForm'))->with("success",'update successfully');
            else:
                return back()->with("error",'Data update failed');
            endif;
        endif;
        
    }
    
    //delelte class
    public function deleteClass($id){
        $dltData = classManage::find($id);

        if($dltData->delete()):
            return back()->with('success','data Delete successfully');
        else:
            return back()->with('error','data deletion failed');
        endif;
    
     }

    //add section
    public function sectionForm(){
        $sectionLi = sectionManage::all();
        return view('individualPart.sectionForm',['sectionList'=>$sectionLi]);
    }


    //save section 
    public function saveSection(Request $requ){
       $chkData = sectionManage::where(['section'=>$requ->section])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $savedata = new sectionManage();
            
            $savedata -> section = $requ->section;

            if($savedata->save()):
                return back()->with('success','Data saved successfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
        
    }

    //edit section
    public function editSection($id){
        $sectionData = sectionManage::find($id);
        return view('individualPart.editSection',['editData'=>$sectionData]);
    }

    //update section 
    public function updateSection(Request $requ){
        $chkData = sectionManage::where(['section'=>$requ->section])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $updateData =  sectionManage::find($requ->sectionId);
            $updateData ->section = $requ->section;

            if($updateData->save()):
                return redirect(route('sectionForm'))->with("success",'update successfully');
            else:
                return back()->with("error",'Data update failed');
            endif;
        endif;
    
    }

    //delelte section
    public function deleteSection($id){
        $dltData = sectionManage::find($id);

        if($dltData->delete()):
            return back()->with('success','data Delete successfully');
        else:
            return back()->with('error','data deletion failed');
        endif;
    
     }

}
