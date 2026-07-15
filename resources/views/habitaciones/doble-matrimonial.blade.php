@extends('layouts.app')

@section('title', 'Habitación Doble (cama matrimonial) | Hotel Fratelli Aguascalientes — $833.00 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Doble con cama matrimonial en Hotel Fratelli Aguascalientes: para 2 personas. Desde $833.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/doble-matrimonial" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Doble (cama matrimonial) | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 2 personas, 1 cama matrimonial. Desde $833.00 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/habitacion19/habitacion19-25.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Doble (cama matrimonial) | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 2 personas, 1 cama matrimonial. Desde $833.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/habitacion19/habitacion19-25.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Doble (cama matrimonial)","item":"https://www.hotelfratelli.com.mx/habitaciones/doble-matrimonial"}]}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Doble (cama matrimonial)',
    'roomNameHtml' => 'Doble <em>(cama matrimonial)</em>',
    'breadcrumbLabel' => 'Doble (cama matrimonial)',
    'eyebrow' => 'Para 2 personas · Desde $833.00 MXN',
    'heroSub' => '1 cama matrimonial · WiFi gratuito · TV',
    'mainImg' => 'images/habitacion19/habitacion19-25.jpg',
    'thumbs' => ['images/habitacion19/habitacion19-8.jpg', 'images/habitacion19/habitacion19-15.jpg', 'images/habitacion19/habitacion19-35.jpg'],
    'desc' => 'Para 2 personas, 1 cama matrimonial. Perfecta para parejas que prefieren compartir una sola cama amplia.',
    'feats' => ['1 cama matrimonial', 'Para 2 personas', 'WiFi gratuito', 'TV'],
    'priceAmount' => '833.00',
  ])
@endsection
