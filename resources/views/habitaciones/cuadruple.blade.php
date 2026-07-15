@extends('layouts.app')

@section('title', 'Habitación Cuádruple | Hotel Fratelli Aguascalientes — $1,606.50 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Cuádruple en Hotel Fratelli Aguascalientes: para 4 personas, 2 camas matrimoniales. Desde $1,606.50 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/cuadruple" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Cuádruple | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 4 personas, 2 camas matrimoniales. Desde $1,606.50 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/habitacion19/habitacion19-40.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Cuádruple | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 4 personas, 2 camas matrimoniales. Desde $1,606.50 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/habitacion19/habitacion19-40.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Cuádruple","item":"https://www.hotelfratelli.com.mx/habitaciones/cuadruple"}]}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Cuádruple',
    'roomNameHtml' => '<em>Cuádruple</em>',
    'breadcrumbLabel' => 'Cuádruple',
    'eyebrow' => 'Para 4 personas · Desde $1,606.50 MXN',
    'heroSub' => '2 camas matrimoniales · WiFi gratuito · TV',
    'mainImg' => 'images/habitacion19/habitacion19-40.jpg',
    'thumbs' => ['images/habitacion19/habitacion19-38.jpg', 'images/habitacion19/habitacion19-3.jpg', 'images/habitacion19/habitacion19-9.jpg'],
    'desc' => 'Para 4 personas, 2 camas matrimoniales. La opción con más espacio para familias o grupos grandes.',
    'feats' => ['2 camas matrimoniales', 'Para 4 personas', 'WiFi gratuito', 'TV'],
    'priceAmount' => '1,606.50',
  ])
@endsection
