<?php

use App\Http\Controllers\BajuController;
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

// Route::resource('/baju', BajuController::class);

Route::get('baju', [BajuController::class, 'index'])->name('baju.index');
Route::get('baju/create', [BajuController::class, 'create'])->name('baju.create');
Route::post('baju', [BajuController::class, 'store'])->name('baju.store');
Route::get('baju/edit/{id}', [BajuController::class, 'edit'])->name('baju.edit');
Route::put('baju/{id}', [BajuController::class, 'update'])->name('baju.update');
Route::delete('delete/{id}', [BajuController::class, 'destroy'])->name('baju.destroy');
