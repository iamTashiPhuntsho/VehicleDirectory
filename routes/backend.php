<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

Route::get('BNBLEmployeeDirectory/admin-index', [BackendController::class, 'index'])->middleware(['auth'])->name('dashboard');