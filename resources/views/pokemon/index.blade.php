@extends('layouts.pokeball')

@section('content')

<h2>Pokémon Iniciales</h2>

<div class="grid">
  @foreach($pokemons as $p)
  <a href="{{ route('pokemon.show', $p['name']) }}" class="card">
    <img src="{{ $p['img'] }}">
    <h3>{{ ucfirst($p['name']) }}</h3>
  </a>
  @endforeach
</div>

@endsection