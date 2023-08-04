<?php

use App\Http\Controllers\AnakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('anak', [AnakController::class, 'index'])->name('anak.index');

Route::get('anak/create', [AnakController::class, 'create'])->name('anak.create');

Route::post('anak', [AnakController::class, 'store'])->name('anak.store');

Route::get('anak/{anak}', [AnakController::class, 'edit'])->name('anak.edit');

Route::put('anak/{anak}', [AnakController::class, 'update'])->name('anak.update');

Route::delete('anak/{anak}', [AnakController::class, 'destroy'])->name('anak.destroy');

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
