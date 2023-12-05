<?php

use Illuminate\Support\Facades\Route;
use Naranjatec\Adminer\Http\Controllers\AdminerController;

//Route::middleware(['guest'])->group(function () {
    //Route::get('/adminer', [LoginController::class, 'index'])->name('adminer');
    //Route::get('/adminer', [AdminerController::class, 'index'])->name('adminer');

   
    Route::any('/adminer', [AdminerController::class, 'index']);

    /*
    Route::get('/adminer', function(){
        return "hola";
    })->name('adminer');
    */
//});
