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
    Route::crud('user', 'UserCrudController');
    Route::crud('mahasiswa', 'MahasiswaCrudController');
    Route::crud('dosen', 'DosenCrudController');
    Route::crud('fakultas', 'FakultasCrudController');
    Route::crud('gedung', 'GedungCrudController');
    Route::crud('kelas', 'KelasCrudController');
    Route::crud('mata-kuliah', 'MataKuliahCrudController');
    Route::crud('prodi', 'ProdiCrudController');
    Route::crud('ruang-kelas', 'RuangKelasCrudController');
}); // this should be the absolute last line of this file