<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Plants\PlantParentsSpecies;

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
        Route::get('/', [PlantParentsSpecies::class, 'index'])->name('plant_parents_species_index');
        Route::get('/create', [PlantParentsSpecies::class, 'create'])->name('plant_parents_species_create');
        Route::post('/store', [PlantParentsSpecies::class, 'store'])->name('plant_parents_species_store');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
