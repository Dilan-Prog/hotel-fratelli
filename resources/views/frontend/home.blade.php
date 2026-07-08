@extends('layouts.app')

@section('title', 'Hotel Fratelli Aguascalientes | Confort, Calidad y Descanso desde $714.00/noche')

@section('meta')
  <meta name="description" content="Hotel Fratelli en Aguascalientes. 24 habitaciones confortables, recepción 24hrs, WiFi gratis y ubicación privilegiada a 5 min de la Feria de San Marcos. Reserva desde $714.00/noche." />
  <meta name="keywords" content="hotel aguascalientes, hoteles aguascalientes, hotel fratelli, hoteles cerca feria san marcos, hotel económico aguascalientes, hospedaje aguascalientes" />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/">

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Hotel Fratelli Aguascalientes | Desde $714.00/noche" />
  <meta property="og:description" content="Hotel boutique en Aguascalientes. Confort, calidad y descanso. A 5 minutos de la Feria de San Marcos. Recepción 24hrs, WiFi gratis." />
  <meta property="og:url" content="https://www.hotelfratelli.com.mx/" />
  <meta property="og:image" content="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Hotel Fratelli Aguascalientes | Desde $714.00/noche" />
  <meta name="twitter:description" content="Hotel boutique en Aguascalientes. Confort, calidad y descanso. A 5 min de la Feria de San Marcos." />
  <meta name="twitter:image" content="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}" />

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Hotel",
    "name": "Hotel Fratelli",
    "description": "Hotel boutique en Aguascalientes con 24 habitaciones, recepción 24 horas, WiFi gratuito y ubicación a 5 minutos de la Feria de San Marcos.",
    "url": "https://www.hotelfratelli.com.mx",
    "telephone": "+524492196201",
    "email": "fratelli.hotel@gmail.com",
    "priceRange": "$$$",
    "starRating": { "@type": "Rating", "ratingValue": "2" },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "República de Brasil 627",
      "addressLocality": "Aguascalientes",
      "addressRegion": "Aguascalientes",
      "postalCode": "20230",
      "addressCountry": "MX"
    },
    "geo": { "@type": "GeoCoordinates", "latitude": 21.8778, "longitude": -102.2962 },
    "amenityFeature": [
      { "@type": "LocationFeatureSpecification", "name": "WiFi gratuito", "value": true },
      { "@type": "LocationFeatureSpecification", "name": "Recepción 24 horas", "value": true },
      { "@type": "LocationFeatureSpecification", "name": "Balcón", "value": true }
    ],
    "numberOfRooms": 24,
    "checkinTime": "14:00",
    "checkoutTime": "12:00",
    "openingHours": "Mo-Su 00:00-24:00",
    "sameAs": [
      "https://www.facebook.com/HotelFratelli",
      "https://www.booking.com/hotel/mx/fratelli.html"
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://www.hotelfratelli.com.mx/" }
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LodgingBusiness",
    "name": "Hotel Fratelli",
    "image": "{{ asset('images/Habitación22/Habitacion22-25.jpg') }}",
    "telephone": "+524492196201",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "República de Brasil 627, Fracc. Las Américas",
      "addressLocality": "Aguascalientes",
      "addressRegion": "AGS",
      "postalCode": "20230",
      "addressCountry": "MX"
    },
    "aggregateRating": { "@type": "AggregateRating", "ratingValue": "3.8", "reviewCount": "277" }
  }
  </script>
@endsection

