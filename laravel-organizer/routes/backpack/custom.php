<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('catatan-kas', 'CatatanKasCrudController');
    Route::crud('file', 'FileCrudController');
    Route::crud('kas', 'KasCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('proker', 'ProkerCrudController');
    Route::crud('role', 'RoleCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('larazer', 'LarazerCrudController');
}); // this should be the absolute last line of this file