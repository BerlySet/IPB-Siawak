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
    return view('landing');
});

Route::get('/template', function () {
    return view('template.main');
});
// CREATE NEW ROUTE FOR NEW URL

// AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::group(['middleware' => ['auth']], function () {
    // LOGIN KETUA
    Route::group(['middleware' => ['cek_login']], function () {
        // DASHBOARD
        Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('chairman');

        // RECRUITMENT
        Route::get('/recruitments', [RecruitmentsController::class, 'index']);
        Route::get('recruitments/completed', [RecruitmentsController::class, 'show_completed'])->name('rec_completed');
        Route::get('recruitments/running', [RecruitmentsController::class, 'show_running'])->name('rec_running');
        Route::get('recruitments/upcoming', [RecruitmentsController::class, 'show_upcoming'])->name('rec_upcoming');
        Route::get('recruitments/canceled', [RecruitmentsController::class, 'show_canceled'])->name('rec_canceled');
        Route::resource('recruitments', RecruitmentsController::class);
        Route::get('/create', [RecruitmentsController::class,'create']);

        // PROFILE
        Route::get('/profile', [UsersController::class, 'index']);

        // CERTIFICATE
        Route::get('/certificate', [CertificateController::class, 'index'])->name('sertif');
        Route::get('/certificate/new/{certificate}', [CertificateController::class, 'create'])->name('tambah_sertif');
        Route::post('/certificate/new/{certificate}', [CertificateController::class, 'store'])->name('simpan_sertif');
        Route::get('/certificate/api/{certificate}', [CertificateController::class, 'api'])->name('api_sertif');
        // Route::get('/certificate/new/{id}', [CertificateController::class, 'create'])->name('tambah_sertif');
        
        // MEMBERS
        Route::get('/members', [UsersController::class, 'members']);
        Route::get('/members/edit/{members}', [UsersController::class, 'members_edit']);
        Route::post('/members/edit/{members}', [UsersController::class, 'store']);
        Route::get('/members/list/{members}', [UsersController::class, 'members_list'])->name('members_list');

        // LOG OUT
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
    // LOGIN MAHASISWA
    Route::group(['middleware' => ['cek_login_user']], function () {
        // DASHBOARD
        Route::get('user/dashboard', [UsersController::class, 'dashboard_user'])->name('user');

        // RECRUITMENT
        Route::get('user/recruitments', [UsersController::class, 'recruitments_user']);
        Route::get('user/recruitments/{recruitments}', [RecruitmentsController::class, 'daftar_oprec']);
        Route::post('user/recruitments/{recruitments}/register', [RecruitmentsController::class, 'store_user']);

        // HISTORY
        Route::get('user/history', [UsersController::class, 'history_user']);

        // PROFILE
        Route::get('user/profile', [UsersController::class, 'profile_user']);

        // LOG OUT
        Route::get('user/logout', [AuthController::class, 'logout'])->name('logout');
    });
});



// Route::get('/dashboard', [UsersController::class, 'dashboard'])->middleware('auth.basic.once');


