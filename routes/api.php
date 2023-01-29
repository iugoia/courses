<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;


Route::post('/school/comment', [CommentController::class, 'store'])->name('comment.create');

Route::post('/admin/register', [RegisterController::class, 'register'])->name('admin.register');

Route::post('/admin/login', [AuthContoller::class, 'index'])->name('admin.auth');
