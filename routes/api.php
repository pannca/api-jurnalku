<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PermintaanSaksiController;
use App\Http\Controllers\Api\SiswaController;
use App\Http\Controllers\Api\CatatanSikapController;

Route::get('/permintaan-saksi', [PermintaanSaksiController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/catatan-sikap', [CatatanSikapController::class, 'index']);

