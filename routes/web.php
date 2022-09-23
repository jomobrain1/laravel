<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/',[EmployeeController::class,'index']);


Route::post('/add',[EmployeeController::class,'store'])->name('add');
Route::get('delete/{id}',[EmployeeController::class,'destroy']);
Route::get('/edit/{id}',[EmployeeController::class,'edit']);
Route::post('/update',[EmployeeController::class,'update'])->name('update');
Route::group(['middleware' => ['auth']], function () { 
    Route::get('/view',[EmployeeController::class,'view'])->name('view');
    Route::get('/create',[EmployeeController::class,'create']);
    Route::get('/search', [EmployeeController::class,'search'])->name('search');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employees',function(){
    return Employee::all();
});