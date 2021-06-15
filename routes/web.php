<?php

use App\Http\Controllers\RestoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => 'web'], function () {
    

    Route::view('/', 'home');
    Route::view('login', 'login');
    Route::post('login', [RestoController::class, 'login'])->name('login');
    Route::view('register', 'register');
    Route::post('register', [RestoController::class, 'register'])->name('register');
    
        Route::get('list', [RestoController::class, 'list']);
        Route::view('add', 'addResto');
        Route::post('add', [RestoController::class, 'add'])->name('add');
        Route::get('delete/{id}', [RestoController::class, 'delete']);
        Route::get('edit/{id}', [RestoController::class, 'edit']);
        Route::post('update/{id}', [RestoController::class, 'update'])->name('update');
        Route::get('logout', [RestoController::class, 'logout'])->name('logout');
        
});



