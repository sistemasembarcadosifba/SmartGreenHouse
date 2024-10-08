<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoilSensorDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TempSensorDataController;


Route::get('/show_temp_data', [TempSensorDataController::class, 'showData']);
Route::get('/show_soil_data', [SoilSensorDataController::class, 'showData']);
Route::get('/show_temp_graph_data', [TempSensorDataController::class, 'showGraphData']);
// dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);




