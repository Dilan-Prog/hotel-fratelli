@extends('layouts.app')

@section('title', 'Suite Jr | Hotel Fratelli Aguascalientes — $892.50 MXN/noche')

@section('meta')
  <meta name="description" content="Suite Jr en Hotel Fratelli Aguascalientes: para 2 personas, 1 cama Queen, vista a la ciudad. Desde $892.50 MXN/noche." />
  <link rel="canonical" href="https://hotelfratelli.com.mx/habitaciones/suite-jr" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Suite Jr | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 2 personas, 1 cama Queen. Desde $892.50 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/habitacion17/habitacion17-16.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Suite Jr | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 2 personas, 1 cama Queen. Desde $892.50 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/habitacion17/habitacion17-16.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Suite Jr","item":"https://hotelfratelli.com.mx/habitaciones/suite-jr"}]}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Suite Jr',
    'roomNameHtml' => '<em>Suite Jr</em>',
    'breadcrumbLabel' => 'Suite Jr',
    'eyebrow' => 'Para 2 personas · Desde $892.50 MXN',
    'heroSub' => '1 cama Queen · Sala de estar · Vista a la ciudad',
    'mainImg' => 'images/habitacion17/habitacion17-16.jpg',
    'thumbs' => ['images/habitacion17/habitacion17-2.jpg', 'images/habitacion17/habitacion17-9.jpg', 'images/habitacion17/habitacion17-19.jpg'],
    'desc' => 'Para 2 personas, 1 cama Queen. Sala de estar separada y vista a la ciudad — el equilibrio entre espacio y precio.',
    'feats' => ['1 cama Queen', 'Para 2 personas', 'Sala de estar', 'Vista a la ciudad'],
    'priceAmount' => '892.50',
  ])
@endsection
