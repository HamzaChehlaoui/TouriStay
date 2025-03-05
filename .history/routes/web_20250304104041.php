<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TourisController;
use App\Http\Controllers\ReservationController;

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');


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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/touris', function() {
    return view('touris/index');
});

Route::get('/properties', function() {
    return view('properties/index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin',[AdminController::class, 'index'])->name('admin.dashbord');
// Route::get('admin/dashbord', [HomeController::class,'index']);
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

Route::delete('/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
Route::get('/properties/{id}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
Route::put('/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');
Route::get('/touris', [TourisController::class, 'index'])->name('touris.index');
Route::get('/touris', [TourisController::class, 'Pagination'])->name('touris.index');
Route::post('/favorites', [FavoriteController::class, 'store'])->name('favorites.store');
Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
Route::get('/search', [TourisController::class, 'search'])->name('search');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
