<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentsController;
use App\Http\Controllers\RegistrantsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificateController;

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

// AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login']], function () {
        // DASHBOARD
        Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('chairman');

        // RECRUITMENT
        // Route::get('/recruitments', [RecruitmentsController::class, 'index']);
        Route::get('recruitments/completed', [RecruitmentsController::class, 'show_completed'])->name('rec_completed');
        Route::get('recruitments/running', [RecruitmentsController::class, 'show_running'])->name('rec_running');
        Route::get('recruitments/upcoming', [RecruitmentsController::class, 'show_upcoming'])->name('rec_upcoming');
        Route::get('recruitments/canceled', [RecruitmentsController::class, 'show_canceled'])->name('rec_canceled');
        Route::resource('recruitments', RecruitmentsController::class);

        // PROFILE
        Route::get('/profile', [UsersController::class, 'index']);

        // CERTIFICATE
        Route::get('/certificate', [CertificateController::class, 'index'])->name('sertif');
        Route::get('/certificate/new/{certificate}', [CertificateController::class, 'create'])->name('sertif');
        // Route::get('/certificate/new/{id}', [CertificateController::class, 'create'])->name('tambah_sertif');

        // LOG OUT
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});



// Route::get('/dashboard', [UsersController::class, 'dashboard'])->middleware('auth.basic.once');


