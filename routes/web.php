<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tes', function () {
    return view('home-user');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route CRUD Conpany
Route::get('/admin/company', [AdminController::class, 'index'])->name('admin.company');

// Route CRUD Vacancy
Route::get('/admin/vacancy', [VacancyController::class, 'index'])->name('admin.vacancy');

// Route CRUD User
Route::get('/admin/user', [AdminController::class, 'index'])->name('admin.user');
