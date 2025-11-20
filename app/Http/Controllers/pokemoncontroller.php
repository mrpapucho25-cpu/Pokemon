<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
  public function index()
  {
    // 20 pokemones para vista inicial
    $response = Http::get("https://pokeapi.co/api/v2/pokemon?limit=20");
    $pokemons = $response->json()['results'];

    // Agregar sprite rápido
    foreach ($pokemons as &$p) {
      $details = Http::get($p['url'])->json();
      $p['img'] = $details['sprites']['front_default'];
    }

    return view('pokemon.index', compact('pokemons'));
  }

  public function list()
  {
    // Lista con 151
    $response = Http::get("https://pokeapi.co/api/v2/pokemon?limit=151");
    $pokemons = $response->json()['results'];

    foreach ($pokemons as &$p) {
      $details = Http::get($p['url'])->json();
      $p['img'] = $details['sprites']['front_default'];
    }

    return view('pokemon.list', compact('pokemons'));
  }

  public function show($name)
  {
    $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}")->json();
    $species = Http::get($pokemon['species']['url'])->json();

    return view('pokemon.show', compact('pokemon', 'species'));
  }

  public function more($name)
  {
    $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}")->json();
    $species = Http::get($pokemon['species']['url'])->json();
    $evolution = Http::get($species['evolution_chain']['url'])->json();
    $encounters = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}/encounters")->json();

    return view('pokemon.more', compact('pokemon', 'species', 'evolution', 'encounters'));
  }
}
