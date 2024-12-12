<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cashManage;

class cashCalculasController extends Controller
{
    public function cashCalculasView(){
        return view('cashCalculas.cashCalculasPage');
    }

    public function reportListView(){
        return view('cashCalculas.reportList');
    }

    public function saveCashCalculas(Request $requ){
        $cash = new cashManage();

        $cash->source       = $requ->source;
        $cash->amount       = $requ->amount;
        $cash->transaction  = $requ->transaction;
        $cash->date         = $requ->date;

        if($cash->save()):
            return back()->with('success','Data entry successfully');
        else:
            return back()->with('error','Data entry failed');
        endif;

    }

}
