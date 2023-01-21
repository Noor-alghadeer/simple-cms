<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantsController;

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

Route::get('/', function () {return view('welcome');});
Route::get("plants-list",[PlantsController::class,'index']);
Route::get("add-plant",[PlantsController::class,'addPlant']);
Route::post("save-plant",[PlantsController::class,'savePlant']);
Route::get("edit-plant/{id}",[PlantsController::class,'editPlant']);
Route::post("update-plant/{id}",[PlantsController::class,'updatePlant']);
Route::get("delete-plant/{id}",[PlantsController::class,'deletePlant']);