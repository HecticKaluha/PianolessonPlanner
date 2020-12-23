<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlotController;
use Illuminate\Support\Facades\Route;

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
//normal routes
Route::get('/', [HomeController::class, 'index']);



//dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/planning', [SlotController::class, 'index'])
    ->middleware(['auth'])
    ->name('planning');

Route::get('/files', function () {
    return view('files');
})->middleware(['auth'])->name('files');

Route::get('/blog', function () {
    return view('blog');
})->middleware(['auth'])->name('blog');

Route::get('/slot/create', [SlotController::class, 'create'])
    ->middleware(['auth'])
    ->name('createSlots');

Route::get('/slot/{id}', [SlotController::class, 'create'])
    ->middleware(['auth'])
    ->name('viewSlot');

Route::get('/slot/{id}/edit', [SlotController::class, 'create'])
    ->middleware(['auth'])
    ->name('editSlot');

Route::get('/slot/{id}/remove', [SlotController::class, 'create'])
    ->middleware(['auth'])
    ->name('removeSlot');

require __DIR__.'/auth.php';
