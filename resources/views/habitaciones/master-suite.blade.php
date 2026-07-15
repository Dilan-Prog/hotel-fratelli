@extends('layouts.app')

@section('title', 'Máster Suite | Hotel Fratelli Aguascalientes — $952.00 MXN/noche')

@section('meta')
  <meta name="description" content="Máster Suite en Hotel Fratelli Aguascalientes: para 2 personas, 1 cama King. Desde $952.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/master-suite" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Máster Suite | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 2 personas, 1 cama King. Desde $952.00 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/habitacion22/habitacion22-1.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Máster Suite | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 2 personas, 1 cama King. Desde $952.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/habitacion22/habitacion22-1.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Máster Suite","item":"https://www.hotelfratelli.com.mx/habitaciones/master-suite"}]}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Máster Suite',
    'roomNameHtml' => '<em>Máster Suite</em>',
    'breadcrumbLabel' => 'Máster Suite',
    'eyebrow' => 'Para 2 personas · Desde $952.00 MXN',
    'heroSub' => '1 cama King · Acabados premium · WiFi gratuito',
    'mainImg' => 'images/habitacion22/habitacion22-1.jpg',
    'thumbs' => ['images/habitacion22/habitacion22-25.jpg', 'images/habitacion24/habitacion24-22.jpg', 'images/habitacion24/habitacion24-8.jpg'],
    'desc' => 'Para 2 personas, 1 cama King. Nuestra habitación insignia, con los acabados más premium del hotel.',
    'feats' => ['1 cama King', 'Para 2 personas', 'Baño premium', 'WiFi gratuito'],
    'priceAmount' => '952.00',
  ])
@endsection
