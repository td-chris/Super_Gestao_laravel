<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Sobre Nós - @yield('title')</title>
      <meta charset="utf-8">
      
      <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>

    <body>
      @include('site.layouts._partials.topo')

      @yield('content')
    </body>
</html>