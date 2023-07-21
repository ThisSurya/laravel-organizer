<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\PermissionController;
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


// Proker

Route::get('/proker', [ProkerController::class, 'index'])->middleware(['auth', 'verified'])->name('prokerview');
Route::middleware(('auth'))->group(function(){
    Route::post('/proker/store', [ProkerController::class, 'store'])->name('proker.store');
    Route::post('/proker/update', [ProkerController::class, 'update'])->name('proker.update');
    Route::get('/proker/editView/{id?}', [ProkerController::class, 'editView'])->name('proker.editView');
    Route::delete('/proker/delete/{id?}', [ProkerController::class, 'delete'])->name('proker.delete');
    Route::get('/proker/addView', [ProkerController::class, 'addView'])->name('proker.addView');
    Route::post('/proker/done/{id?}', [ProkerController::class, 'done'])->name('proker.done');
});

//nambah postingan sesuai proker
Route::middleware('auth')->group(function () {
    Route::get('/postingan/addPostingan/{id?}', [PostingController::class, 'addView'])->name('posting.addView');
    Route::get('/postingan/addMember/{id?}', [PostingController::class, 'addMemberView'])->name('posting.addMemberView');
    Route::get('/postingan/view/{id?}', [PostingController::class, 'index'])->name('postingview');
    Route::post('/postingan/update', [PostingController::class, 'update'])->name('posting.update');
    Route::post('/postingan/editView/', [PostingController::class, 'editView'])->name('posting.editView');
    Route::delete('/postingan/delete', [PostingController::class, 'delete'])->name('posting.delete');
    Route::post('/postingan/store', [PostingController::class, 'store'])->name('posting.store');
    Route::post('/postingan/storeMember', [PostingController::class, 'addMember'])->name('posting.storeMember');
    Route::post('/postingan/kickMember', [PostingController::class, 'kickMember'])->name('posting.kickMember');
    Route::post('/postingan/done', [PostingController::class, 'done'])->name('post.done');
});

//File

Route::get('/document', [DocumentController::class, 'View'])->name('file.view');
Route::middleware('auth')->group(function () {
    Route::get('addFiles', [DocumentCOntroller::class, 'addView'])->name('file.addView');
    Route::get('/downloadFiles/{id?}', [DocumentController::class, 'download'])->name('file.download');
    Route::post('/storeFiles', [DocumentController::class, 'store'])->name('file.formUpload');
    Route::delete('/deleteFiles', [DocumentController::class, 'delete'])->name('file.delete');
});

// Kas
Route::get('/kas', [KasController::class, 'index'])->middleware(['auth', 'verified'])->name('kas.view');
Route::middleware('auth')->group(function () {
    Route::get('/kas/catat', [KasController::class, 'create'])->name('kas.create');
    Route::post('/kas/store', [KasController::class, 'store'])->name('kas.store');
});
// Profile

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Role
Route::middleware('auth')->group(function () {
    Route::get('/role', [PermissionController::class, 'index'])->name('role.view');
    Route::get('/addroleview', [PermissionController::class, 'addview'])->name('role.addview');
    Route::post('/changerole', [PermissionController::class, 'change'])->name('role.change');
});
require __DIR__.'/auth.php';
