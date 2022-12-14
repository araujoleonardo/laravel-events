<?php

use App\Http\Controllers\EventController;
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


//ROTAS PARA CONTROLLER DE EVENTOS
//Route::resource('/events', EventController::class)->middleware('auth');
Route::get('/', [EventController::class, 'index'])->name('events.index');
Route::get('/dashboard', [EventController::class, 'dashboard'])->name('events.dashboard')->middleware('auth');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create')->middleware('auth');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit')->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->name('events.update')->middleware('auth');

//ROTA DE RELACIONAMENTO MANY TO MANY
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->name('event.user.join')->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->name('event.user.leave')->middleware('auth');