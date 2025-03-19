<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstudanteController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {return view('home');}) -> name('home');
Route::get('/login', action: [LoginController::class, 'index']) -> name('login');
Route::post('/loginAuth', action: [LoginController::class, 'loginAuth']) -> name('loginAuth');
Route::get('/register', action: [RegisterController::class, 'index']) -> name('register');
Route::post('/registerAuth', action: [RegisterController::class, 'registerAuth']) -> name('registerAuth');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', action: [DashboardController::class, 'index']) -> name('dashboard');
    Route::post('/dashboard/show', action: [DashboardController::class, 'showTable']) -> name('showTable');
    Route::get('/about', function(){return view('about');},'about')-> name('about');

    Route::resource('estudantes', EstudanteController::class);

    Route::get('/logout', action: [LogOutController::class, 'logout']) -> name('logout');
});

