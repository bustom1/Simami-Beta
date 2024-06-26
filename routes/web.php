<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });




Auth::routes();

Route::get('/', function () {
    return view('home-user');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route CRUD Conpany
Route::get('/admin', [AdminController::class, 'index'])->name('admin.company');

Route::get('/admin/magang', [CompanyController::class, 'show'])->name('admin.add-magang');


// Home User  => no login
Route::get('/home', [HomeController::class, 'index'])->name('admin.user');
