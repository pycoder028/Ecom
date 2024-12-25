<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ========== Admin Routes ========== */
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::post('/admin-dashboard', [AdminController::class, 'show_dashboard']);

/* ========== End Admin Routes ========== */



/* ========== Frontend Routes ========== */
Route::get('/', [HomeController::class, 'index']);

/* ========== End Frontend Routes ========== */
