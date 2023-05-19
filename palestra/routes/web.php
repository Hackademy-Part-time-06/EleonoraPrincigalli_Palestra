<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/homepage', [PageController::class, 'index']) -> name('homepage');

Route::get('/corsi', [PageController::class, 'corsi']) -> name('corsi');

Route::get('/dettagli/{ref}', [PageController::class, 'dettagli'])->name('detail');





Route::get('/contatti', [PageController::class, 'contact']) -> name('contatti');
Route::post('/send', [PageController::class, 'send']) -> name('send');


