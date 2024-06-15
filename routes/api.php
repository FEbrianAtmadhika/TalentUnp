<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\loginController;
use App\Http\Controllers\Api\talentController;
use App\Http\Controllers\Api\UserApiController;

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


Route::post('/user/login', [loginController::class, 'login']);
Route::post('user/register', [UserApiController::class, 'register']);
Route::get('/user/all', [UserApiController::class, 'getUserall']);
Route::get('/talent/all', [talentController::class, 'allTalent']);
Route::get('/allskill', [talentController::class, 'allSkill']);
Route::middleware('auth:sanctum')->post('user/edit', [UserApiController::class, 'edit']);
Route::middleware('auth:sanctum')->post('user/logout', [loginController::class, 'logout']);
Route::middleware('auth:sanctum')->post('/user/delskill', [UserApiController::class, 'delskill']);
Route::middleware('auth:sanctum')->post('/user/addskill', [UserApiController::class, 'addskill']);


