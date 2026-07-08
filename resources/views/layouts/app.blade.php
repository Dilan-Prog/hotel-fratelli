<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Hotel Fratelli Aguascalientes | Confort, Calidad y Descanso desde $714.00/noche')</title>
  @yield('meta')
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Hotel Fratelli" />
  <meta name="theme-color" content="#1A1A1A" />
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://images.unsplash.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />

  @stack('head')
</head>
<body>

  @include('layouts.partials.navbar')

  @yield('content')

  @include('layouts.partials.footer')
    
  <script src="{{ asset('assets/script.js') }}" defer></script>
  @stack('scripts')
</body>
</html>
