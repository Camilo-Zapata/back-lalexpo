<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/exportar-usuarios', [UserController::class, 'export'])->name('exportar');


Route::get('/home', [UserController::class, 'Users']);
Route::get('/form', [UserController::class, 'Form'])->name('Form');
Route::post('/registrar', [UserController::class, 'Registrar'])->name('Registrar');

