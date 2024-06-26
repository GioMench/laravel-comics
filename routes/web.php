<?php

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

Route::get('/', function () {

    $comics = config('db.comics');
    return view('home', compact('comics'));
});

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comic/{id}', function ($id) {
    abort_unless($id >= 0 && $id < count(config('db.comics')),404);
    $comic = config('db.comics')[$id];
    return view('comic',compact('comic'));
})->name('comic');