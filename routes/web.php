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
    ->name('createSlot');

Route::post('/slot/store', [SlotController::class, 'store'])
    ->middleware(['auth'])
    ->name('storeSlot');

Route::get('/slot/{slot}', [SlotController::class, 'show'])
    ->middleware(['auth'])
    ->name('viewSlot');

Route::get('/slot/{slot}/edit', [SlotController::class, 'edit'])
    ->middleware(['auth'])
    ->name('editSlot');

Route::post('/slot/{slot}/update', [SlotController::class, 'update'])
    ->middleware(['auth'])
    ->name('updateSlot');

Route::get('/slot/{slot}/remove', [SlotController::class, 'remove'])
    ->middleware(['auth'])
    ->name('removeSlot');

Route::post('/slot/{slot}/destroy', [SlotController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('destroySlot');

require __DIR__.'/auth.php';
