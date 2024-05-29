<?php

use App\Http\Controllers\DrcController;
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

Route::get("/", function () {
   return response()->json(["version" => "v1"]);
});

Route::get("/drc/view", [DrcController::class, 'view']);
Route::get("/drc/store", [DrcController::class, 'store']);
Route::get("/drc/update", [DrcController::class, 'update']);
