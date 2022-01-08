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

Route::get('/stations', [StationController::class, 'index'])
    ->name('stations.index');
Route::get('/stations/{station}', [StationController::class, 'show'])
    ->name('stations.show');
Route::get('/stations/{station}/stamps/{stamp}', [StampController::class, 'show'])
    ->name('stamps.show');

Route::get('/news', [PostController::class, 'index'])->name('posts.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::group(['as' => 'stamps.', 'prefix' => '/stations/{station}/stamps'], function () {
        Route::post('{stamp}/image', [StampController::class, 'storeImage'])
            ->name('upload-image');
    });

    Route::group(['as' => 'admin.', 'prefix' => '/mg_admin', 'middleware' => ['can:access_admin']], function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])
            ->name('index');

        Route::group(['as' => 'prefectures.', 'prefix' => '/prefectures'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\PrefectureController::class, 'index'])
                ->name('index')
                ->can('viewAny', \App\Models\Prefecture::class);
            Route::get('/create', [\App\Http\Controllers\Admin\PrefectureController::class, 'create'])
                ->name('create')
                ->can('create', \App\Models\Prefecture::class);
            Route::post('/', [\App\Http\Controllers\Admin\PrefectureController::class, 'store'])
                ->name('store')
                ->can('create', \App\Models\Prefecture::class);
            Route::get('/{prefecture}/edit', [\App\Http\Controllers\Admin\PrefectureController::class, 'edit'])
                ->name('edit')
                ->can('update', 'prefecture');
            Route::put('/{prefecture}', [\App\Http\Controllers\Admin\PrefectureController::class, 'update'])
                ->name('update')
                ->can('update', 'prefecture');
            Route::delete('/{prefecture}', [\App\Http\Controllers\Admin\PrefectureController::class, 'destroy'])
                ->name('delete')
                ->can('delete', 'prefecture');
        });

        Route::group(['as' => 'cities.', 'prefix' => '/cities'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\CityController::class, 'index'])
                ->name('index')
                ->can('viewAny', \App\Models\City::class);
            Route::get('/create', [\App\Http\Controllers\Admin\CityController::class, 'create'])
                ->name('create')
                ->can('create', \App\Models\City::class);
            Route::post('/', [\App\Http\Controllers\Admin\CityController::class, 'store'])
                ->name('store')
                ->can('create', \App\Models\City::class);
            Route::get('/{city}/edit', [\App\Http\Controllers\Admin\CityController::class, 'edit'])
                ->name('edit')
                ->can('update', 'city');
            Route::put('/{city}', [\App\Http\Controllers\Admin\CityController::class, 'update'])
                ->name('update')
                ->can('update', 'city');
            Route::delete('/{city}', [\App\Http\Controllers\Admin\CityController::class, 'destroy'])
                ->name('delete')
                ->can('delete', 'city');
        });

        Route::group(['as' => 'postcodes.', 'prefix' => '/postcodes'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\PostcodeController::class, 'index'])
                ->name('index')
                ->can('viewAny', \App\Models\Postcode::class);
            Route::get('/create', [\App\Http\Controllers\Admin\PostcodeController::class, 'create'])
                ->name('create')
                ->can('create', \App\Models\Postcode::class);
            Route::post('/', [\App\Http\Controllers\Admin\PostcodeController::class, 'store'])
                ->name('store')
                ->can('create', \App\Models\Postcode::class);
            Route::get('/{postcode}/edit', [\App\Http\Controllers\Admin\PostcodeController::class, 'edit'])
                ->name('edit')
                ->can('update', 'postcode');
            Route::put('/{postcode}', [\App\Http\Controllers\Admin\PostcodeController::class, 'update'])
                ->name('update')
                ->can('update', 'postcode');
            Route::delete('/{postcode}', [\App\Http\Controllers\Admin\PostcodeController::class, 'destroy'])
                ->name('delete')
                ->can('delete', 'postcode');
        });

        Route::group(['as' => 'streets.', 'prefix' => '/streets'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\StreetController::class, 'index'])
                ->name('index')
                ->can('viewAny', \App\Models\Street::class);
            Route::get('/create', [\App\Http\Controllers\Admin\StreetController::class, 'create'])
                ->name('create')
                ->can('create', \App\Models\Street::class);
            Route::post('/', [\App\Http\Controllers\Admin\StreetController::class, 'store'])
                ->name('store')
                ->can('create', \App\Models\Street::class);
            Route::get('/{street}/edit', [\App\Http\Controllers\Admin\StreetController::class, 'edit'])
                ->name('edit')
                ->can('update', 'street');
            Route::put('/{street}', [\App\Http\Controllers\Admin\StreetController::class, 'update'])
                ->name('update')
                ->can('update', 'street');
            Route::delete('/{street}', [\App\Http\Controllers\Admin\StreetController::class, 'destroy'])
                ->name('delete')
                ->can('delete', 'street');
        });

        Route::group(['as' => 'companies.', 'prefix' => '/companies'], function () {
            Route::get('/', [\App\Http\Controllers\Admin\CompanyController::class, 'index'])
                ->name('index')
                ->can('viewAny', \App\Models\Company::class);
            Route::get('/create', [\App\Http\Controllers\Admin\CompanyController::class, 'create'])
                ->name('create')
                ->can('create', \App\Models\Company::class);
            Route::post('/', [\App\Http\Controllers\Admin\CompanyController::class, 'store'])
                ->name('store')
                ->can('create', \App\Models\Company::class);
            Route::get('/{company}/edit', [\App\Http\Controllers\Admin\CompanyController::class, 'edit'])
                ->name('edit')
                ->can('update', 'company');
            Route::put('/{company}', [\App\Http\Controllers\Admin\CompanyController::class, 'update'])
                ->name('update')
                ->can('update', 'company');
            Route::delete('/{company}', [\App\Http\Controllers\Admin\CompanyController::class, 'destroy'])
                ->name('delete')
                ->can('delete', 'company');
        });
    });
});

require __DIR__ . '/auth.php';
