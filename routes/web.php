<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// one to one //each user has one contact
Route::get('/contact',[ContactController::class,'index']);


// one to many each user hasMany posts $ each post belongs to a user
Route::get('/posts',[PostController::class,'index']);


// many to many
Route::get('/many',[PostController::class,'manyTomany']);