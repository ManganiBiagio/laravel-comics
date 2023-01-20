<!DOCTYPE html>
<html lang="iy">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  @vite('resources/js/app.js')
</head>

<body>

  {{-- header --}}
  @include('partials.header')

  <div class="container">
    {{-- segnaposto per il contenuto di ogni pagina.
        Questo dovrà essere sostituito in ogni pagina con un contenuto diverso --}}
    @yield('content')
  </div>

  {{-- footer --}}
  @include('partials.footer')

</body>

</html>