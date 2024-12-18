<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\cashCalculasController;
use App\Http\Controllers\admissionController;
use App\Http\Controllers\individualController;
use App\Http\Controllers\tuitionController;

Route::get('/', function () {
    return view('admin.home');
});
//admission
Route::get('/new-admission',[
    admissionController::class,
    'newAdmission'
])->name('newAdmission');
 
Route::get('/student-list',[
    admissionController::class,
    'studentList'
])->name('studentList');

Route::post('/save/student',[
    admissionController::class,
    'saveAdmission'
])->name('saveAdmission');

Route::get('/view-admission/{id}',[
    admissionController::class,
    'viewAdmission'
])->name('viewAdmission');

Route::get('/edit-admission/{id}',[
    admissionController::class,
    'editAdmission'
])->name('editAdmission');

Route::post('/update-admission',[
    admissionController::class,
    'updateAdmission'
])->name('updateAdmission');


Route::get('/delete-admission/{id}',[
    admissionController::class,
    'dltAdmission'
])->name('dltAdmission');
//admission



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

//Tuition str
Route::post('/add-tution-free',[
    tuitionController::class,   //add tuition free
    'tutionFee'
])->name('tutionFee');

Route::get('/tution-free-list',[
    tuitionController::class,   // tuition free list
    'tutionFeeList'
])->name('tutionFeeList');
//Tuition end

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
