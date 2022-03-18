<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\SocialController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(ProductController::class)->prefix('products')->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{slug}', 'show');
    Route::post('update/{slug}', 'update');
    Route::delete('/{slug}', 'delete');
});

Route::controller(CourseController::class)->prefix('courses')->group(function () {
    Route::get('/', 'index');
    Route::get('/{slug}', 'singleCourse');
});

Route::get('social-links', [SocialController::class, 'index'])->name('social');
