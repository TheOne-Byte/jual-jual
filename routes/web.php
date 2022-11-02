<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ItemListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/list', [ItemListController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/UserProfile', [UserProfileController::class, 'index']);

Route::get('/HomePage', [HomepageController::class, 'index']);
