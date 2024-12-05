<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MiniSliderController;
use App\Http\Controllers\Admin\SecondSliderController;

Auth::routes();



//<---------------------------------------Frontend Controller -------------------------------------------------------->//

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news/{id}', [NewsController::class, 'newsview'])->name('newsview');
Route::get('/', [SliderController::class, 'view'])->name('sliders');



// <------------------------------------------Admin Middleware and Controllers-------------------------------------------------->//



Route::prefix('admin')->middleware([RoleMiddleware::class])->group(function () {

//<---------------------------------------Category Controllers -------------------------------------------------------->//

    Route::controller(CategoryController::class)->prefix('categories')->group(function () {
        Route::get('/', 'index')->name('admin.categories.index');
        Route::get('/create', 'create')->name('admin.categories.create');
        Route::post('/', 'store')->name('admin.categories.store');
        Route::get('/{category}/edit', 'edit')->name('admin.categories.edit');
        Route::put('/{category}', 'update')->name('admin.categories.update');
        Route::delete('/{category}', 'destroy')->name('admin.categories.destroy');
    });

//<---------------------------------------News Controllers -------------------------------------------------------->//

    Route::controller(NewsController::class)->prefix('news')->group(function () {
        Route::get('/', 'Adminindex')->name('admin.news');
        Route::get('/create', 'create')->name('admin.news.create');
        Route::post('/', 'store')->name('admin.news.store');
        Route::get('/{id}/edit', 'edit')->name('admin.news.edit');
        Route::put('/{id}', 'update')->name('admin.news.update');
        Route::delete('/{id}', 'destroy')->name('admin.news.destroy');
    });

//<---------------------------------------Brand Controllers -------------------------------------------------------->//


    Route::controller(BrandController::class)->prefix('brands')->group(function () {
        Route::get('/', 'index')->name('admin.brands.index');
        Route::get('/create/{id?}', 'form')->name('admin.brands.create');
        Route::post('/save/{id?}', 'save')->name('admin.brands.save');
        Route::delete('/delete/{id}', 'delete')->name('admin.brands.delete');
    });

   Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

});









//<---------------------------------------Slider Controllers -------------------------------------------------------->//


Route::prefix('admin')->middleware([RoleMiddleware::class])->name('admin.')->group(function () {
    Route::controller(SliderController::class)->prefix('sliders')->name('sliders.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/{slider}/edit', 'edit')->name('edit');
        Route::put('/{slider}', 'update')->name('update');
        Route::delete('/{slider}', 'destroy')->name('destroy');
    });
});
Route::prefix('admin')->middleware([RoleMiddleware::class])->group(function () {
    Route::controller(SecondSliderController::class)->prefix('secondsliders')->name('admin.secondsliders.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/{secondSlider}/edit', 'edit')->name('edit');
        Route::put('/{secondSlider}', 'update')->name('update');
        Route::delete('/{secondSlider}', 'destroy')->name('destroy');
    });
});
Route::prefix('admin')->middleware([RoleMiddleware::class])->group(function () {
    Route::controller(MiniSliderController::class)->prefix('minisiders')->name('admin.minisiders.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/{minisiders}/edit', 'edit')->name('edit');
        Route::put('/{minisiders}', 'update')->name('update');
        Route::delete('/{minisiders}', 'destroy')->name('destroy');
    });
});


// <------------------------------------------------------------------------------------------------------------------------------------>//
