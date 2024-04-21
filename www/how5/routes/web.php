<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\RecebimentoController;

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

Route::middleware('auth')->group(function () {
        Route::get('/photos', PhotoController::class .'@index')->name('photos.index');
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
});


Route::middleware('auth')->group(function () {
    Route::get('/recebimentos', RecebimentoController::class .'@index')->name('recebimentos.index');
    // returns the form for adding a recebimento
    Route::get('/recebimentos/create', RecebimentoController::class . '@create')->name('recebimentos.create');
    // adds a recebimento to the database
    Route::post('/recebimentos', RecebimentoController::class .'@store')->name('recebimentos.store');
    // returns a page that shows a full recebimento
    Route::get('/recebimentos/{recebimento}', RecebimentoController::class .'@show')->name('recebimentos.show');
    // returns the form for editing a recebimento
    Route::get('/recebimentos/{recebimento}/edit', RecebimentoController::class .'@edit')->name('recebimentos.edit');
    // updates a recebimento
    Route::put('/recebimentos/{recebimento}', RecebimentoController::class .'@update')->name('recebimentos.update');
    // deletes a recebimento
    Route::delete('/recebimentos/{recebimento}', RecebimentoController::class .'@destroy')->name('recebimentos.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/pagamentos', PagamentoController::class .'@index')->name('pagamentos.index');
    // returns the form for adding a pagamento
    Route::get('/pagamentos/create', PagamentoController::class . '@create')->name('pagamentos.create');
    // adds a pagamento to the database
    Route::post('/pagamentos', PagamentoController::class .'@store')->name('pagamentos.store');
    // returns a page that shows a full pagamento
    Route::get('/pagamentos/{pagamento}', PagamentoController::class .'@show')->name('pagamentos.show');
    // returns the form for editing a pagamento
    Route::get('/pagamentos/{pagamento}/edit', PagamentoController::class .'@edit')->name('pagamentos.edit');
    // updates a pagamento
    Route::put('/pagamentos/{pagamento}', PagamentoController::class .'@update')->name('pagamentos.update');
    // deletes a pagamento
    Route::delete('/pagamentos/{pagamento}', PagamentoController::class .'@destroy')->name('pagamentos.destroy');
});



require __DIR__.'/auth.php';
