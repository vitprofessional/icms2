<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\configurationManage;
use Session;

class settingController extends Controller
{
    public function configurationEdit(){
        $configId = configurationManage::find(Session::get('adminSession'));
        return view ('setting.editConfiguration',['configData'=>$configId]); 
    }
}
