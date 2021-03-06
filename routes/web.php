<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\Plants\PlantParentSpecieController;
use App\Http\Controllers\Admin\Plants\PlantTypeController;
use App\Http\Controllers\Admin\Plants\PlantsController;
use App\Http\Controllers\Admin\Plants\DashboardController;
use App\Http\Controllers\Admin\Users\MyProfileController;
use App\Http\Controllers\Admin\Users\SettingsController;
use App\Http\Controllers\Admin\Users\UsersController;

use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Website\AboutController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/', function () {
    if(Auth::check()){
        return redirect()->route('home', [Auth::User()->settings->language]);
    } else {
        return redirect()->route('home', ['en']);
    }
})->name('index');

Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->name('password.request');

Route::group(['prefix' => '{language}'], function(){

    App::setLocale(Request::segment(1));

    Route::get('/', [IndexController::class, 'index'])->name('home');

    Route::get('/about', [AboutController::class, 'about'])->name('about');

    Route::group(['prefix' => 'admin'], function(){

        Route::get('/', function () {
            return view('admin.layouts.pages.index');
        })->name('admin_home')->middleware('auth');

        Route::group(['prefix' => 'my-profile'], function(){
            Route::get('/', [MyProfileController::class, 'edit'])->name('my_profile_edit');
            Route::put('/edit', [MyProfileController::class, 'update'])->name('my_profile_update');
        });

        Route::group(['prefix' => 'settings'], function(){
            Route::get('/', [SettingsController::class, 'edit'])->name('settings_edit');
            Route::put('/edit/{id}', [SettingsController::class, 'update'])->name('settings_update');
        });

        Route::group(['prefix' => 'users'], function(){
            Route::get('/', [UsersController::class, 'index'])->name('admin_users_index');
            Route::post('/store', [UsersController::class, 'store'])->name('admin_users_store');
            Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('admin_users_edit');
            Route::put('/update/{id}', [UsersController::class, 'update'])->name('admin_users_update');
            Route::delete('/destroy/{id}', [UsersController::class, 'destroy'])->name('admin_users_destroy');
        });

        Route::group(['prefix' => 'plants'], function(){

            //Route::get('/', [DashboardController::class, 'indexParentSpecies'])->name('plant_dashboard_index');

            Route::group(['prefix' => 'plant-parents-species'], function(){
                Route::get('/', [PlantParentSpecieController::class, 'index'])->name('plant_parents_species_index');
                Route::get('/create', [PlantParentSpecieController::class, 'create'])->name('plant_parents_species_create');
                Route::post('/store', [PlantParentSpecieController::class, 'store'])->name('plant_parents_species_store');
                Route::get('/edit/{id}', [PlantParentSpecieController::class, 'edit'])->name('plant_parents_species_edit');
                Route::put('/update/{id}', [PlantParentSpecieController::class, 'update'])->name('plant_parents_species_update');
                Route::delete('/destroy/{id}', [PlantParentSpecieController::class, 'destroy'])->name('plant_parents_species_destroy');
            });

            Route::group(['prefix' => 'plant-types'], function(){
                Route::get('/', [PlantTypeController::class, 'index'])->name('plant_types_index');
                Route::get('/create', [PlantTypeController::class, 'create'])->name('plant_types_create');
                Route::post('/store', [PlantTypeController::class, 'store'])->name('plant_types_store');
                Route::get('/edit/{id}', [PlantTypeController::class, 'edit'])->name('plant_types_edit');
                Route::put('/update/{id}', [PlantTypeController::class, 'update'])->name('plant_types_update');
                Route::delete('/destroy/{id}', [PlantTypeController::class, 'destroy'])->name('plant_types_destroy');
            });

            Route::group(['prefix' => 'plants'], function(){
                Route::get('/', [PlantsController::class, 'index'])->name('plant_index');
                Route::get('/create', [PlantsController::class, 'create'])->name('plant_create');
                Route::post('/store', [PlantsController::class, 'store'])->name('plant_store');
                Route::get('/edit/{id}', [PlantsController::class, 'edit'])->name('plant_edit');
                Route::put('/update/{id}', [PlantsController::class, 'update'])->name('plant_update');
                Route::delete('/destroy/{id}', [PlantsController::class, 'destroy'])->name('plant_destroy');
            });
        });
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
