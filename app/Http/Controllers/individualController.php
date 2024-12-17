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
    public function classForm(){
        return view('individualPart.classForm');
    }

    public function sectionForm(){
        return view('individualPart.sectionForm');
    }
}