@section('content')

  <!-- HERO -->
  <header class="hero" id="inicio">
    <div class="hero-bg" aria-hidden="true">
      <img src="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}"
      alt="Habitación con cama king y acabados elegantes, Hotel Fratelli Aguascalientes"
      title="Habitación con cama king y acabados elegantes, Hotel Fratelli Aguascalientes"
      fetchpriority="high"
      loading="eager"
      />
    </div>
    <div class="container hero-inner">
      <span class="hero-eyebrow">Hotel boutique · Aguascalientes</span>
      <h1>Hotel Fratelli Aguascalientes — Confort, Calidad y <em>Descanso</em></h1>
      <p class="hero-sub">24 habitaciones cuidadosamente diseñadas a 5 minutos de la Feria de San Marcos. Recepción 24 horas, WiFi gratuito y vistas a la ciudad. Tarifas desde MXN $714.00/noche.</p>
      <div class="hero-cta">
        <a href="{{ route('habitaciones.index') }}" class="btn btn-gold" title="Ver habitaciones">Ver habitaciones</a>
        <a href="https://wa.me/524492196201" class="btn btn-outline" title="Contactar por WhatsApp" target="_blank" rel="noopener">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.1-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4 0 1.4 1 2.8 1.2 3 .1.2 2 3 4.8 4.2 1.7.7 2.3.8 3.1.7.5-.1 1.7-.7 1.9-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.3c1.4.8 3 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
          Contactar por WhatsApp
        </a>
      </div>
      <div class="hero-meta">
        <div><span class="k">24</span><span class="v">Habitaciones</span></div>
        <div><span class="k">24h</span><span class="v">Recepción</span></div>
        <div><span class="k">5 min</span><span class="v">Feria San Marcos</span></div>
        <div><span class="k">$714</span><span class="v">Desde / noche</span></div>
      </div>
    </div>
  </header>

  <!-- WHY US -->
  <section class="why" id="porque" aria-labelledby="why-title">
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Por qué elegirnos</span>
        <h2 id="why-title">Una estancia que se siente <em>como en casa</em></h2>
        <p class="section-sub">Cuatro razones por las que nuestros huéspedes regresan a Hotel Fratelli cada vez que visitan Aguascalientes.</p>
      </div>
      <div class="why-split">
        <div class="why-image reveal">
          <img src="{{ asset('images/Hotel-frontal/hotel-fratelli-noche.jpg') }}" alt="Lobby elegante del Hotel Fratelli en Aguascalientes" loading="lazy" />
        </div>
        <div class="why-list">
          <div class="why-card reveal">
            <div class="why-icon" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 22s-7-7.5-7-13a7 7 0 0114 0c0 5.5-7 13-7 13z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
            <div>
              <h3>Ubicación estratégica</h3>
              <p>A solo 5 minutos de la Feria de San Marcos y zonas comerciales clave de Aguascalientes.</p>
            </div>
          </div>
          <div class="why-card reveal">
            <div class="why-icon" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
            <div>
              <h3>Recepción 24 horas</h3>
              <p>Llega cuando llegues. Nuestro equipo te recibe a cualquier hora del día o de la noche.</p>
            </div>
          </div>
          <div class="why-card reveal">
            <div class="why-icon" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M2 9a16 16 0 0120 0"/><path d="M5 12a12 12 0 0114 0"/><path d="M8.5 15a8 8 0 017 0"/><circle cx="12" cy="18" r="1" fill="currentColor"/></svg></div>
            <div>
              <h3>WiFi gratis en todo el hotel</h3>
              <p>Conexión de alta velocidad en habitaciones, lobby y balcón. Trabaja o conéctate con los tuyos.</p>
            </div>
          </div>
          <div class="why-card reveal">
            <div class="why-icon" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2v20"/><path d="M16 6H10a3 3 0 000 6h4a3 3 0 010 6H8"/></svg></div>
            <div>
              <h3>Precio accesible</h3>
              <p>Calidad boutique con tarifas honestas: desde MXN $714.00 la noche con todo lo esencial incluido.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ROOMS -->
  <section class="rooms" id="habitaciones" aria-labelledby="rooms-title">
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Nuestras habitaciones</span>
        <h2 id="rooms-title">Habitaciones en <em>Aguascalientes</em></h2>
        <p class="section-sub">Cuatro categorías diseñadas para cada tipo de viajero: trabajo, pareja, familia o estancias largas.</p>
      </div>
      <div class="rooms-grid">

        <article class="room-card reveal">
          <div class="room-image">
            <span class="room-tag">17 disponibles</span>
            <img src="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" alt="Habitación sencilla Hotel Fratelli Aguascalientes" loading="lazy" />
          </div>
          <div class="room-body">
            <h3>Sencilla</h3>
            <p>Cama matrimonial, espacio funcional y luz natural. Ideal para viajeros de negocios.</p>
            <div class="room-feats"><span>1 matrimonial</span><span>WiFi</span><span>TV</span></div>
            <div class="room-price"><span class="from">Desde</span><span class="amount">$714.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.sencilla') }}" class="room-cta" data-room-cta data-room="Sencilla" title="Ver Habitación Sencilla">Ver habitación</a>
          </div>
        </article>

        <article class="room-card reveal">
          <div class="room-image">
            <span class="room-tag">Popular</span>
            <img src="{{ asset('images/Habitación21/Habitacion21-20.jpg') }}" alt="Habitación doble con dos camas individuales, Hotel Fratelli Aguascalientes" loading="lazy" />
          </div>
          <div class="room-body">
            <h3>Doble</h3>
            <p>Dos camas individuales o una matrimonial king. Perfecta para amigos o familia compacta.</p>
            <div class="room-feats"><span>2 camas</span><span>WiFi</span><span>Escritorio</span></div>
            <div class="room-price"><span class="from">Desde</span><span class="amount">$952.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.doble') }}" class="room-cta" data-room-cta data-room="Doble (camas separadas)" title="Ver Habitación Doble">Ver habitación</a>
          </div>
        </article>

        <article class="room-card reveal">
          <div class="room-image">
            <span class="room-tag">Recomendada</span>
            <img src="{{ asset('images/Habitación19/Habitacion19-40.jpg') }}" alt="Suite Junior con vista a la ciudad, Hotel Fratelli Aguascalientes" loading="lazy" />
          </div>
          <div class="room-body">
            <h3>Suite Jr</h3>
            <p>Sala de estar separada, vista a la ciudad y baño en mármol. El equilibrio entre espacio y precio.</p>
            <div class="room-feats"><span>Queen</span><span>Sala</span><span>Vista ciudad</span></div>
            <div class="room-price"><span class="from">Desde</span><span class="amount">$892.50</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.suite-jr') }}" class="room-cta" data-room-cta data-room="Suite Jr" title="Ver Suite Jr">Ver habitación</a>
          </div>
        </article>

        <article class="room-card reveal">
          <div class="room-image">
            <span class="room-tag">Premium</span>
            <img src="{{ asset('images/Habitación22/Habitacion22-1.jpg') }}" alt="Máster Suite con cama king, Hotel Fratelli Aguascalientes" loading="lazy" />
          </div>
          <div class="room-body">
            <h3>Máster Suite</h3>
            <p>Nuestra suite insignia con sala lounge y acceso a balcón con vistas panorámicas.</p>
            <div class="room-feats"><span>King</span><span>Balcón</span></div>
            <div class="room-price"><span class="from">Desde</span><span class="amount">$952.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.master-suite') }}" class="room-cta" data-room-cta data-room="Máster Suite" title="Ver Máster Suite">Ver habitación</a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="servicios" aria-labelledby="serv-title">
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Servicios del hotel</span>
        <h2 id="serv-title">Todo lo que necesitas para una estancia <em>perfecta</em></h2>
        <p class="section-sub">Comodidades pensadas para que solo te ocupes de disfrutar Aguascalientes.</p>
      </div>
      <div class="services-grid">
        <div class="service reveal">
          <div class="service-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 9a16 16 0 0120 0"/><path d="M5 12a12 12 0 0114 0"/><path d="M8.5 15a8 8 0 017 0"/><circle cx="12" cy="18" r="1" fill="currentColor"/></svg></div>
          <h3>WiFi gratuito</h3>
          <p>Internet de alta velocidad en todas las áreas, sin contraseñas que pedir en recepción.</p>
        </div>
        <div class="service reveal">
          <div class="service-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18"/><path d="M5 21V8l7-5 7 5v13"/><path d="M9 21v-6h6v6"/></svg></div>
          <h3>Balcón panorámico</h3>
          <p>Disfruta el atardecer de Aguascalientes desde nuestro balcón con vistas abiertas a la ciudad.</p>
        </div>
        <div class="service reveal">
          <div class="service-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"/><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z"/></svg></div>
          <h3>Vistas a la ciudad</h3>
          <p>Habitaciones orientadas para que despiertes con la mejor cara de Aguascalientes.</p>
        </div>
        <div class="service reveal">
          <div class="service-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
          <h3>Recepción 24h</h3>
          <p>Personal disponible las 24 horas para check-in, check-out y cualquier necesidad.</p>
        </div>
        <div class="service reveal">
          <div class="service-icon" aria-hidden="true"><svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 18v-6a3 3 0 013-3h12a3 3 0 013 3v6"/><path d="M3 18h18"/><path d="M7 9V7a2 2 0 012-2h6a2 2 0 012 2v2"/></svg></div>
          <h3>Habitaciones confortables</h3>
          <p>Colchones premium, blancos de algodón y cortinas blackout para el descanso que mereces.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- LOCATION -->
  <section class="location" id="ubicacion" aria-labelledby="loc-title">
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Cómo llegar</span>
        <h2 id="loc-title">Ubicación — Cerca de la <em>Feria de San Marcos</em></h2>
        <p class="section-sub">En el corazón de Fraccionamiento Las Américas, a 5 minutos de la feria más importante de México.</p>
      </div>

      <div class="location-grid">
        <div class="reveal">
          <address>
            <strong>Hotel Fratelli</strong>
            República de Brasil 627<br />
            Fraccionamiento Las Américas<br />
            C.P. 20230, Aguascalientes, México
          </address>
          <div class="location-meta">
            <div class="loc-row">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M12 22s-7-7.5-7-13a7 7 0 0114 0c0 5.5-7 13-7 13z"/><circle cx="12" cy="9" r="2.5"/></svg>
              <div><strong>A 5 minutos</strong><span class="muted">de la Feria de San Marcos en auto</span></div>
            </div>
            <div class="loc-row">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/></svg>
              <div><strong>15 minutos</strong><span class="muted">del Aeropuerto Internacional de Aguascalientes</span></div>
            </div>
            <div class="loc-row">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M3 21h18"/><path d="M5 21V8l7-5 7 5v13"/></svg>
              <div><strong>Centro Histórico</strong><span class="muted">a 10 minutos en auto · plaza Patria y catedral</span></div>
            </div>
          </div>
          <a class="btn btn-gold" href="https://maps.google.com/?q=República+de+Brasil+627+Las+Américas+Aguascalientes" target="_blank" rel="noopener" title="Abrir en Google Maps">Ver en Google Maps</a>
        </div>

        <div class="map-frame reveal" role="img" aria-label="Mapa de Aguascalientes">
          <img src="{{ asset('images/Arcoiris/Arcoiris-1.jpg') }}" alt="Vista de Aguascalientes desde Hotel Fratelli, con arcoíris" loading="lazy" />
          <div class="map-pin" aria-hidden="true">
            <div class="label">Hotel Fratelli</div>
            <div class="dot"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- REVIEWS — Carousel -->
  <section class="reviews reviews-dark" id="resenas" aria-labelledby="rev-title" style="--rev-bg: url('{{ asset('images/Arcoiris/Arcoiris-3.jpg') }}');">
    <div class="container">
      <div class="section-head center reveal">
        <span class="section-eyebrow">Lo que dicen de nosotros</span>
        <h2 id="rev-title">Opiniones de <em>huéspedes</em></h2>
      </div>

      <div class="reviews-summary reveal">
        <span class="big">3.8</span>
        <div class="summary-block">
          <div class="stars-big" aria-label="3.8 de 5 estrellas">★★★★☆</div>
          <div class="summary-meta">Basado en 277 reseñas verificadas en Google y Booking</div>
        </div>
      </div>

      <div class="carousel reveal" data-carousel aria-roledescription="carrusel" aria-label="Reseñas de huéspedes">
        <div class="carousel-track" tabindex="0">

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">El hotel está muy bien ubicado, a unos minutos de la Feria. La habitación impecable, cama súper cómoda y el personal de recepción muy atento incluso de madrugada. Repetiríamos sin dudar.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">MR</div><div class="reviewer-info"><div class="name">María Rodríguez</div><div class="date">Hace 2 semanas</div></div><div class="review-source">Google</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">Vine por trabajo y terminé recomendándolo a todo el equipo. La relación calidad-precio es excelente, el WiFi es estable y el balcón es un plus para terminar el día. Volveré en mi próxima visita a Aguascalientes.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">JC</div><div class="reviewer-info"><div class="name">Jorge Cervantes</div><div class="date">Hace 1 mes</div></div><div class="review-source">Google</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">Nos quedamos durante la Feria de San Marcos y fue la mejor decisión. Cinco minutos en auto y de regreso un descanso real. La Máster Suite vale cada peso. Atención de 10.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">AL</div><div class="reviewer-info"><div class="name">Andrea López</div><div class="date">Hace 3 meses</div></div><div class="review-source">Booking</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="4 de 5 estrellas">★★★★☆</div>
              <p class="review-text">Buena ubicación, habitaciones limpias y muy buen desayuno (lo pedimos en habitación). Volveremos.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">RD</div><div class="reviewer-info"><div class="name">Ricardo Dávila</div><div class="date">Hace 1 mes</div></div><div class="review-source">Google</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">Lo mejor: la atención. Desde el check-in nos sentimos en familia. Habitación amplia, baño impecable y el balcón con la vista de la ciudad es algo que no olvidaremos. Súper recomendado.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">SP</div><div class="reviewer-info"><div class="name">Sofía Padilla</div><div class="date">Hace 2 meses</div></div><div class="review-source">Booking</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="4 de 5 estrellas">★★★★☆</div>
              <p class="review-text">Excelente opción si vienes por la Feria. Habitación cómoda, sábanas suaves, agua caliente al instante. El WiFi es rápido y la recepción siempre responde. Repetiré sin duda.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">EM</div><div class="reviewer-info"><div class="name">Eduardo Martínez</div><div class="date">Hace 4 meses</div></div><div class="review-source">Google</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">Viajamos con dos niños y la habitación doble fue perfecta. Recepción ayudó con cuna sin cargo y nos recomendaron lugares para comer cerca. Hospitalidad real.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">LH</div><div class="reviewer-info"><div class="name">Lucía Hernández</div><div class="date">Hace 5 meses</div></div><div class="review-source">Booking</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">Estancia de negocios de 4 noches. Habitación silenciosa, escritorio amplio, WiFi sin caídas. La opción ideal cuando vienes a trabajar a Aguascalientes y no quieres complicarte.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">FG</div><div class="reviewer-info"><div class="name">Fernando García</div><div class="date">Hace 6 meses</div></div><div class="review-source">Google</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="4 de 5 estrellas">★★★★☆</div>
              <p class="review-text">Hotel limpio y bien cuidado. El check-in fue rápido y nos dieron un mapa con recomendaciones de la ciudad. La cama de la Suite Jr es comodísima. Volvería sin pensarlo.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">CR</div><div class="reviewer-info"><div class="name">Carolina Reyes</div><div class="date">Hace 7 meses</div></div><div class="review-source">Google</div></div>
            </div>
          </article>

          <article class="carousel-card">
            <div class="review">
              <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
              <p class="review-text">Vine sola por trabajo y me sentí completamente segura. Recepción 24h se nota: llegué a las 2 am sin problema. Habitación cálida, baño impecable. Es mi hotel base en Aguascalientes.</p>
              <div class="reviewer"><div class="avatar" aria-hidden="true">PV</div><div class="reviewer-info"><div class="name">Paola Vargas</div><div class="date">Hace 8 meses</div></div><div class="review-source">Booking</div></div>
            </div>
          </article>

        </div>

        <div class="carousel-controls">
          <div class="carousel-dots" role="tablist" aria-label="Páginas del carrusel"></div>
          <div class="carousel-arrows">
            <button class="carousel-arrow" data-carousel-prev type="button" aria-label="Reseñas anteriores">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="carousel-arrow" data-carousel-next type="button" aria-label="Reseñas siguientes">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact" id="contacto" aria-labelledby="contact-title">
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Reserva tu estancia</span>
        <h2 id="contact-title">Reserva tu habitación en <em>Aguascalientes</em></h2>
        <p class="section-sub">Envíanos tus fechas y un miembro de nuestro equipo te confirmará disponibilidad en menos de 2 horas.</p>
      </div>
      <div class="contact-grid">
        <form class="reserve reveal" id="reserveForm" novalidate>
          <div class="form-row">
            <div class="field"><label for="name">Nombre completo</label><input type="text" id="name" name="name" required placeholder="Tu nombre" /></div>
            <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" required placeholder="tu@email.com" /></div>
          </div>
          <div class="form-row">
            <div class="field"><label for="phone">Teléfono</label><input type="tel" id="phone" name="phone" placeholder="449 000 0000" /></div>
            <div class="field"><label for="roomType">Tipo de habitación</label>
              <select id="roomType" name="roomType">
                <option value="">Selecciona...</option>
                <option value="Sencilla">Sencilla — $714.00 MXN</option>
                <option value="Doble (cama matrimonial)">Doble (cama matrimonial) — $833.00 MXN</option>
                <option value="Doble (camas separadas)">Doble (camas separadas) — $952.00 MXN</option>
                <option value="Suite Jr">Suite Jr — $892.50 MXN</option>
                <option value="Máster Suite">Máster Suite — $952.00 MXN</option>
                <option value="Triple">Triple — $1,249.50 MXN</option>
                <option value="Cuádruple">Cuádruple — $1,606.50 MXN</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="field"><label for="checkin">Fecha de entrada</label><input type="date" id="checkin" name="checkin" /></div>
            <div class="field"><label for="checkout">Fecha de salida</label><input type="date" id="checkout" name="checkout" /></div>
          </div>
          <div class="field" style="margin-bottom: 20px;">
            <label for="message">Mensaje (opcional)</label>
            <textarea id="message" name="message" placeholder="Cuéntanos cualquier detalle de tu estancia..."></textarea>
          </div>
          <button type="submit" class="btn btn-gold form-submit">Enviar solicitud</button>
        </form>

        <aside class="contact-info reveal" aria-label="Información de contacto">
          <div class="info-row">
            <div class="info-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92V21a1 1 0 01-1.1 1A19 19 0 012 4.1 1 1 0 013 3h4.09a1 1 0 011 .75l1 4a1 1 0 01-.27 1L7 10.5a16 16 0 006.5 6.5l1.75-1.82a1 1 0 011-.27l4 1a1 1 0 01.75 1z"/></svg></div>
            <div class="info-content"><div class="label">Teléfono</div><div class="value"><a href="tel:+524492196201">449 219 6201</a><br/><a href="tel:+524495963183">449 596 3183</a></div></div>
          </div>
          <div class="info-row">
            <div class="info-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.1-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4 0 1.4 1 2.8 1.2 3 .1.2 2 3 4.8 4.2 1.7.7 2.3.8 3.1.7.5-.1 1.7-.7 1.9-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.3c1.4.8 3 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg></div>
            <div class="info-content"><div class="label">WhatsApp</div><div class="value"><a href="https://wa.me/524492196201" target="_blank" rel="noopener">449 219 6201</a></div></div>
          </div>
          <div class="info-row">
            <div class="info-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></div>
            <div class="info-content"><div class="label">Email</div><div class="value"><a href="mailto:fratelli.hotel@gmail.com">fratelli.hotel@gmail.com</a></div></div>
          </div>
          <div class="info-row">
            <div class="info-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 22s-7-7.5-7-13a7 7 0 0114 0c0 5.5-7 13-7 13z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
            <div class="info-content"><div class="label">Dirección</div><div class="value">República de Brasil 627<br/>Fracc. Las Américas · Aguascalientes</div></div>
          </div>
          <div class="info-row">
            <div class="info-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
            <div class="info-content"><div class="label">Horarios</div><div class="value">Recepción 24 horas · Check-in 14:00 · Check-out 12:00</div></div>
          </div>
        </aside>
      </div>
    </div>
  </section>

@endsection

@section('footer-fourth-column')
  <div class="footer-col"><h4>SEO</h4><ul>
    <li><a href="{{ route('hoteles.feria') }}">Cerca Feria San Marcos</a></li>
    <li><a href="{{ route('hoteles.economicos') }}">Hoteles económicos</a></li>
    <li><a href="tel:+524492196201">449 219 6201</a></li>
    <li><a href="mailto:fratelli.hotel@gmail.com">fratelli.hotel@gmail.com</a></li>
  </ul></div>
@endsection
