<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::prefix('categories')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
});

?>





