<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorklogController;
use Illuminate\Support\Facades\Route;

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


Route::view('/', 'welcome');


Route::get('dashboard', [DashboardController::class, 'index'])->name('login')->middleware('auth');
// Route::get('dashboard', [DashboardController::class, 'index']);


Route::resource('project', ProjectController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('worklog', WorklogController::class);

Route::get('/select-work', [PayrollController::class, 'showForm'])->name('selectWork');
Route::post('/show-work', [PayrollController::class, 'showWork'])->name('payroll.show');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
