@extends('layouts.app')

@section('title', 'Habitación Cuádruple | Hotel Fratelli Aguascalientes — $1,606.50 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Cuádruple en Hotel Fratelli Aguascalientes: para 4 personas, 2 camas matrimoniales. Desde $1,606.50 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/cuadruple" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Cuádruple | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 4 personas, 2 camas matrimoniales. Desde $1,606.50 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/Habitación21/Habitacion21-1.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Cuádruple | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 4 personas, 2 camas matrimoniales. Desde $1,606.50 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/Habitación21/Habitacion21-1.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Cuádruple","item":"https://www.hotelfratelli.com.mx/habitaciones/cuadruple"}]}
</script>
@endsection

{{-- NOTA: no existen fotos reales de la Habitación Cuádruple en public/images/.
     Se reutilizan fotos de Habitación21 (la única con más de una cama) como referencia
     temporal — pendiente reemplazar por fotos reales de esta habitación. --}}
@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Cuádruple',
    'roomNameHtml' => '<em>Cuádruple</em>',
    'breadcrumbLabel' => 'Cuádruple',
    'eyebrow' => 'Para 4 personas · Desde $1,606.50 MXN',
    'heroSub' => '2 camas matrimoniales · WiFi gratuito · TV',
    'mainImg' => 'images/Habitación21/Habitacion21-1.jpg',
    'thumbs' => ['images/Habitación21/Habitacion21-5.jpg', 'images/Habitación21/Habitacion21-10.jpg', 'images/Habitación21/Habitacion21-18.jpg'],
    'desc' => 'Para 4 personas, 2 camas matrimoniales. La opción con más espacio para familias o grupos grandes.',
    'feats' => ['2 camas matrimoniales', 'Para 4 personas', 'WiFi gratuito', 'TV'],
    'priceAmount' => '1,606.50',
    'reservarValue' => 'Cuádruple',
  ])
@endsection
