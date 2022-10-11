<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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


Route::get('/login', [AuthController::class,"loginView"]);
Route::get('/register', [AuthController::class,"registerView"]);
Route::post('/do-login', [AuthController::class,"doLogin"]);
Route::post('/do-register', [AuthController::class,"doRegister"]);
Route::get('/dashboard', [AuthController::class,"dashboard"]);
Route::get('/notactivedashboard', [AuthController::class,"notactivedashboard"]);
Route::get('/logout', [AuthController::class,"logout"]);
Route::post('/Add_package', [AuthController::class,"AddPackage"]);
Route::get('/viewPackages', [AuthController::class,"packagesView"]);
Route::get('/view-packages', [AuthController::class,"ViewPackages"]);
Route::get('/fetch-packages/{id}', [AuthController::class,"FetchPackages"]);







Route::get('/', function () {
    return view('register');
});
