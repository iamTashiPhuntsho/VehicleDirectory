<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;

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
Route::get('/', [DirectoryController::class, 'getDirectorySearch'])->name('get_search_path');



Route::get('/wc', function () {
    return view('welcome');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
