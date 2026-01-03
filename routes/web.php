<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('admin.index');
// });

Route::prefix('admin')->group(function () {

    Auth::routes();
});

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('index_route');


    Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create_route');

    Route::post('/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store_category_route');

    Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit_route');

    Route::post('/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update_category_route');

    Route::post('/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('delete_route');

    Route::post('/categories/restore/{id}', [App\Http\Controllers\CategoryController::class, 'restore'])->name('restore_route');


    Route::get('/stores', [App\Http\Controllers\StoreController::class, 'index'])->name('index_store_route');

    Route::get('/stores/create', [App\Http\Controllers\StoreController::class, 'create'])->name('store_create_route');

    Route::post('/stores/store', [App\Http\Controllers\StoreController::class, 'store'])->name('store_store_route');

    Route::get('/stores/edit/{id}', [App\Http\Controllers\StoreController::class, 'edit'])->name('edit_store_route');

    Route::post('/stores/update/{id}', [App\Http\Controllers\StoreController::class, 'update'])->name('update_store_route');

    Route::post('/stores/delete/{id}', [App\Http\Controllers\StoreController::class, 'destroy'])->name('delete_store_route');

    Route::post('/stores/restore/{id}', [App\Http\Controllers\StoreController::class, 'restore'])->name('restore_store_route');
});





Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index']);

Route::get('/categories/{id}', [App\Http\Controllers\WebsiteController::class, 'show'])->name('categories_show');
