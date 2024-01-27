<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [Controllers\RegistrationController::class, 'create'])->name('registration.create');
Route::post('/register', [Controllers\RegistrationController::class, 'store'])->name('registration.store');
Route::get('/dashboard', [Controllers\RegistrationController::class, 'dashboard'])->name('registration.dashboard');
Route::get('/login', [Controllers\SessionsController::class, 'create'])->name('session.create');
Route::post('/login', [Controllers\SessionsController::class,'store'])->name('session.store');
Route::get('/logout', [Controllers\SessionsController::class, 'destroy'])->name('session.destroy');
Route::get('/show', [Controllers\RegistrationController::class, 'userProfile'])->name('registration.userProfile');
Route::get('/user/{user}/edit', [App\Http\Controllers\RegistrationController::class, 'edit'])->name('registration.editProfile');
Route::put('/update', [App\Http\Controllers\RegistrationController::class, 'update'])->name('registration.update');
Route::put('/setting', [App\Http\Controllers\RegistrationController::class, 'setting'])->name('registration.setting');
