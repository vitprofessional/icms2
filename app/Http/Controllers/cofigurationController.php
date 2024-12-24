<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\configurationManage;

class cofigurationController extends Controller
{
    public function configurationView(){
        return view('setting.configuration');
    }
//save configuration
    public function saveConfiguration(Request $requ){
        $chk = configurationManage::where(['userId'=>$requ->userId,'pass'=>$requ->pass])->get();
        if(!empty($chk) && count($chk)>0):
            return back()->with('error','User already exist');
        else:
            $data = new configurationManage();

            $data->institute        = $requ->institute;
            $data->location         = $requ->location;
            $data->mail             = $requ->mail;
            $data->mobile           = $requ->mobile;
            $data->userId           = $requ->userId;
            $data->pass             = $requ->pass;
            $data->status           = "newProfile";
            if($data->save()):
                return back()->with('success','User saved sucessfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
    }
}
