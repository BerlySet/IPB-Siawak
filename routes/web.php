<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentsController;
use App\Http\Controllers\RegistrantsController;
use App\Http\Controllers\UsersController;

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

// CREATE NEW ROUTE FOR NEW URL
// RECRUITMENT
Route::get('/recruitments', [RecruitmentsController::class, 'index']);
Route::get('/recruitments/1', [RegistrantsController::class, 'index']);

// PROFILE
Route::get('/profile', [UsersController::class, 'index']);


