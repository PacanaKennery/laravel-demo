<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// imong existing Student/Subject routes diri...

Route::resource('tasks', TaskController::class);