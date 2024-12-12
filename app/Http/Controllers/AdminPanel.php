<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentRegister;
use App\Mail\RegisterVerify;
use App\Models\geustRegister;
use Middleware;
use Mail;
use File;

class AdminPanel extends Controller
{
    public function home(){
        return view('admin.home');
    }
}
