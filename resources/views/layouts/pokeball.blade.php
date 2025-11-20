<!DOCTYPE html>
<html>

<head>
  <title>Pokédex</title>

  <style>
    body {
      margin: 0;
      font-family: Arial;
      background: #F2F2F2;
    }

    /* Encabezado estilo pokebola */
    .header {
      background: linear-gradient(#E3350D 50%, #FFFFFF 50%);
      padding: 25px;
      text-align: center;
      border-bottom: 10px solid #000;
    }

    .header h1 {
      color: #000;
      font-size: 48px;
      margin: 0;
      font-weight: bold;
      text-shadow: 2px 2px #fff;
    }

    /* Contenedor general */
    .container {
      width: 90%;
      max-width: 1100px;
      margin: 30px auto;
    }

    /* Tarjetas Pokémon */
    .card {
      background: white;
      padding: 20px;
      border-radius: 15px;
      border: 4px solid #000;
      margin-bottom: 25px;
      text-align: center;
      box-shadow: 4px 4px 0 #000;
      transition: transform .2s;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card img {
      width: 120px;
    }

    /* Grid */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 20px;
    }

    /* Botón estilo pokebola */
    .btn-poke {
      background: #E3350D;
      color: white;
      border: 3px solid black;
      padding: 10px 20px;
      font-size: 18px;
      border-radius: 10px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
      box-shadow: 3px 3px 0 #000;
      transition: 0.2s;
    }

    .btn-poke:hover {
      background: #b82909;
      transform: scale(1.05);
    }

    /* Títulos */
    h2 {
      color: #000;
      border-left: 10px solid #E3350D;
      padding-left: 10px;
    }
  </style>
</head>

<body>

  {{-- HEADER POKEBOLA --}}
  <div class="header">
    <h1>Pokédex</h1>
  </div>

  <div class="container">
    @yield('content')
  </div>

</body>

</html>