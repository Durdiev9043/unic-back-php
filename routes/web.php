<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
//    Route::resource('roles', RoleController::class);
//    Route::resource('users', UserController::class);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
    Route::resource('user',UserController::class);
    Route::resource('location',LocationController::class);
    Route::resource('district',DistrictController::class);
    Route::post('region',[App\Http\Controllers\GeneralController::class,'region'])->name('admin.region');
    Route::get('district/user/count',[App\Http\Controllers\DistictUserController::class,'index'])->name('distirct.user.index.count');
    Route::post('district/user',[App\Http\Controllers\DistictUserController::class,'store'])->name('distirct.user.store');
    Route::get('xx/{id}',[\App\Http\Controllers\api\GeneralController::class,'userCount']);
});
