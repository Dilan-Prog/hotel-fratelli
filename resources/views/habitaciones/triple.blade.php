@extends('layouts.app')

@section('title', 'Habitación Triple | Hotel Fratelli Aguascalientes — $1,249.50 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Triple en Hotel Fratelli Aguascalientes: para 3 personas. Desde $1,249.50 MXN/noche." />
  <link rel="canonical" href="https://hotelfratelli.com.mx/habitaciones/triple" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Triple | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 3 personas. Desde $1,249.50 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/habitacion19/habitacion19-38.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Triple | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 3 personas. Desde $1,249.50 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/habitacion19/habitacion19-38.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Triple","item":"https://hotelfratelli.com.mx/habitaciones/triple"}]}
</script>
  {{-- image: se usa una foto de habitacion19 (Cuádruple) como referencia temporal porque
       la Triple todavía no tiene fotos propias — corrige el error de Search Console
       "Se requiere un valor para el campo image" en Merchant listing. Reemplazar cuando
       el cliente proporcione fotos reales de esta habitación. --}}
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Habitación Triple — Hotel Fratelli Aguascalientes",
  "description": "Para 3 personas, 1 cama matrimonial y 1 individual. Pensada para familias pequeñas o grupos de amigos.",
  "image": "{{ asset('images/habitacion19/habitacion19-38.jpg') }}",
  "brand": { "@type": "Brand", "name": "Hotel Fratelli" },
  "offers": {
    "@type": "Offer",
    "url": "https://hotelfratelli.com.mx/habitaciones/triple",
    "priceCurrency": "MXN",
    "price": "1249.50",
    "priceValidUntil": "2026-12-31",
    "availability": "https://schema.org/InStock"
  }
}
</script>
@endsection

{{-- NOTA: la Habitación 24 (antes usada aquí como referencia temporal) fue confirmada
     por el cliente como Máster Suite, no Triple — sus fotos se movieron a esa página.
     Todavía no hay fotos reales de la Habitación Triple; se usa temporalmente una foto
     de habitacion19 (Cuádruple) para que el schema Product no quede sin imagen (corrige
     error de Search Console). Reemplazar mainImg/thumbs cuando el cliente proporcione
     fotos reales de esta habitación. --}}
@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Triple',
    'roomNameHtml' => '<em>Triple</em>',
    'breadcrumbLabel' => 'Triple',
    'eyebrow' => 'Para 3 personas · Desde $1,249.50 MXN',
    'heroSub' => '1 cama matrimonial y 1 individual · WiFi gratuito · TV',
    'mainImg' => 'images/habitacion19/habitacion19-38.jpg',
    'desc' => 'Para 3 personas, 1 cama matrimonial y 1 individual. Pensada para familias pequeñas o grupos de amigos.',
    'feats' => ['1 matrimonial + 1 individual', 'Para 3 personas', 'WiFi gratuito', 'TV'],
    'priceAmount' => '1,249.50',
  ])
@endsection
