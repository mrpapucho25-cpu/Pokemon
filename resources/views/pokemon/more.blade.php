@extends('layouts.pokeball')

@section('content')

<div class="card">

  <h2>Más detalles de {{ ucfirst($pokemon['name']) }}</h2>

  <h3>Evoluciones</h3>
  <ul>
    @php $chain = $evolution['chain']; @endphp

    <li>{{ ucfirst($chain['species']['name']) }}</li>

    @if(isset($chain['evolves_to'][0]))
    <li>→ {{ ucfirst($chain['evolves_to'][0]['species']['name']) }}</li>

    @if(isset($chain['evolves_to'][0]['evolves_to'][0]))
    <li>→ {{ ucfirst($chain['evolves_to'][0]['evolves_to'][0]['species']['name']) }}</li>
    @endif
    @endif
  </ul>

  <h3>Zonas donde aparece</h3>
  @if(count($encounters) == 0)
  <p>No aparece salvaje.</p>
  @else
  <ul>
    @foreach($encounters as $enc)
    <li>{{ ucfirst($enc['location_area']['name']) }}</li>
    @endforeach
  </ul>
  @endif

  <a class="btn-poke" href="{{ route('pokemon.show', $pokemon['name']) }}">
    Regresar
  </a>

</div>

@endsection