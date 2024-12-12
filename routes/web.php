<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\cashCalculasController;

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
    'cashCalculas'
])->name('cashCalculas');

//cashCalculas end