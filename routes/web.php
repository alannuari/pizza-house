<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index')->middleware('admin');
    Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizza.create');
    Route::post('/pizza', [PizzaController::class, 'store'])->name('pizza.store');
    Route::get('/pizza/{id}', [PizzaController::class, 'show'])->name('pizza.show')->middleware('admin');
    Route::delete('/pizza/{id}', [PizzaController::class, 'destroy'])->name('pizza.destroy')->middleware('admin');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
