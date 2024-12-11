<?php

use App\Http\Controllers\info;
// use App\Http\Controllers\info_user;
use App\Http\Controllers\req_res;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/info/{msg?}', function ($msg='no message') {
//     return view('info', ['msg' => $msg]);
// });

// Route::get('/controller', [info_user::class, 'index'])->name('controller');

Route::get('/info/{msg?}', [info::class,'index'])->name('info');
Route::get('/reqres', [req_res::class,'index'])->name('reqres');