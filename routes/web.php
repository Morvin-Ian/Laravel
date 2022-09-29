<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
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

Route::post('/jobs', [JobController::class, 'post']);

Route::get('/jobs/create', [JobController::class, 'create']);

Route::get('/', [JobController::class, 'index']);


Route::get('/jobs/{job}', [JobController::class, 'single']);

