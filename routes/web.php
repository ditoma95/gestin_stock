<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

//-----------------------------------------------------------------------------------------------------------------
Route::middleware('auth')->group(function (){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

//---------------------------------------------------------------------------------------------------------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// -------------------------------------------------------------------------------------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Route::prefix('/roles')->name('roles.')->controller(RoleController::class)->group(function() {
//     Route::get('/', 'index')->name('role.index');
//     Route::get('/roles', 'create')->name('role.create');
//     Route::get('/roles/{role}', 'show')->name('role.show');
//     Route::put('/roles/{role}', 'store')->name('role.store');
//     Route::get('/roles/{role}/edit', 'edit')->name('role.edit');
//     Route::get('/roles/{role}', 'update')->name('role.update');
//     Route::delete('/roles/{role}', 'destroy')->name('role.destroy');

// });
