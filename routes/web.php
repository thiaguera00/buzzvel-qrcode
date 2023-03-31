<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInformationsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/generate-qrcode', [App\Http\Controllers\FormsQrCodeController::class, 'store'])->name('formsqrcode');

Route::get('/user-informations', [UserInformationsController::class,'action'])->name('informations');
