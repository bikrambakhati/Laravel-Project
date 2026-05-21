<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,"welcome"] );
Route::get('/About',[PageController::class,"about"]);
Route::get('/Service',[PageController::class,"service"] );
Route::get('/Contact',[PageController::class,"contact"] );

//..For Courses//
Route::get('/course/index',[CourseController::class,"index"] );
Route::get('/course/create',[CourseController::class,"create"] );
Route::post('/course/store',[CourseController::class,"store"] );
Route::get('/course/store',[CourseController::class,"store"] );
Route::delete('/course/delete/{id}',[CourseController::class,"delete"] );
Route::post('/contact/store',[ContactController::class,"store"] );
Route::get('/contact/index',[ContactController::class,"index"] );
Route::delete('/contact/delete/{id}',[ContactController::class,"delete"] );
Route::get('/course/edit/{id}',[CourseController::class,"edit"] );
Route::patch('/course/update/{id}',[CourseController::class,"update"] );




