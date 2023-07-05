<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class,'main']);

Route::get('/update-data',function(){
    return view('update');
});
Route::post('/update-data',[MainController::class,'update']);

Route::get('/available-product',[MainController::class,'availProd']);

Route::get('/add-product',function(){
    return view('add');
});
Route::post('/add-product',[MainController::class,'add']);

Route::get('/edit-product/{id}',[MainController::class,'edit']);
Route::post('/edit-product/{id}',[MainController::class,'store']);

Route::get('/delete/{id}',[MainController::class,'isDelete']);
Route::get('/delete-product/{id}',[MainController::class,'delete']);