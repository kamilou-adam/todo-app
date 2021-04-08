<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
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

//Route::get('about',['App\Http\Controllers\AboutController','index']);



Route::get('/todos',[TodosController::class,'index']);

//Show one
Route::get('/todos/{todo}',[TodosController::class,'show']);

//new todo form
Route::get('new-todos',[TodosController::class,'create']);

//Create new togo
Route::post('store-todos',[TodosController::class,'store']);

//delete todo
Route::get('todos/{todo}/delete',[TodosController::class,'destroy']);

//updating form
Route::get('todos/{todo}/edit',[TodosController::class,'edit']);

//Update
Route::post('todos/{todo}/update-todos',[TodosController::class,'update']);