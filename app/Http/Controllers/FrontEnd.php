<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentRegister;
use App\Models\geustRegister;
use App\Models\adminPanel;
use Hash;
use Session;

class FrontEnd extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function tutionFee(){
        return view('tuition.tuitionFeesFrom');
    }

    public function newAdmission(){
        return view('admission.newAdmission');
    }

    public function logout(){
        Session()->invalidate();
        Session()->regenerateToken();
        Session()->flush();

        return redirect(route('adminLogin'))->with('error','Logout successful');
    }
}
