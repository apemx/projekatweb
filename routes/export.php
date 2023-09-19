<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;


Route::get('/generate-excel', [ExportController::class, 'generateExcel'])->middleware(['auth', 'role:admin|agent'])->name('generate-excel');
Route::get('/generate-pdf', [ExportController::class, 'generatePDF'])->middleware(['auth', 'role:admin|agent'])->name('generate-pdf');
