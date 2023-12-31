<?php

use App\Http\Controllers\API\CabinetController;
use App\Http\Controllers\API\ComputerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/get_cabinets', [CabinetController::class, 'getAllCabinets']);
Route::get('/get_computers', [ComputerController::class, 'getAllComputers']);
Route::get('/get_computer/{id}', [ComputerController::class, 'getExactComputer']);
