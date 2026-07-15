@extends('layouts.app')

@section('title', 'Hoteles Cerca de la Feria de San Marcos | Hotel Fratelli — A 5 minutos')

@section('meta')
  <meta name="description" content="Hotel Fratelli es uno de los mejores hoteles cerca de la Feria de San Marcos en Aguascalientes. A solo 5 minutos del recinto ferial. Reserva desde $714.00 MXN/noche." />
  <link rel="canonical" href="https://hotelfratelli.com.mx/hoteles-cerca-feria-san-marcos" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Hoteles Cerca de la Feria de San Marcos | Hotel Fratelli — A 5 minutos" />
  <meta property="og:description" content="Hotel Fratelli es uno de los mejores hoteles cerca de la Feria de San Marcos en Aguascalientes. A solo 5 minutos del recinto ferial. Reserva desde $714.00 MXN/noche." />
  <meta property="og:url" content="https://hotelfratelli.com.mx/hoteles-cerca-feria-san-marcos" />
  <meta property="og:image" content="{{ asset('images/arcoiris/arcoiris-1.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Hoteles Cerca de la Feria de San Marcos | Hotel Fratelli — A 5 minutos" />
  <meta name="twitter:description" content="Hotel Fratelli es uno de los mejores hoteles cerca de la Feria de San Marcos en Aguascalientes. A solo 5 minutos del recinto ferial. Reserva desde $714.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/arcoiris/arcoiris-1.jpg') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Hoteles cerca Feria San Marcos","item":"https://hotelfratelli.com.mx/hoteles-cerca-feria-san-marcos"}]}
</script>
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué es la Feria Nacional de San Marcos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La Feria Nacional de San Marcos es la feria más importante de México. Cada abril–mayo, Aguascalientes recibe a millones de visitantes que vienen a disfrutar de palenques, conciertos, exposiciones ganaderas, gastronomía regional y el ambiente único del Jardín de San Marcos. Hospedarte cerca del recinto ferial marca toda la diferencia: te ahorras hasta dos horas diarias de traslado, puedes regresar a refrescarte entre eventos y disfrutas con tranquilidad las noches de palenque sin preocuparte por largos recorridos de regreso."
      }
    },
    {
      "@type": "Question",
      "name": "¿Por qué Hotel Fratelli es ideal para la Feria?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Estamos en República de Brasil 627, Fraccionamiento Las Américas. En auto son 5 minutos al recinto ferial en horario normal y máximo 10–12 minutos en horas pico. Una ubicación pensada para que tu Feria sea cómoda. La Feria no entiende de horarios. Sales del palenque a las 4 am y nuestro equipo te recibe igual de atento que a las 11 de la mañana. Tu llave siempre te espera. Colchones premium, cortinas blackout y aislamiento acústico real. Después de un día completo de Feria, lo que necesitas es dormir bien. Esa es justamente nuestra especialidad. Mantenemos precios razonables incluso en plena Feria: desde MXN $714.00 la noche en habitación sencilla. Reservar con anticipación te asegura mejor tarifa y disponibilidad."
      }
    }
  ]
}
</script>
@endsection

