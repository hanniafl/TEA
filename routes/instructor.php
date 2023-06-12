<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use GuzzleHttp\Middleware;

Route::redirect('', 'instructor/courses');

Route::resource('courses', CourseController::class)->names('courses');