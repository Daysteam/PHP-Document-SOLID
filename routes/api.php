<?php

use App\Http\Controllers\PrinterController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaExportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('siswas', [SiswaController::class,'getAll']);
Route::post('siswas',[SiswaController::class, 'store']);

Route::get('siswas/export',[SiswaExportController::class,'export']);
Route::get('sends',[SenderController::class,'send']);
Route::get('prints',[PrinterController::class,'print']);