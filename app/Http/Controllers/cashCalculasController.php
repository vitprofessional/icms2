<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cashManage;

class cashCalculasController extends Controller
{
    public function cashCalculasView(){
        return view('cashCalculas.cashCalculasPage');
    }
//cash data send to database
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
 //report list
    public function reportListView(){ 
        $calculasList = cashManage::all();
        return view('cashCalculas.reportList',['cashManageData'=> $calculasList]);
    }

    // report single page
    public function singleView($id){   
        $calculasData = cashManage::find($id);
        return view('cashCalculas.viewCashcalculas',['singleData' => $calculasData]);
    }

}
