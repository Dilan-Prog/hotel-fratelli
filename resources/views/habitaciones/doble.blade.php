@extends('layouts.app')

@section('title', 'Habitación Doble (camas separadas) | Hotel Fratelli Aguascalientes — $952.00 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Doble con camas separadas en Hotel Fratelli Aguascalientes: para 2 personas. Desde $952.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/doble" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Doble (camas separadas) | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 2 personas, camas separadas. Desde $952.00 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/Habitación21/Habitacion21-20.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Doble (camas separadas) | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 2 personas, camas separadas. Desde $952.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/Habitación21/Habitacion21-20.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Doble (camas separadas)","item":"https://www.hotelfratelli.com.mx/habitaciones/doble"}]}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Doble (camas separadas)',
    'roomNameHtml' => 'Doble <em>(camas separadas)</em>',
    'breadcrumbLabel' => 'Doble (camas separadas)',
    'eyebrow' => 'Para 2 personas · Desde $952.00 MXN',
    'heroSub' => 'Camas separadas · WiFi gratuito · Escritorio',
    'mainImg' => 'images/Habitación21/Habitacion21-20.jpg',
    'thumbs' => ['images/Habitación21/Habitacion21-3.jpg', 'images/Habitación21/Habitacion21-8.jpg', 'images/Habitación21/Habitacion21-15.jpg'],
    'desc' => 'Para 2 personas, camas separadas. Perfecta para amigos o familia compacta que prefieren cada uno su propia cama.',
    'feats' => ['Camas separadas', 'Para 2 personas', 'WiFi gratuito', 'Escritorio'],
    'priceAmount' => '952.00',
    'reservarValue' => 'Doble (camas separadas)',
  ])
@endsection
