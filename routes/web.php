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
// Route::get('/', [DirectoryController::class, 'getDirectorySearch'])->name('get_search_path');

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';



// Route::get('/home', 'HomeControl@geler@index')->name('home');
Route::get('/', 'App\Http\Controllers\DirectoryController@getDirectorySearch');
Route::get('/BNBLEmployeeDirectory', 'App\Http\Controllers\DirectoryController@getDirectorySearch')->name('get_search_path');
Route::get('/BNBLEmployeeDirectory/result', 'App\Http\Controllers\DirectoryController@getResult')->name('result_path');
Route::get('/BNBLEmployeeDirectory/result/{id}/show/{ename}/{location}/{department}', 'App\Http\Controllers\DirectoryController@getShow')->name('show_result_path');
Route::post('/BNBLEmployeeDirectory', 'App\Http\Controllers\DirectoryController@searchDirectory')->name('search_directory_path');

//Routes for vehicle directory
// Route::get('/', 'App\Http\Controllers\VehicleController@getDirectorySearch');
Route::get('/BNBLEmployeeVehicle/vehicle', 'App\Http\Controllers\VehicleController@getDirectorySearch')->name('get_vehicle_path');
Route::get('/BNBLEmployeeVehicley/vehicleresult', 'App\Http\Controllers\VehicleController@getResult')->name('vehicle_path');
Route::get('/BNBLEmployeeVehicle/vehicleresult/{id}/show/{ename}/{location}/{department}', 'App\Http\Controllers\VehicleController@getShow')->name('show_vehicle_path');
Route::post('/BNBLEmployeeVehicle', 'App\Http\Controllers\VehicleController@searchDirectory@searchDirectory')->name('search_vehicle_path');

/*
|----------------------------------------------------------------------------------
| Routes for Employee Information Edit
|----------------------------------------------------------------------------------
*/ 
Route::get('/BNBLEmployeeDirectory/edit', 'App\Http\Controllers\InfoController@getEmployee')->name('login_info_path');
Route::get('/BNBLEmployeeDirectory/otp-verification/{eid}', 'App\Http\Controllers\InfoController@getOtp')->name('otp_path');
Route::get('/BNBLEmployeeDirectory/edit/{eid}/info', 'App\Http\Controllers\InfoController@getEditForm')->name('edit_info_path');
Route::post('/BNBLEmployeeDirectory/otp-verification', 'App\Http\Controllers\InfoController@sendOTP')->name('get_employee_and_send_otp_path');
Route::post('BNBLEmployeeDirectory/verify_otp', 'App\Http\Controllers\InfoController@verifyOTP')->name('verify_otp_path');
Route::post('BNBLEmployeeDirectory/update-employee-info', 'App\Http\Controllers\InfoController@updateInfo')->name('update_employee_info_path');
/*
|----------------------------------------------------------------------------------
|Routes for Employee Registration
|----------------------------------------------------------------------------------
*/ 
Route::get('BNBLEmployeeDirectory/registration', 'App\Http\Controllers\InfoController@getRegistration')->name('employee_registration_path');
Route::post('BNBLEmployeeDirectory/registration', 'App\Http\Controllers\InfoController@sendAdditionRequest')->name('contact_addition_request_path');

/*
|----------------------------------------------------------------------------------
| Routes for Mail Signature Generator
|----------------------------------------------------------------------------------
*/ 
Route::get('MailSignatureGenerator/search','App\Http\Controllers\SignatureController@getSearch')->name('sign_index_path');
Route::post('MailSignatureGenerator/generate-sign', 'App\Http\Controllers\SignatureController@searchDirectory')->name('sign_search_directory_path');
Route::get('MailSignatureGenerator/generate-sign-code', 'App\Http\Controllers\SignatureController@generateCode')->name('get_signature_code_path');

