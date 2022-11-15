<?php

use App\Http\Controllers\pagesController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {


    // Profile Routs in admin
    Route::get('profile', function () {
        return view('profile');
    })->middleware(['auth']);
    Route::post('profile', [pagesController::class, 'profile'])->middleware(['auth'])->name('profile');



    // Pages Routs in admin
    Route::get('pages', [pagesController::class, 'index'])->middleware(['auth'])->name('pages');
    Route::get('pages/list', [pagesController::class, 'index'])->middleware(['auth'])->name('pages');
    Route::get('pages/delete/{id}', [pagesController::class, 'delete'])->middleware(['auth'])->name('addDelete');
    Route::get('pages/add', function () {
        return view('pages.add');
    });
    Route::post('pages/add', [pagesController::class, 'add'])->middleware(['auth'])->name('addPages');
    Route::get('pages/edit/{id}', [pagesController::class, 'edit'], function () {
        return view('pages.edit', 'id => {id}');
    });
    Route::post('pages/edit/{id}', [pagesController::class, 'edit'])->middleware(['auth'])->name('addEdit');



    // Pages Routs in admin
    Route::get('blogs', [BlogsController::class, 'index'])->middleware(['auth'])->name('blogs');
    Route::get('blogs/list', [BlogsController::class, 'index'])->middleware(['auth'])->name('blogs');
    Route::get('blogs/delete/{id}', [BlogsController::class, 'delete'])->middleware(['auth'])->name('blogDelete');

    Route::get('blogs/add', function () {
        return view('blogs.add');
    });
    Route::post('blogs/add', [BlogsController::class, 'add'])->middleware(['auth'])->name('blogAdd');

    Route::get('blogs/edit/{id}', [BlogsController::class, 'edit'], function () {
        return view('blogs.edit', 'id => {id}');
    });
    Route::post('blogs/edit/{id}', [BlogsController::class, 'edit'])->middleware(['auth'])->name('blogEdit');
});
