@extends('layouts.app')

@section('title', 'Hoteles Cerca del Centro de Aguascalientes | Hotel Fratelli')

@section('meta')
  <meta name="description" content="Hotel Fratelli, a 10 minutos del Centro Histórico de Aguascalientes: Plaza de la Patria y catedral. Habitaciones confortables desde $714.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/hoteles-centro" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Hoteles Cerca del Centro de Aguascalientes | Hotel Fratelli" />
  <meta property="og:description" content="Hotel Fratelli, a 10 minutos del Centro Histórico de Aguascalientes: Plaza de la Patria y catedral. Habitaciones confortables desde $714.00 MXN/noche." />
  <meta property="og:url" content="https://www.hotelfratelli.com.mx/hoteles-centro" />
  <meta property="og:image" content="{{ asset('images/Hotel-frontal/hotel-fratelli-noche.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Hoteles Cerca del Centro de Aguascalientes | Hotel Fratelli" />
  <meta name="twitter:description" content="Hotel Fratelli, a 10 minutos del Centro Histórico de Aguascalientes: Plaza de la Patria y catedral. Habitaciones confortables desde $714.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/Hotel-frontal/hotel-fratelli-noche.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/"},{"@type":"ListItem","position":2,"name":"Hoteles cerca del centro","item":"https://www.hotelfratelli.com.mx/hoteles-centro"}]}
</script>
@endsection

@section('content')
  <header class="hero hero-medium">
    <div class="hero-bg" aria-hidden="true"><img src="{{ asset('images/Hotel-frontal/hotel-fratelli-noche.jpg') }}" alt="Fachada del Hotel Fratelli de noche, Aguascalientes" /></div>
    <div class="container hero-inner">
      <span class="hero-eyebrow">A 10 minutos del Centro Histórico</span>
      <h1>Hotel a Minutos del <em>Centro de Aguascalientes</em></h1>
      <p class="hero-sub">Hotel Fratelli te conecta con el Centro Histórico de Aguascalientes sin pagar el sobreprecio de hospedarte justo en la zona turística. Confort, calidad y una ubicación pensada para moverte con facilidad por la ciudad.</p>
      <div class="hero-cta">
        <a href="{{ route('reservar') }}" class="btn btn-gold">Reservar habitación</a>
        <a href="https://wa.me/524492196201" target="_blank" rel="noopener" class="btn btn-outline">WhatsApp directo</a>
      </div>
    </div>
  </header>

  <nav class="breadcrumbs" aria-label="Migas de pan"><div class="container"><ol>
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li aria-current="page">Hoteles cerca del centro</li>
  </ol></div></nav>

  <section>
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Ubicación conectada</span>
        <h2>A minutos del <em>Centro Histórico</em> de Aguascalientes</h2>
        <p class="section-sub">A 10 minutos en auto de Plaza de la Patria y la catedral, en una zona tranquila y bien comunicada.</p>
      </div>

      <div class="feature-strip">
        <div class="fs-item"><span class="fs-num">10 min</span><span class="fs-label">Al Centro Histórico</span></div>
        <div class="fs-item"><span class="fs-num">24h</span><span class="fs-label">Recepción</span></div>
        <div class="fs-item"><span class="fs-num">24</span><span class="fs-label">Habitaciones</span></div>
        <div class="fs-item"><span class="fs-num">$714</span><span class="fs-label">Desde MXN</span></div>
      </div>

      <div class="seo-prose">
        <h2>¿Por qué hospedarte a minutos del centro en vez de justo en él?</h2>
        <p>El Centro Histórico de Aguascalientes concentra tráfico, ruido y las tarifas más altas de la ciudad. Hospedarte a unos minutos, en una zona residencial tranquila como Fraccionamiento Las Américas, te da acceso rápido en auto a Plaza de la Patria, la catedral y las calles peatonales del centro, sin pagar ese sobreprecio ni lidiar con el tráfico para entrar y salir cada día.</p>

        <h2>Qué encontrarás en el Centro Histórico</h2>
        <p>A 10 minutos en auto de Hotel Fratelli está el corazón de Aguascalientes: Plaza de la Patria con su kiosco y la Catedral Basílica, el Teatro Morelos, el Museo Nacional de la Muerte y el Jardín de San Marcos. Todo caminable entre sí una vez que llegas, ideal para una tarde de paseo cultural.</p>

        <h2>Hotel Fratelli, uno de los hoteles en Aguascalientes mejor ubicados para moverte</h2>
        <p>Estamos en República de Brasil 627, Fraccionamiento Las Américas: 10 minutos del Centro Histórico, 5 minutos de la Feria de San Marcos y 15 minutos del aeropuerto. Una ubicación pensada para quien quiere ver la ciudad sin pasar todo el viaje en el coche.</p>

        <h3>Recepción 24 horas</h3>
        <p>Llegues de un recorrido por el centro a la hora que sea, nuestro equipo te recibe. Sin horarios rígidos de check-in.</p>

        <h3>Habitaciones para descansar después de caminar la ciudad</h3>
        <p>Colchones premium, cortinas blackout y WiFi gratuito en todo el hotel, para que el paseo por el centro termine en un descanso real.</p>

        <h2>Reserva tu habitación cerca del centro de Aguascalientes</h2>
        <p>Confírmanos disponibilidad por WhatsApp o por nuestro formulario. Respuesta en menos de 2 horas y tarifa directa, sin comisiones de plataformas.</p>
      </div>

      <div style="margin-top:48px;display:flex;gap:14px;flex-wrap:wrap;">
        <a href="{{ route('reservar') }}" class="btn btn-dark">Reservar ahora</a>
        <a href="{{ route('habitaciones.index') }}" class="btn btn-outline-dark">Ver habitaciones</a>
      </div>
    </div>
  </section>
@endsection
