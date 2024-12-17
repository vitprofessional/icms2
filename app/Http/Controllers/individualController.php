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
        $savedata = new sessionManage();
        
        $savedata -> session = $requ->session;

        if($savedata->save()):
            return back()->with('success','Data entry successfully');
        else:
            return back()->with('error','Data entry failed');
        endif;
        
    }
    //add class
    public function classForm(){
        return view('individualPart.classForm');
    }

    //save class 
    public function saveClass(Request $requ){
        $savedata = new classManage();
        
        $savedata -> className = $requ->className;

        if($savedata->save()):
            return back()->with('success','Data entry successfully');
        else:
            return back()->with('error','Data entry failed');
        endif;
        
    }
    
    //add section
    public function sectionForm(){
        return view('individualPart.sectionForm');
    }


    //save section 
    public function saveSection(Request $requ){
        $savedata = new sectionManage();
        
        $savedata -> section = $requ->section;

        if($savedata->save()):
            return back()->with('success','Data entry successfully');
        else:
            return back()->with('error','Data entry failed');
        endif;
        
    }
}
