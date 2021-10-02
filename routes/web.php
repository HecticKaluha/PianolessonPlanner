<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/files', [FileController::class, 'index'])
    ->middleware(['auth'])
    ->name('files');

Route::get('/file/create', [FileController::class, 'create'])
    ->middleware(['auth'])
    ->name('createFile');

Route::post('/file/store', [FileController::class, 'store'])
    ->middleware(['auth'])
    ->name('storeFile');

Route::post('/file/store/tinyMCE', [FileController::class, 'storeFileTinyMCEUpload'])
    ->middleware(['auth'])
    ->name('storeFileTinyMCE');

Route::get('/file/{file}', [FileController::class, 'show'])
    ->middleware(['auth'])
    ->name('showFile');

Route::get('/file/{file}/remove', [FileController::class, 'remove'])
    ->middleware(['auth'])
    ->name('removeFile');

Route::post('/file/{file}/destroy', [FileController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('destroyFile');

Route::get('/blog', [PostController::class,'index'])
    ->middleware(['auth'])
    ->name('blog');

Route::get('/post/create', [PostController::class,'create'])
    ->middleware(['auth'])
    ->name('createPost');

Route::post('/post/store', [PostController::class,'store'])
    ->middleware(['auth'])
    ->name('storePost');

Route::get('/post/{post}', [PostController::class,'show'])
    ->middleware(['auth'])
    ->name('showPost');

Route::get('/post/{post}/edit', [PostController::class,'edit'])
    ->middleware(['auth'])
    ->name('editPost');

Route::post('/post/{post}/update', [PostController::class,'update'])
    ->middleware(['auth'])
    ->name('updatePost');

Route::get('/post/{post}/remove', [PostController::class,'remove'])
    ->middleware(['auth'])
    ->name('removePost');

Route::post('/post/{post}/destroy', [PostController::class,'destroy'])
    ->middleware(['auth'])
    ->name('destroyPost');

Route::get('/slot/create', [SlotController::class, 'create'])
    ->middleware(['auth'])
    ->name('createSlot');

Route::post('/slot/store', [SlotController::class, 'store'])
    ->middleware(['auth'])
    ->name('storeSlot');

Route::get('/slot/{slot}', [SlotController::class, 'show'])
    ->middleware(['auth'])
    ->name('showSlot');

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
