<?php

use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProkerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/prokerview', [ProkerController::class, 'index'])->middleware(['auth', 'verified'])->name('prokerview');

Route::middleware(('auth'))->group(function(){
    Route::post('/proker/store', [ProkerController::class, 'store'])->name('proker.store');
    Route::post('/proker/update', [ProkerController::class, 'update'])->name('proker.update');
    Route::post('/proker/editView/{id?}', [ProkerController::class, 'editView'])->name('proker.editView');
    Route::delete('/proker/delete/{id?}', [ProkerController::class, 'delete'])->name('proker.delete');
    Route::get('/proker/addView', [ProkerController::class, 'addView'])->name('proker.addView');
});

Route::middleware('auth')->group(function () {
    Route::get('/postingan/addPostingan/{id?}', [PostingController::class, 'addView'])->name('posting.addView');
    Route::get('/postingan/view/{id?}', [PostingController::class, 'index'])->name('postingview');
    Route::post('/postingan/update', [PostingController::class, 'update'])->name('posting.update');
    Route::post('/postingan/editView', [PostingController::class, 'editView'])->name('posting.editView');
    Route::delete('/postingan/delete', [PostingController::class, 'delete'])->name('posting.delete');
    Route::post('/postingan/store', [PostingController::class, 'store'])->name('posting.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
