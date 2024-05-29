<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('listproduct',[ProductController::class,'index']);
Route::get('create',[ProductController::class,'create']);
Route::Post('store',[ProductController::class,'store']);
Route::get('edit/{id}',[ProductController::class,'edit']);
Route::Patch('update/{id}',[ProductController::class,'update']);
Route::delete('delete/{id}',[ProductController::class,'delete']);
Route::get('show/{id}',[ProductController::class,'show']);
