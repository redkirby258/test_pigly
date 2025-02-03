<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\WeightTargetController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;




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
Route::get('/', [WeightController::class, 'update']);
Route::get('/register/step2', [WeightTargetController::class, 'getRegister']);
    Route::get('/', [WeightController::class, 'update']);
    Route::get('/admin', [ContactController::class, 'admin']);
    Route::get('/search', [ContactController::class, 'search']);
    Route::post('/delete', [ContactController::class, 'destroy']);
    Route::post('/export', [ContactController::class, 'export']);
Route::get('/register/step1', [RegisteredUserController::class, 'create'])
    ->name('register.step1');