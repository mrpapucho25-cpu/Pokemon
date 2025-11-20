<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pokemoncontroller;

Route::get('/', [PokemonController::class, 'index'])->name('home');

Route::get('/pokemons', [PokemonController::class, 'list'])->name('pokemon.list');

Route::get('/pokemon/{name}', [PokemonController::class, 'show'])->name('pokemon.show');

Route::get('/pokemon/{name}/more', [PokemonController::class, 'more'])->name('pokemon.more');
