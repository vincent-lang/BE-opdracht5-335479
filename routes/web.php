<?php

use App\Http\Controllers\GegevensController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GegevensController::class, 'index'])->name('snoep.index');

Route::get('/leverancier/index/{data}', [GegevensController::class, 'LeverancierIndex'])->name('snoep.leverancierIndex');

Route::get('/allergeen/index/{data}', [GegevensController::class, 'AllergeenIndex'])->name('snoep.allergeenIndex');
