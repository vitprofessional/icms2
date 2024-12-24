<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\configurationManage;
use Hash;

class cofigurationController extends Controller
{
    public function adminLogin(){
        $config = configurationManage::all();
        if(!empty($config) && count($config)>0):
            return view('setting.adminLogin');
        else:
            return  redirect(route('configurationView'))->with('error','Please install your server to manage the system');
        endif;
    }

    public function adminLoginConfirm(Request $requ){
        $chk = configurationManage::where(['userId'=>$requ->userId])->first();
        if(!empty($chk) && count($chk)>0):
            $pass = Hash::check($requ->pass,$chk->pass);
            if($pass):
                return redirect(route('newAdmission'));
            else:
                return back()->with('error','Wrong password provided');
            endif;
        else:
            return back()->with('error','No user exist');
        endif;
    }

    public function configurationView(){
        $config = configurationManage::all();
        if(!empty($config) && count($config)>0):
            return redirect(route('adminLogin'))->with('error','Please enter your password for login to system panel');
        else:
            return view('setting.configuration');
        endif;
    }
//save configuration
    public function saveConfiguration(Request $requ){
        $chk = configurationManage::where(['userId'=>$requ->userId])->get();
        if(!empty($chk) && count($chk)>0):
            return back()->with('error','User already exist');
        else:
            $data = new configurationManage();

            $data->institute        = $requ->institute;
            $data->location         = $requ->location;
            $data->mail             = $requ->mail;
            $data->mobile           = $requ->mobile;
            $data->userId           = $requ->userId;
            if(empty($requ->pass)):
                return back()->with('error','Please enter a password for next login');
            else:
                $hashPass           = Hash::make($requ->pass);
                $data->pass         = $hashPass;
            endif;
            $data->status           = "Active";
            $data->adminType        = "Super Admin";

            if($data->save()):
                return back()->with('success','User saved sucessfully');
            else:
                return back()->with('error','An error ocoured! please try later');
            endif;
        endif;
    }
}
