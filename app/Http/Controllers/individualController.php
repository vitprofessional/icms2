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
        return view('individualPart.sessionForm'); 
    }
    
    //save session 
    public function saveSession(Request $requ){
        $chkData = sessionManage::where(['session'=>$requ->session])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $savedata = new sessionManage();
            
            $savedata -> session = $requ->session;

            if($savedata->save()):
                return back()->with('success','Data saved successfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
        
    }
    //add class
    public function classForm(){
        return view('individualPart.classForm');
    }

    //save class 
    public function saveClass(Request $requ){

        $chkData = classManage::where(['className'=>$requ->className])->get();

        if(!empty($chkData) && count($chkData)>0):
            return back()->with('error','Data entry failed');
        else:
            $savedata = new classManage();
            
            $savedata -> className = $requ->className;

            if($savedata->save()):
                return back()->with('success','Data saved successfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
        
    }
    
    //add section
    public function sectionForm(){
        return view('individualPart.sectionForm');
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
}
