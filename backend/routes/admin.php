<?php

use App\Http\Controllers\Admin\{
    ContactController,
    CourseController,
    CrudController,
    DashboardController
};

use Illuminate\Support\Facades\Route;



Route::prefix('admin')->as('admin.')->middleware(['auth:admin'])->group(function () {

    # Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CrudController::class)->name('crud.')->prefix('crud')->group(function () {

        Route::get('get-all-data', 'getAllData')->name('get-all-data');
        Route::get('/', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::delete('{crud}', 'destroy')->name('destroy');
        Route::get('{crud}', 'show')->name('view');

        Route::post('{crud}', 'update')->name('update');
    });

    # Course

    Route::controller(CourseController::class)->prefix('courses')->name('courses.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/videos/{course}', 'view')->name('view');
        Route::get('/create/videos/{course}', 'createCourseVideo')->name('create');
        Route::post('/store/videos/{course}', 'storeCourseVideo')->name('store');
    });

    # Contact

    Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{contact}', 'view')->name('view');
        Route::get('/ajax/all', 'all')->name('all');
    });
});
