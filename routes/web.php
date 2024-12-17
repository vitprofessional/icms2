<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\cashCalculasController;
use App\Http\Controllers\admissionController;
use App\Http\Controllers\individualController;

Route::get('/', function () {
    return view('admin.home');
});

Route::get('/new-admission',[
    FrontEnd::class,
    'newAdmission'
])->name('newAdmission');

Route::get('/tution',[
    FrontEnd::class,
    'tutionFee'
])->name('tutionFee');

//cashCalculas str
Route::get('/cash-calculas-from',[
    cashCalculasController::class,    //cashCalculas main page
    'cashCalculasView'
])->name('cashCalculasView');

Route::get('/get-report',[
    cashCalculasController::class,    //reportList page
    'reportListView'
])->name('reportListView');

Route::get('/single-report/{id}',[
    cashCalculasController::class,    // report single page
    'singleView'
])->name('singleView');


Route::post('/save-cash-calculas',[
    cashCalculasController::class,    //saveCashCalculas brackhand
    'saveCashCalculas'
])->name('saveCashCalculas');

Route::get('/edit-cash-calculas/{id}',[
    cashCalculasController::class,     // edit calculas 
    'editCashCalculas'
])->name('editCashCalculas');

Route::post('/update-cash-calculas',[
    cashCalculasController::class,   //update calculas
    'updateCashCalculas'
])->name('updateCashCalculas');

Route::get('/delete-calculas-data/{id}',[
    cashCalculasController::class,
    'dltCalculasData'
])->name('dltCalculasData');
//cashCalculas end

//individual part str
Route::get('/add-session',[
 individualController::class, //add session
 'sessionForm'
])->name('sessionForm');

Route::post('/save-session',[
    individualController::class, //save session
    'saveSession'
   ])->name('saveSession');


Route::get('/add-class',[
    individualController::class, //add class
    'classForm'
   ])->name('classForm');

   Route::post('/save-class',[
    individualController::class, //save class
    'saveClass'
   ])->name('saveClass');


   Route::get('/add-section',[
    individualController::class, //add section
    'sectionForm'
   ])->name('sectionForm');

   Route::post('/save-section',[
    individualController::class, //add section
    'saveSection'
   ])->name('saveSection');
//individual part end
