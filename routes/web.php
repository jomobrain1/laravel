<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/',[EmployeeController::class,'index']);

Route::get('/create',[EmployeeController::class,'create']);
Route::post('/add',[EmployeeController::class,'store'])->name('add');
Route::get('delete/{id}',[EmployeeController::class,'destroy']);
Route::get('/edit/{id}',[EmployeeController::class,'edit']);
Route::post('/update',[EmployeeController::class,'update'])->name('update');
Route::group(['middleware' => ['auth']], function () { 
    Route::get('/view',[EmployeeController::class,'view'])->name('view');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
