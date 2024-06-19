<?php

use App\Http\Controllers\BooksController;
use App\Models\Books;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('testcruh');})->name('aaa');
Route::post('insert',[BooksController::class,'insert']);
Route::fallback(function(){
    return "ไม่พบหน้าเว็ป";
});