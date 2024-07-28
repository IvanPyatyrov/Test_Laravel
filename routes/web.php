<?php

use App\Http\Controllers\ImportController;

Route::get('/import', [ImportController::class, 'showImportForm']);
Route::post('/import', [ImportController::class, 'import']);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);

