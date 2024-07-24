<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Auth;





Route::get('/', function () {

    if(Auth::check()){
        return redirect('/home');
    }
    return view('auth.login');
});


Route::resource('libro',LibroController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [LibroController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/home', [LibroController::class, 'index'])->name('home');

});
