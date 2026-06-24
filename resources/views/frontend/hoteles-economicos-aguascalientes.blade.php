@extends('layouts.app')

@section('title', 'Hoteles Económicos en Aguascalientes | Hotel Fratelli desde $780/noche')

@section('meta')
  <meta name="description" content="Buscas hoteles económicos en Aguascalientes con calidad real? Hotel Fratelli ofrece habitaciones desde $780 MXN/noche, WiFi gratis y recepción 24 horas." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/hoteles-economicos-aguascalientes.html" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Hoteles Económicos en Aguascalientes | Hotel Fratelli desde $780/noche" />
  <meta property="og:description" content="Buscas hoteles económicos en Aguascalientes con calidad real? Hotel Fratelli ofrece habitaciones desde $780 MXN/noche, WiFi gratis y recepción 24 horas." />
  <meta property="og:url" content="https://www.hotelfratelli.com.mx/hoteles-economicos-aguascalientes.html" />
  <meta property="og:image" content="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Hoteles Económicos en Aguascalientes | Hotel Fratelli desde $780/noche" />
  <meta name="twitter:description" content="Buscas hoteles económicos en Aguascalientes con calidad real? Hotel Fratelli ofrece habitaciones desde $780 MXN/noche, WiFi gratis y recepción 24 horas." />
  <meta name="twitter:image" content="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/"},{"@type":"ListItem","position":2,"name":"Hoteles económicos Aguascalientes","item":"https://www.hotelfratelli.com.mx/hoteles-economicos-aguascalientes.html"}]}
</script>
@endsection

@section('content')
  <header class="hero hero-medium">
    <div class="hero-bg" aria-hidden="true"><img src="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" alt="Habitación sencilla, Hoteles económicos en Aguascalientes — Hotel Fratelli" /></div>
    <div class="container hero-inner">
      <span class="hero-eyebrow">Desde MXN $780 / noche</span>
      <h1>Hoteles Económicos en Aguascalientes — <em>Hotel Fratelli</em></h1>
      <p class="hero-sub">Calidad boutique a precios honestos. Habitación sencilla desde $780 MXN, doble desde $980 MXN. Recepción 24 horas, WiFi gratuito y ubicación inmejorable.</p>
      <div class="hero-cta">
        <a href="{{ route('reservar') }}" class="btn btn-gold">Reservar ahora</a>
        <a href="{{ url('habitaciones/index.html') }}" class="btn btn-outline">Ver tarifas</a>
      </div>
    </div>
  </header>

  <nav class="breadcrumbs" aria-label="Migas de pan"><div class="container"><ol>
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li aria-current="page">Hoteles económicos en Aguascalientes</li>
  </ol></div></nav>

  <section>
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Calidad-precio</span>
        <h2>Economía sin <em>renunciar a nada</em></h2>
        <p class="section-sub">"Económico" no debería significar "incómodo". Hotel Fratelli demuestra que se puede tener buena ubicación, atención real y habitaciones bien cuidadas a tarifas amables.</p>
      </div>

      <div class="feature-strip">
        <div class="fs-item"><span class="fs-num">$780</span><span class="fs-label">Desde MXN</span></div>
        <div class="fs-item"><span class="fs-num">WiFi</span><span class="fs-label">Gratuito</span></div>
        <div class="fs-item"><span class="fs-num">24h</span><span class="fs-label">Recepción</span></div>
        <div class="fs-item"><span class="fs-num">Sin</span><span class="fs-label">Cargo estacionamiento</span></div>
      </div>

      <div class="seo-prose">
        <h2>Tarifas honestas en Hotel Fratelli</h2>
        <p>Buscar un hotel económico en Aguascalientes no debería significar resignarse a habitaciones descuidadas, mala ubicación o sorpresas en la cuenta. En Hotel Fratelli mantenemos tarifas accesibles porque creemos que el descanso es un derecho, no un lujo.</p>

        <h3>Habitación Sencilla — desde $780 MXN</h3>
        <p>Cama matrimonial, baño privado, TV, WiFi y aire acondicionado. La opción más práctica si viajas solo o por trabajo. Todo lo necesario, nada de relleno innecesario.</p>

        <h3>Habitación Doble — desde $980 MXN</h3>
        <p>Dos camas individuales o una king según prefieras. Ideal para amigos, familia compacta o compañeros de viaje que comparten cuarto.</p>

        <h3>Suite Jr — desde $1,490 MXN</h3>
        <p>Si quieres un pequeño extra sin disparar el presupuesto, la Suite Jr ofrece sala separada y vista a la ciudad.</p>

        <h2>¿Qué incluyen nuestras tarifas?</h2>
        <ul>
          <li><strong>WiFi gratuito</strong> en toda la propiedad — no es un extra que cobramos aparte.</li>
          <li><strong>Estacionamiento sin cargo</strong> durante toda tu estancia.</li>
          <li><strong>Recepción 24 horas</strong> — sin cargos por check-in tardío.</li>
          <li><strong>Impuestos incluidos</strong> en la tarifa que publicamos.</li>
          <li><strong>Acceso a terraza con vistas a la ciudad.</strong></li>
        </ul>

        <h2>¿Por qué somos económicos sin perder calidad?</h2>
        <p>Somos un hotel boutique pequeño (24 habitaciones) que opera con eficiencia: sin amenidades innecesarias, sin costos hinchados, con un equipo cercano que conoce a sus huéspedes. Esa estructura nos permite ofrecer una experiencia de calidad a tarifas razonables.</p>

        <p>Además, nuestra ubicación en <strong>Fraccionamiento Las Américas</strong> nos permite estar cerca de los principales puntos de Aguascalientes (Centro Histórico, Feria de San Marcos, aeropuerto) sin pagar el sobreprecio de las zonas más turísticas.</p>

        <h2>Reserva al mejor precio garantizado</h2>
        <p>Al reservar directamente con nosotros (WhatsApp, teléfono o este sitio) obtienes la mejor tarifa disponible: <strong>sin comisiones de plataformas, sin sorpresas</strong>. Confirmación en menos de 2 horas.</p>
      </div>

      <div style="margin-top:48px;display:flex;gap:14px;flex-wrap:wrap;">
        <a href="{{ route('reservar') }}" class="btn btn-dark">Reservar ahora</a>
        <a href="https://wa.me/524492196201" target="_blank" rel="noopener" class="btn btn-outline-dark">Consultar por WhatsApp</a>
      </div>
    </div>
  </section>
@endsection
