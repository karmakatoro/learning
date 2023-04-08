<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'custom_login'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'custom_registration'])->name('register.custom');
Route::get('forgot-password', [CustomAuthController::class, 'forgot_password'])->name('forgot');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('custom.dashboard');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

