<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd;
use App\Http\Controllers\AdminPanel;

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