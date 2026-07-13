@extends('layouts.app')

@section('title', 'Habitación Sencilla | Hotel Fratelli Aguascalientes — $714.00 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Sencilla en Hotel Fratelli Aguascalientes: para 1 persona, 1 cama matrimonial. Desde $714.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/sencilla" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Sencilla | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 1 persona, 1 cama matrimonial. Desde $714.00 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Sencilla | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 1 persona, 1 cama matrimonial. Desde $714.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Sencilla","item":"https://www.hotelfratelli.com.mx/habitaciones/sencilla"}]}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Sencilla',
    'roomNameHtml' => '<em>Sencilla</em>',
    'breadcrumbLabel' => 'Sencilla',
    'eyebrow' => 'Para 1 persona · Desde $714.00 MXN',
    'heroSub' => '1 cama matrimonial · WiFi gratuito · TV',
    'mainImg' => 'images/Habitación17/Habitacion17-16.jpg',
    'thumbs' => ['images/Habitación17/Habitacion17-2.jpg', 'images/Habitación17/Habitacion17-9.jpg', 'images/Habitación17/Habitacion17-19.jpg'],
    'desc' => 'Para 1 persona, 1 cama matrimonial. Espacio funcional y luz natural — ideal para viajeros de negocios o quienes buscan comodidad sin pagar de más.',
    'feats' => ['1 cama matrimonial', 'Para 1 persona', 'WiFi gratuito', 'TV'],
    'priceAmount' => '714.00',
    'reservarValue' => 'Sencilla',
  ])
@endsection
