<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeIController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ReligionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SectorController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Site
    Route::resource('sites', SiteController::class, ['except' => ['store', 'update', 'destroy']]);

    // Grade
    Route::resource('grades', GradeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Religion
    Route::resource('religions', ReligionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Sector
    Route::resource('sectors', SectorController::class, ['except' => ['store', 'update', 'destroy']]);

    // Majors
    Route::resource('majors', MajorController::class, ['except' => ['store', 'update', 'destroy']]);

    // Department
    Route::resource('departments', DepartmentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Employee I
    Route::resource('employee-is', EmployeeIController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
