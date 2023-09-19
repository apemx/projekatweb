<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\agent\AgentController;
use App\Http\Middleware\CheckIfUserIsLoggedOut;
use App\Http\Controllers\agent\AgentResponceController;
use App\Http\Controllers\agent\AgentResponseController;
use App\Http\Controllers\agent\AgentPropertiesController;
use App\Http\Controllers\agent\HistoryResponceController;

Route::prefix('agent')->middleware(['auth', 'role:agent',CheckIfUserIsLoggedOut::class])->group(function (){

    Route::get('/dashboard',[AgentController::class,'dashboard'])->name('agent.dashboard');

    Route::prefix('properties')->group(function () {
        Route::get('/', [AgentPropertiesController::class, 'index'])->name('agent.properties.index');
        Route::get('/create', [AgentPropertiesController::class, 'create'])->name('agent.properties.create');
        Route::get('/{id}/show', [AgentPropertiesController::class, 'show'])->name('agent.properties.show');
        Route::post('/', [AgentPropertiesController::class, 'store'])->name('agent.properties.store');
        Route::get('/{id}/edit', [AgentPropertiesController::class, 'edit'])->name('agent.properties.edit');
        Route::patch('/{id}', [AgentPropertiesController::class, 'update'])->name('agent.properties.update');
        Route::delete('/{id}', [AgentPropertiesController::class, 'destroy'])->name('agent.properties.destroy');
    });
    
    Route::prefix('/property_request')->group(function () {
        Route::get('/', [AgentResponceController::class, 'index'])->name('agent.property_requests.index');
        Route::get('/create', [AgentResponceController::class, 'create'])->name('agent.property_requests.create');;
        Route::get('/search', [AgentResponceController::class, 'search'])->name('agent.property_requests.search');
        Route::get('/{id}', [AgentResponceController::class, 'show'])->name('agent.property_requests.show');
        Route::post('/{id}/store', [AgentResponceController::class, 'store'])->name('agent.property_requests.store');
        Route::delete('/{id}', [AgentResponceController::class, 'destroy'])->name('agent.property_requests.destroy');
    });
    
    Route::prefix('/history_response')->group(function () {
        Route::get('/', [HistoryResponceController::class, 'index'])->name('agent.history_response.index');
        Route::get('/{id}', [HistoryResponceController::class, 'show'])->name('agent.history_response.show');
        Route::delete('/{id}', [HistoryResponceController::class, 'destroy'])->name('agent.history_response.destroy');
    });
       
        
    
   
});

