<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ContactController;

Route::get('BNBLEmployeeDirectory/admin-index', [BackendController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('dashboard', [BackendController::class, 'index'])->middleware(['auth']);
Route::get('/BNBLEmployeeDirectory/admin-directory',[BackendController::class, 'directory'])->middleware(['auth'])->name('directory');
Route::get('/BNBLEmployeeDirectory/admin-add-contact', [BackendController::class, 'addContactForm'])->middleware(['auth'])->name('add-contact');
Route::post('/BNBLEmployeeDirectory/admin-add-contact', [ContactController::class, 'addContact'])->middleware(['auth']);
Route::get('/BNBLEmployeeDirectory/admin-add-contact/bulk-upload', [BackendController::class, 'bulkUploadForm'])->middleware(['auth'])->name('bulkupload');
Route::get('/BNBLEmployeeDirectory/{id}/view', [BackendController::class, 'viewContact'])->middleware(['auth'])->name('view-contact');
Route::get('/BNBLEmployeeDirectory/{id}/edit-contact', [BackendController::class, 'editContact'])->middleware(['auth'])->name('edit-contact');
Route::post('/BNBLEmployeeDirectory/update-contact', [ContactController::class, 'updateContact'])->middleware(['auth'])->name('update-contact');
Route::get('/BNBLEmployeeDirectory/contact-requests', [BackendController::class, 'contactRequests'])->middleware(['auth'])->name('view-contact-request');
Route::get('/BNBLEmployeeDirectory/process-contact-request/{id}/{action}', [ContactController::class, 'processContact'])->middleware(['auth'])->name('process-contact-request');
Route::get('/BNBLEmployeeDirectory/{id}/delete/', [ContactController::class, 'deleteContact'])->middleware(['auth'])->name('delete-contact');
Route::get('/BNBLEmployeeDirectcory/report', [BackendController::class, 'report'])->middleware(['auth'])->name('report');
