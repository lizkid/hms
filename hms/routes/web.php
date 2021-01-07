<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\roleController;
use App\Http\Controllers\permissionController;
use App\Http\Controllers\welcomeController;

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
Route::view('new', 'new');
Route::view('admin', 'admin');
Route::view('roleList', 'roles.roleList');
Route::post('store', [roleController::class, 'store']);
Route::get('show', [roleController::class, 'show']);
Route::get('delete/{id}', [roleController::class, 'destroy']);
Route::view('premissionList', 'roles.permissionList');
Route::post('permissionStore', [permissionController::class, 'permissionStore']);
Route::get('showPermission', [permissionController::class, 'showPermission']);
Route::view('register', 'register');
Route::post('welcome', [welcomeController::class, 'welcome']);
Route::view('index', 'index');
Route::post('login', [welcomeController::class, 'login']);
