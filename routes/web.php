<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\VehicleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Routes for vehicle directory
Route::get('/', [VehicleController::class, 'vehicle']);
Route::get('/BNBVehicleDirectory/vehicle', [VehicleController::class, 'vehicle'])->name('get_vehicle_path');
Route::get('/BNBVehicleDirectory/vehicle/search', [VehicleController::class, 'search'])->name('search');
Route::get('/BNBVehicleDirectory/vehicleresult', [VehicleController::class, 'getResult'])->name('vehicle_path');
Route::get('/BNBVehicleDirectory/vehicleresult/{id}/show/{ename}/{location}/{department}', [VehicleController::class, 'getShow'])->name('show_vehicle_path');
Route::post('/BNBVehicleDirectory', [VehicleController::class, 'searchDirectory@searchDirectory'])->name('search_vehicle_path');
