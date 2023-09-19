<?php
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PageController;
use App\Http\Controllers\user\UserController;
use App\Http\Middleware\CheckIfUserIsLoggedOut;
use App\Http\Controllers\user\UserMessageController;
use App\Http\Controllers\user\UserPropertiesController;
use App\Http\Controllers\user\PropertyRequestController;


Route::middleware(['auth', 'role:user',CheckIfUserIsLoggedOut::class])->group(function (){
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::prefix('/properties')->group(function () {
        Route::get('/', [UserPropertiesController::class, 'index'])->name('user.properties.index');
    });
    Route::prefix('/property_request')->group(function () {
        Route::get('/create', [PropertyRequestController::class, 'create'])->name('property_requests.create');
        Route::post('/{id}/respond',[PropertyRequestController::class, 'respond'])->name('property_requests.respond');
        Route::get('/', [PropertyRequestController::class, 'index'])->name('property_requests.index');
        Route::get('/{id}', [PropertyRequestController::class, 'show'])->name('property_requests.show');
        Route::post('/', [PropertyRequestController::class, 'store'])->name('property_requests.store');
        Route::delete('/{id}', [PropertyRequestController::class, 'destroy'])->name('property_requests.destroy'); 
    });
});

