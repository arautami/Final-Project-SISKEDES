<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CashflowController;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/datawarga', [WargaController::class, 'index'])->name('indexWarga');
Route::get('/tambahWarga', [WargaController::class, 'create'])->name('createWarga');
Route::get('/tampilkanDataWarga/{id}', [WargaController::class, 'show'])->name('showWarga');
Route::get('/hapusDataWarga/{id}', [WargaController::class, 'destroy'])->name('destroyWarga');
Route::post('/insertDataWarga', [WargaController::class, 'store'])->name('storeWarga');
Route::post('/updateDataWarga/{id}', [WargaController::class, 'update'])->name('updateWarga');

Route::get('/agenda', [AgendaController::class, 'index'])->name('indexAgenda');
Route::get('/tambahAgenda', [AgendaController::class, 'create'])->name('createAgenda');
Route::get('/tampilkanAgeda/{id}', [AgendaController::class, 'show'])->name('showAgenda');
Route::get('/hapusAgenda/{id}', [AgendaController::class, 'destroy'])->name('destroyAgenda');
Route::post('/insertAgenda', [AgendaController::class, 'store'])->name('storeAgenda');
Route::post('/updateAgenda/{id}', [AgendaController::class, 'update'])->name('updateAgenda');

Route::get('/cashflow', [CashflowController::class, 'index'])->name('indexCashflow');
Route::get('/tambahCashflow', [CashflowController::class, 'create'])->name('createCashflow');
Route::get('/tampilkanCashflow/{id}', [CashflowController::class, 'show'])->name('showCashflow');
Route::get('/hapusCashflow/{id}', [CashflowController::class, 'destroy'])->name('destroyCashflow');
Route::post('/insertCashflow', [CashflowController::class, 'store'])->name('storeCashflow');
Route::post('/updateCashflow/{id}', [CashflowController::class, 'update'])->name('updateCashflow');
Route::post('/cariData', [CashflowController::class, 'laporan'])->name('laporanCashflow');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/laporan', function () {
    return view('laporan');
});

require __DIR__.'/auth.php';
