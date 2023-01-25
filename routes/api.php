<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;


Route::post('/school/comment', [CommentController::class, 'store'])->name('comment.create');

Route::match(['get', 'post'],'/admin/login', [AdminController::class, 'index'])->name('login');
