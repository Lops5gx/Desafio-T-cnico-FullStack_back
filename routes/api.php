<?php

use App\Http\Controllers\InstituitionsController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\SimulationController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


# getAllInstituitions
Route::get('/instituitions', [InstituitionsController::class, 'Index']);

# getAllInstituitions
Route::get('/convention', [ConventionController::class, 'Index']);

#make simulation
Route::post('/simulation',[SimulationController::class, 'simulate']);
