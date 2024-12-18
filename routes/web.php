<?php

use App\Http\Controllers\AbeController;
use App\Http\Controllers\info;
// use App\Http\Controllers\info_user;
use App\Http\Controllers\req_res;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController1;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/info/{msg?}', function ($msg='no message') {
//     return view('info', ['msg' => $msg]);
// });

// Route::get('/controller', [info_user::class, 'index'])->name('controller');

Route::get('/info/{msg?}', [info::class,'index'])->name('info');
Route::get('/reqres', [req_res::class,'index'])->name('reqres');
// Route::get('/abe/{direction?}', [AbeController::class,'index'])->name('abe');
// Route::post('/abe/{direction?}', [AbeController::class,'index'])->name('abe');
Route::get('/abe', [AbeController::class,'index'])->name('abe');
Route::post('/abe', [AbeController::class,'index'])->name('abe');
Route::get('/directive', function () {
    return view('directive');
})->name('directive');

Route::get('/assignment/1', [FormController1::class, 'index'])->name('assignment1');
Route::post('/assignment/1', [FormController1::class, 'index'])->name('assignment1');