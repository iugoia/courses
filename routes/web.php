<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/courses', function() {
    return view('courses');
})->name("courses");

Route::get('/test', [CourseController::class, 'ParseAgregator']);

Route::get('/school', [SchoolController::class, 'ParseSchool']);
