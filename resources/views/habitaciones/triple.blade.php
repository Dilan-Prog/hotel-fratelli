@extends('layouts.app')

@section('title', 'Habitación Triple | Hotel Fratelli Aguascalientes — $1,249.50 MXN/noche')

@section('meta')
  <meta name="description" content="Habitación Triple en Hotel Fratelli Aguascalientes: para 3 personas. Desde $1,249.50 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones/triple" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitación Triple | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Para 3 personas. Desde $1,249.50 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/hotel-frontal/hotel-fratelli-mejorada-dia.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitación Triple | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Para 3 personas. Desde $1,249.50 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/hotel-frontal/hotel-fratelli-mejorada-dia.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"},{"@type":"ListItem","position":3,"name":"Triple","item":"https://www.hotelfratelli.com.mx/habitaciones/triple"}]}
</script>
@endsection

{{-- NOTA: la Habitación 24 (antes usada aquí como referencia temporal) fue confirmada
     por el cliente como Máster Suite, no Triple — sus fotos se movieron a esa página.
     Todavía no hay fotos reales de la Habitación Triple; se muestra un placeholder
     "fotos próximamente" hasta que el cliente las proporcione. --}}
@section('content')
  @include('habitaciones._detail', [
    'roomName' => 'Triple',
    'roomNameHtml' => '<em>Triple</em>',
    'breadcrumbLabel' => 'Triple',
    'eyebrow' => 'Para 3 personas · Desde $1,249.50 MXN',
    'heroSub' => '1 cama matrimonial y 1 individual · WiFi gratuito · TV',
    'desc' => 'Para 3 personas, 1 cama matrimonial y 1 individual. Pensada para familias pequeñas o grupos de amigos.',
    'feats' => ['1 matrimonial + 1 individual', 'Para 3 personas', 'WiFi gratuito', 'TV'],
    'priceAmount' => '1,249.50',
  ])
@endsection
