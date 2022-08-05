<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\RegisUserController;
use App\Http\Controllers\UploadProjectWDCController;
use App\Http\Controllers\UploadProjectCTFController;
use App\Http\Controllers\UploadProjectController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/pnbwdc', [HomeController::class, 'pnbwdc']);
Route::get('/pnbdc', [HomeController::class, 'pnbdc']);
Route::get('/pnbctf', [HomeController::class, 'pnbctf']);
Route::get('/dashboard', [LevelController::class, 'level'])->middleware(['auth'])->name('dashboard');
Route::resource('competitions', 'App\Http\Controllers\CompetitionController')->middleware(['auth']);
Route::resource('kelolaUsers', 'App\Http\Controllers\KelolaUserController')->middleware(['auth']);
Route::resource('pesertaLists', 'App\Http\Controllers\PesertaListController')->middleware(['auth']);
Route::resource('pesertaAccepteds', 'App\Http\Controllers\PesertaAcceptedController')->middleware(['auth']);
Route::resource('pnbdcProjects', 'App\Http\Controllers\PnbdcProjectController');
Route::resource('pnbwdcProjects', 'App\Http\Controllers\PnbwdcProjectController');
Route::resource('pnbctfProjects', 'App\Http\Controllers\PnbctfProjectController');
require __DIR__ . '/auth.php';
Route::get('/daftar/{data}', [RegisUserController::class, 'create'])->middleware(['auth']);
Route::post('/daftar/{data}', [RegisUserController::class, 'store'])->middleware(['auth']);
Route::resource('peserta', 'App\Http\Controllers\RegisUserController')->middleware(['auth']);
Route::get('/pesertaPNBDC', [RegisUserController::class, 'indexPNBDC'])->middleware(['auth']);
Route::get('/pesertaPNBCTF', [RegisUserController::class, 'indexPNBCTF'])->middleware(['auth']);
Route::resource('payment', 'App\Http\Controllers\PaymentController')->middleware(['auth']);
Route::get('/GantiPassword', [NewPasswordController::class, 'create'])->middleware(['auth']);
Route::resource('GantiPassword', 'App\Http\Controllers\ChangePasswordController')->middleware(['auth']);
Route::resource('UploadProject', 'App\Http\Controllers\UploadProjectController')->middleware(['auth']);
Route::resource('UploadProjectWDC', 'App\Http\Controllers\UploadProjectWDCController')->middleware(['auth']);
Route::resource('UploadProjectCTF', 'App\Http\Controllers\UploadProjectCTFController')->middleware(['auth']);
Route::post('UploadProject/{id}', [UploadProjectController::class, 'update'])->middleware(['auth']);
Route::post('UploadProjectWDC/{id}', [UploadProjectWDCController::class, 'update'])->middleware(['auth']);
Route::post('UploadProjectCTF/{id}', [UploadProjectCTFController::class, 'update'])->middleware(['auth']);
// Route::post('UploadProjectWDC', [UploadProjectWDCController::class, 'store'])->middleware(['auth']);