@section('content')
  <header class="hero hero-medium">
    <div class="hero-bg" aria-hidden="true">
      <picture>
        <source srcset="{{ asset('images/arcoiris/arcoiris-1.webp') }}" type="image/webp">
        <img src="{{ asset('images/arcoiris/arcoiris-1.jpg') }}" alt="Vista de Aguascalientes desde Hotel Fratelli, con arcoíris" width="1024" height="681" fetchpriority="high" loading="eager" />
      </picture>
    </div>
    <div class="container hero-inner">
      <span class="hero-eyebrow">A 5 minutos del recinto ferial</span>
      <h1>Hotel a 5 Minutos de la <em>Feria de San Marcos</em>, Aguascalientes</h1>
      <p class="hero-sub">Hotel Fratelli es la mejor opción si vienes a la Feria Nacional de San Marcos. Habitaciones confortables, recepción 24 horas y un descanso real después de cada noche de feria.</p>
      <div class="hero-cta">
        <a href="https://wa.me/524492196201?text={{ urlencode('Hola, quiero reservar una habitación en Hotel Fratelli.') }}" target="_blank" rel="noopener" class="btn btn-gold">Reservar habitación</a>
        <a href="https://wa.me/524492196201" target="_blank" rel="noopener" class="btn btn-outline">WhatsApp directo</a>
      </div>
    </div>
  </header>

  <nav class="breadcrumbs" aria-label="Migas de pan"><div class="container"><ol>
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li aria-current="page">Hoteles cerca Feria San Marcos</li>
  </ol></div></nav>

  <section>
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Ubicación privilegiada</span>
        <h2>El hotel más conveniente para tu visita a la <em>Feria</em></h2>
        <p class="section-sub">A 5 minutos en auto del recinto ferial, en una zona segura y bien comunicada. Vuelves al hotel sin batallar con el tráfico.</p>
      </div>

      <div class="feature-strip">
        <div class="fs-item"><span class="fs-num">5 min</span><span class="fs-label">A la Feria</span></div>
        <div class="fs-item"><span class="fs-num">24h</span><span class="fs-label">Recepción</span></div>
        <div class="fs-item"><span class="fs-num">24</span><span class="fs-label">Habitaciones</span></div>
        <div class="fs-item"><span class="fs-num">$714</span><span class="fs-label">Desde MXN</span></div>
      </div>

      <div class="seo-prose">
        <h2>¿Qué es la Feria Nacional de San Marcos?</h2>
        <p>La Feria Nacional de San Marcos es la feria más importante de México. Cada abril–mayo, Aguascalientes recibe a millones de visitantes que vienen a disfrutar de palenques, conciertos, exposiciones ganaderas, gastronomía regional y el ambiente único del Jardín de San Marcos.</p>
        <p>Hospedarte cerca del recinto ferial marca toda la diferencia: te ahorras hasta dos horas diarias de traslado, puedes regresar a refrescarte entre eventos y disfrutas con tranquilidad las noches de palenque sin preocuparte por largos recorridos de regreso.</p>

        <h2>¿Por qué Hotel Fratelli es ideal para la Feria?</h2>
        <h3>1. Distancia real, no marketing</h3>
        <p>Estamos en República de Brasil 627, Fraccionamiento Las Américas. En auto son <strong>5 minutos al recinto ferial</strong> en horario normal y máximo 10–12 minutos en horas pico. Una ubicación pensada para que tu Feria sea cómoda.</p>

        <h3>2. Recepción 24 horas</h3>
        <p>La Feria no entiende de horarios. Sales del palenque a las 4 am y nuestro equipo te recibe igual de atento que a las 11 de la mañana. <strong>Tu llave siempre te espera.</strong></p>

        <h3>3. Habitaciones para descansar de verdad</h3>
        <p>Colchones premium, cortinas blackout y aislamiento acústico real. Después de un día completo de Feria, lo que necesitas es dormir bien. Esa es justamente nuestra especialidad.</p>

        <h3>4. Tarifas honestas en temporada alta</h3>
        <p>Mantenemos precios razonables incluso en plena Feria: desde <strong>MXN $714.00 la noche</strong> en habitación sencilla. Reservar con anticipación te asegura mejor tarifa y disponibilidad.</p>

        <h2>Recomendaciones para tu estancia durante la Feria</h2>
        <ul>
          <li><strong>Reserva con anticipación:</strong> la Feria llena Aguascalientes; entre más temprano reserves, mejor habitación y tarifa.</li>
          <li><strong>Pregunta por taxis seguros en recepción:</strong> tenemos contactos de confianza.</li>
          <li><strong>No te pierdas el Jardín de San Marcos de día:</strong> a 5 minutos también, ideal para una caminata mañanera.</li>
        </ul>

        <h2>Reserva tu habitación cerca de la Feria de San Marcos</h2>
        <p>Confírmate disponibilidad por WhatsApp o por nuestro formulario. Te respondemos en menos de 2 horas y tu habitación queda apartada el mismo día.</p>
      </div>

      <div style="margin-top:48px;display:flex;gap:14px;flex-wrap:wrap;">
        <a href="https://wa.me/524492196201?text={{ urlencode('Hola, quiero reservar una habitación en Hotel Fratelli.') }}" target="_blank" rel="noopener" class="btn btn-dark">Reservar ahora</a>
        <a href="{{ route('habitaciones.index') }}" class="btn btn-outline-dark">Ver habitaciones</a>
      </div>
    </div>
  </section>
@endsection
