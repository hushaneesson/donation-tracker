<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

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

Route::get('/', [DonationController::class, 'home']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DonationController::class, 'index'])->name('dashboard');
    Route::post('/donations', [DonationController::class, 'store'])->name('new-donation');
});



require __DIR__ . '/auth.php';
