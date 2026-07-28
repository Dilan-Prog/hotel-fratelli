@extends('layouts.app')

@section('title', 'Habitación Doble (camas separadas) | Hotel Fratelli Aguascalientes — $952.00 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Doble con camas separadas en Hotel Fratelli Aguascalientes: para 2 personas. Desde $952.00 MXN/noche." />
  <link rel="canonical" href="https://hotelfratelli.com.mx/habitaciones/doble" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Doble (camas separadas) | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 2 personas, camas separadas. Desde $952.00 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/habitacion21/habitacion21-17.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Doble (camas separadas) | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 2 personas, camas separadas. Desde $952.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/habitacion21/habitacion21-17.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Doble (camas separadas)","item":"https://hotelfratelli.com.mx/habitaciones/doble"}]}
</script>
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Habitación Doble (camas separadas) — Hotel Fratelli Aguascalientes",
  "description": "Para 2 personas, camas separadas. Perfecta para amigos o familia compacta que prefieren cada uno su propia cama.",
  "image": "{{ asset('images/habitacion21/habitacion21-17.jpg') }}",
  "brand": { "@type": "Brand", "name": "Hotel Fratelli" },
  "offers": {
    "@type": "Offer",
    "url": "https://hotelfratelli.com.mx/habitaciones/doble",
    "priceCurrency": "MXN",
    "price": "952.00",
    "priceValidUntil": "2026-12-31",
    "availability": "https://schema.org/InStock"
  }
}
</script>
@endsection

@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Doble (camas separadas)',
    'roomNameHtml' => 'Doble <em>(camas separadas)</em>',
    'breadcrumbLabel' => 'Doble (camas separadas)',
    'eyebrow' => 'Para 2 personas · Desde $952.00 MXN',
    'heroSub' => 'Camas separadas · WiFi gratuito · Escritorio',
    'mainImg' => 'images/habitacion21/habitacion21-17.jpg',
    'thumbs' => ['images/habitacion21/habitacion21-3.jpg', 'images/habitacion21/habitacion21-8.jpg', 'images/habitacion21/habitacion21-15.jpg'],
    'desc' => 'Para 2 personas, camas separadas. Perfecta para amigos o familia compacta que prefieren cada uno su propia cama.',
    'feats' => ['Camas separadas', 'Para 2 personas', 'WiFi gratuito', 'Escritorio'],
    'priceAmount' => '952.00',
  ])
@endsection
