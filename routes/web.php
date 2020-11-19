<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Plants\PlantParentSpecieController;
use App\Http\Controllers\Plants\PlantTypeController;

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

Route::get('/', function () {
    return view('main.index');
})->name('home')->middleware('auth');

Route::group(['prefix' => 'plants'], function(){
    Route::group(['prefix' => 'plants-parents-species'], function(){
        Route::get('/', [PlantParentSpecieController::class, 'index'])->name('plant_parents_species_index');
        Route::get('/create', [PlantParentSpecieController::class, 'create'])->name('plant_parents_species_create');
        Route::post('/store', [PlantParentSpecieController::class, 'store'])->name('plant_parents_species_store');
        Route::get('/edit/{id}', [PlantParentSpecieController::class, 'edit'])->name('plant_parents_species_edit');
        Route::post('/update/{id}', [PlantParentSpecieController::class, 'update'])->name('plant_parents_species_update');
        Route::delete('/destroy/{id}', [PlantParentSpecieController::class, 'destroy'])->name('plant_parents_species_destroy');
    });

    Route::group(['prefix' => 'plants-types'], function(){
        Route::get('/', [PlantTypeController::class, 'index'])->name('plant_types_index');
        Route::get('/create', [PlantTypeController::class, 'create'])->name('plant_types_create');
        Route::post('/store', [PlantTypeController::class, 'store'])->name('plant_types_store');
        Route::get('/edit/{id}', [PlantTypeController::class, 'edit'])->name('plant_types_edit');
        Route::put('/update/{id}', [PlantTypeController::class, 'update'])->name('plant_types_update');
        Route::delete('/destroy/{id}', [PlantTypeController::class, 'destroy'])->name('plant_types_destroy');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
