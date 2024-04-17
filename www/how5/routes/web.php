<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
//Route::resource('photos', PhotoController::class);
//Route::post('/photos', PhotoController::class .'@store')->name('photos.store');

Route::get('/', PhotoController::class .'@index')->name('photos.index');
// returns the form for adding a photo
Route::get('/photos/create', PhotoController::class . '@create')->name('photos.create');
// adds a photo to the database
Route::post('/photos', PhotoController::class .'@store')->name('photos.store');
// returns a page that shows a full photo
Route::get('/photos/{photo}', PhotoController::class .'@show')->name('photos.show');
// returns the form for editing a photo
Route::get('/photos/{photo}/edit', PhotoController::class .'@edit')->name('photos.edit');
// updates a photo
Route::put('/photos/{photo}', PhotoController::class .'@update')->name('photos.update');
// deletes a photo
Route::delete('/photos/{photo}', PhotoController::class .'@destroy')->name('photos.destroy');


require __DIR__.'/auth.php';
