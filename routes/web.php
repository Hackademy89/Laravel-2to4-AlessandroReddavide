<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

use App\Http\Controllers\PcController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\SmartphoneController;
use Illuminate\Contracts\Queue\Monitor;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/pc', [PcController::class, 'index'])->name('pc');
Route::get('/smartphone', [SmartphoneController::class, 'index'])->name('smartphone');
Route::get('/monitor', [MonitorController::class, 'index'])->name('monitor');

// rotte parametriche
Route::get('/pc/detail/{title}', [PcController::class, 'show'])->name('show.pc');
Route::get('/monitor/detail/{title}', [MonitorController::class, 'show'])->name('show.monitor');