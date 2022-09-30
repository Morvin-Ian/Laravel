<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//get
Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/{job}', [JobController::class, 'single']);

// create
Route::post('/jobs', [JobController::class, 'post']);
Route::get('/jobs/create', [JobController::class, 'create']);

//update
Route::put('/jobs/{job}', [JobController::class, 'update']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

//delete
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// rergister
Route::get('/register', [UserController::class, 'register']);

// login
Route::get('/login', [UserController::class, 'login']);



