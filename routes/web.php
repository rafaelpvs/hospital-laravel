<?php

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\InternmentsController;
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



Route::get('/', [PatientsController::class, 'index'])->name('patients.index');
Route::get('/patients/register', [PatientsController::class, 'create'])->name('patients.register');
Route::post('/patients/register', [App\Http\Controllers\PatientsController::class, 'store'])->name('patients.store');
Route::get('/patients/{id}', [App\Http\Controllers\PatientsController::class, 'show'])->name('patients.show');

Route::get('/internments/historic', [InternmentsController::class, 'index'])->name('patients.historic');
Route::patch('/internments/{id}', [InternmentsController::class, 'update'])->name('internments.update');
Route::post('/internment', [InternmentsController::class, 'store'])->name('internments.store');
