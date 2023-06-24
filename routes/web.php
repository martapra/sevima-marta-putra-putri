<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticlePackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/',[HomeController::class,'index'])
    ->name('home');
    
Route::get('/detail',[DetailController::class,'index'])
    ->name('detail');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/',[DashboardController::class,'index'])
            ->name('dashboard');

            Route::resource('article-package', ArticlePackageController::class);
    });

Route::resource('article-package', ArticlePackageController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('portfolio', PortfolioController::class);
Route::resource('service', ServiceController::class);


Auth::routes(['verify' => true]);


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});