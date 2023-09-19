<?php
use App\Http\Middleware;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminPropertiesController;
use App\Http\Controllers\admin\LocationController;
use App\Http\Controllers\admin\TypeController;
use App\Http\Controllers\user\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CheckIfUserIsLoggedOut;
use App\Models\Location;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use Spatie\Permission\Middlewares\RoleMiddleware;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth', 'role:admin',CheckIfUserIsLoggedOut::class])->group(function () {

    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/{id}/show', [UserController::class, 'show'])->name('users.show');
        Route::patch('/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::post('/{user}/assign-roles/', [AdminController::class, 'assignRole'])->name('admin.assignRole');
        Route::post('/add', [AdminController::class,'addUser'])->name('admin.adduser');
    });

    Route::prefix('/properties')->group(function () {
        Route::get('/', [AdminPropertiesController::class, 'index'])->name('admin.properties.index');
        Route::get('/{id}/edit', [AdminPropertiesController::class, 'edit'])->name('admin.properties.edit');
        Route::get('/create', [AdminPropertiesController::class, 'create'])->name('admin.properties.create');
        Route::get('/{id}/show', [AdminPropertiesController::class, 'show'])->name('admin.properties.show');
        Route::post('/', [AdminPropertiesController::class, 'store'])->name('admin.properties.store');
        Route::patch('/{id}', [AdminPropertiesController::class, 'update'])->name('admin.properties.update');
        Route::delete('/{id}', [AdminPropertiesController::class, 'destroy'])->name('admin.properties.destroy');
    });

    Route::prefix('/locations')->group(function () {
        Route::get('/', [LocationController::class, 'index'])->name('locations.index');
        Route::post('/', [LocationController::class, 'store'])->name('locations.store');
        Route::patch('/{id}', [LocationController::class, 'update'])->name('locations.update');
        Route::delete('/{id}', [LocationController::class, 'destroy'])->name('locations.destroy');
    });

    Route::prefix('Type')->group(function () {
        Route::get('/', [TypeController::class, 'index'])->name('type.index');
        Route::post('/', [TypeController::class, 'store'])->name('type.store');
        Route::patch('/{id}', [TypeController::class, 'update'])->name('type.update');
        Route::delete('/{id}', [TypeController::class, 'destroy'])->name('type.destroy');
    });
});





