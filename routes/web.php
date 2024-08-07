<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacancyController;
use App\Models\vacancy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

// Home User
Route::get('/', [AdminController::class, 'home_user'])->name('home-user');

// Route Admin
// Home Admin
Route::get('/admin', [HomeController::class, 'index'])->name('admin.company');

// CRUD Magang
Route::get('/admin/magang', [VacancyController::class, 'index'])->name('admin.add-magang');
Route::get('/admin/magang/create', [VacancyController::class, 'create'])->name('admin.create-magang');
Route::post('/admin/magang/store', [VacancyController::class, 'store'])->name('store.vacancy');

// CRUD User
Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.add-users');
Route::get('/admin/users/create', [AdminController::class, 'create'])->name('create.users');

// tes profile detail
Route::get('/tes', [CompanyController::class, 'index']);
