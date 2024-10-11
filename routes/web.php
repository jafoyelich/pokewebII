<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;

Route::get('/pokedex', [PokedexController::class, 'index']);
Route::get('/pokedex/{pokemon}', [PokedexController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
