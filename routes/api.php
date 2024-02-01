<?php

use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


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
Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::middleware(['auth:sanctum'/*, 'abilities:check-status'*/])->group(function () {
    Route::resource('task', TaskController::class);
    Route::get('my/task/today/{id}',[GeneralController::class,'today']);
    Route::get('user/info/{id}',[GeneralController::class,'info']);
    Route::get('my/task/thisweek/{id}',[GeneralController::class,'thisweek']);
    Route::get('my/task/yesterday/{id}',[GeneralController::class,'yesterday']);
    Route::get('my/home/{id}',[GeneralController::class,'home']);
    Route::get('my/come/{id}',[GeneralController::class,'radius']);
    Route::get('boss/glavni',[GeneralController::class,'boss']);
    Route::get('boss/district/{id}',[GeneralController::class,'district']);
    Route::get('boss/user/{id}',[GeneralController::class,'userDistrict']);
    Route::get('user/count/{id}',[GeneralController::class,'userCount']);
    Route::get('task/type',[GeneralController::class,'type']);
});
