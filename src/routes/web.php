<?php

use Illuminate\Support\Facades\Route;
//use Naranjatec\Login\Http\Controllers\LoginController;

//Route::middleware(['guest'])->group(function () {
    //Route::get('/adminer', [LoginController::class, 'index'])->name('adminer');
    Route::get('/adminer', function(){
        return "hola";
    })->name('adminer');
//});
