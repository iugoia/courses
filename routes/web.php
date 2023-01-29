<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/about', [CourseController::class, 'about'])->name('about');

Route::get('/about-rck', function () {
    return view('rck');
})->name('about-rck');

Route::get('/school', [SchoolController::class, 'index'])->name('schools');

Route::get('/school/{id}', [SchoolController::class, 'show'])->name('school');

Route::get('/admin/register', function () {
    return view('admin-form');
});

Route::get('/admin/login', function() {
    return view('admin.form');
})->name('admin.login');

Route::get('/admin-panel', function () {
    return view('admin.index');
})->name('admin.panel')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::get('admin/courses', function() {
        return view('admin.courses.courses');
    })->name('admin.courses');
    Route::get('admin/schools', function () {
        return view('admin.schools.index');
    })->name('admin.schools');
    Route::get('/admin/comments', function() {
        return view('admin.comments.index');
    })->name('admin.comments');
});
