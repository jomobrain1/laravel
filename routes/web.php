<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[EmployeeController::class,'index']);
Route::get('/create',[EmployeeController::class,'create']);
Route::post('/add',[EmployeeController::class,'store'])->name('add');
Route::get('delete/{id}',[EmployeeController::class,'destroy']);
Route::get('/edit/{id}',[EmployeeController::class,'edit']);
Route::post('/update',[EmployeeController::class,'update'])->name('update');