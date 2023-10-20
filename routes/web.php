<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->whereNumber('animal')->name('animals.edit');
Route::put('/animals/{animal}', [AnimalController::class, 'update'])->whereNumber('animal')->name('animals.update');

Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->whereNumber('animal')->name('animals.destroy');

Route::get('/animals/{animal}', [AnimalController::class, 'show'])->whereNumber('animal')->name('animals.show');

Route::get('/owners/{owner}', [OwnerController::class, 'show'])->whereNumber('owner')->name('owners.show');


Route::get('/search', [AnimalController::class, 'search']);
