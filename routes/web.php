<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\StationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/stations', [StationController::class, 'index'])->name('stations.index');
Route::get('/stations/{station}', [StationController::class, 'show'])->name('stations.show');
Route::get('/stations/{station}/stamps/{stamp}', [StampController::class, 'show'])->name('stamps.show');

Route::get('/news', [PostController::class, 'index'])->name('posts.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::group(['as' => 'stamps.', 'prefix' => '/stations/{station}/stamps'], function() {
        Route::post('{stamp}/image', [StampController::class, 'storeImage'])->name('upload-image');
    });

    Route::group(['as' => 'admin.', 'prefix' => '/mg_admin', 'middleware' => ['can:access_admin']], function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
        Route::group(['as' => 'prefectures.', 'prefix' => '/prefectures'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\PrefectureController::class, 'index'])->name('index');
            Route::get('/{prefecture}', [\App\Http\Controllers\Admin\PrefectureController::class, 'show'])->name('show')->can('view', 'prefecture');
        });
    });
});

require __DIR__ . '/auth.php';
