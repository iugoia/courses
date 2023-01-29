<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SchoolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;


Route::post('/school/comment', [CommentController::class, 'store'])->name('comment.create');

//Route::post('/admin/register', [RegisterController::class, 'register'])->name('admin.register');

Route::post('/admin/login', [AuthContoller::class, 'index'])->name('admin.auth');

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/parse-courses', [CourseController::class, 'ParseAgregator'])->name('parse.course');
    Route::get('/parse-schools', [SchoolController::class, 'ParseSchool'])->name('parse.school');
});
