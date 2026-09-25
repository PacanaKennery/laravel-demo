<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

Route::get('/students', [StudentController::class, 'index']);

Route::get('/subjects', [SubjectController::class, 'index']);