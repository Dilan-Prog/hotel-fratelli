<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Hotel Fratelli Aguascalientes | Reservas desde $714.00/noche')</title>
  @yield('meta')
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Hotel Fratelli" />
  <meta name="theme-color" content="#1A1A1A" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-48x48.png') }}" sizes="48x48" />
  <link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon.png') }}" sizes="180x180" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/icon-192x192.png') }}" sizes="192x192" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/icon-512x512.png') }}" sizes="512x512" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://images.unsplash.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @stack('head')
</head>
<body>

  @include('layouts.partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('layouts.partials.footer')

  @stack('scripts')
</body>
</html>
