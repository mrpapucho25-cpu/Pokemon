@extends('layouts.pokeball')

@section('content')

<div class="card">
  <h2>{{ ucfirst($pokemon['name']) }}</h2>

  <img src="{{ $pokemon['sprites']['front_default'] }}">

  <h3>Tipo(s)</h3>
  <ul>
    @foreach($pokemon['types'] as $t)
    <li>{{ ucfirst($t['type']['name']) }}</li>
    @endforeach
  </ul>

  <a class="btn-poke" href="{{ route('pokemon.more', $pokemon['name']) }}">
    Ver más detalles
  </a>
</div>

@endsection