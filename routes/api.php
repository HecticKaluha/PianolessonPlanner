<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SlotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/categories', [CategoryController::class, 'getAll'])
    ->name('getAllCategories');

Route::get('/api/slots', [SlotController::class, 'getAll'])
    ->name('getAllSlots');

Route::post('/api/bookSlot', [SlotController::class, 'bookSlot'])
    ->name('bookSlot');

