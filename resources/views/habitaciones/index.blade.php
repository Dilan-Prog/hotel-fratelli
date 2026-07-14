@extends('layouts.app')

@section('title', 'Habitaciones | Hotel Fratelli Aguascalientes — Desde $714.00 MXN/noche')

@section('meta')
  <meta name="description" content="Conoce las 7 habitaciones de Hotel Fratelli Aguascalientes: Sencilla, Doble, Suite Jr, Máster Suite, Triple y Cuádruple. Precios reales desde $714.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/habitaciones" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Habitaciones | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Conoce las 7 habitaciones de Hotel Fratelli Aguascalientes con precios reales desde $714.00 MXN/noche." />
  <meta property="og:image" content="{{ asset('images/Hotel-frontal/hotel-fratelli-mejorada_noche.png') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Habitaciones | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Conoce las 7 habitaciones de Hotel Fratelli Aguascalientes con precios reales desde $714.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/Hotel-frontal/hotel-fratelli-mejorada_noche.png') }}" />
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Habitaciones","item":"https://www.hotelfratelli.com.mx/habitaciones"}]}
</script>
@endsection

@section('content')
  <header class="hero hero-medium">
    <div class="hero-bg" aria-hidden="true"><img src="{{ asset('images/Hotel-frontal/hotel-fratelli-mejorada_noche.png') }}" alt="Habitaciones Hotel Fratelli Aguascalientes" /></div>
    <div class="container hero-inner">
      <span class="hero-eyebrow">7 tipos de habitación</span>
      <h1>Nuestras <em>Habitaciones</em></h1>
      <p class="hero-sub">De la Sencilla a la Cuádruple: encuentra la habitación que se ajusta a tu grupo y presupuesto. Precios reales, sin sorpresas.</p>
    </div>
  </header>

  <nav class="breadcrumbs" aria-label="Migas de pan"><div class="container"><ol>
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li aria-current="page">Habitaciones</li>
  </ol></div></nav>

  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-head reveal">
        <span class="section-eyebrow">Catálogo completo</span>
        <h2>Elige tu <em>habitación</em></h2>
        <p class="section-sub">Ordenadas de menor a mayor precio.</p>
      </div>

      <div class="catalog-grid">

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación17/Habitacion17-16.jpg') }}" alt="Habitación Sencilla, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Sencilla</h3>
            <div class="cc-feats"><span>1 persona</span><span>1 matrimonial</span></div>
            <p>Para 1 persona, 1 cama matrimonial. Espacio funcional y luz natural, ideal para viajeros que buscan comodidad sin pagar de más.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$714.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.sencilla') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación19/Habitacion19-25.jpg') }}" alt="Habitación Doble con cama matrimonial, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Doble (cama matrimonial)</h3>
            <div class="cc-feats"><span>2 personas</span><span>1 matrimonial</span></div>
            <p>Para 2 personas, 1 cama matrimonial. Perfecta para parejas que comparten una sola cama amplia.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$833.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.doble-matrimonial') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación19/Habitacion19-40.jpg') }}" alt="Suite Junior con vista a la ciudad, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Suite Jr</h3>
            <div class="cc-feats"><span>2 personas</span><span>1 Queen</span></div>
            <p>Para 2 personas, 1 cama Queen. Sala de estar separada y vista a la ciudad. El equilibrio entre espacio y precio.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$892.50</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.suite-jr') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación21/Habitacion21-20.jpg') }}" alt="Habitación Doble con camas separadas, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Doble (camas separadas)</h3>
            <div class="cc-feats"><span>2 personas</span><span>2 camas</span></div>
            <p>Para 2 personas, camas separadas. Ideal para amigos o familia que prefieren cada uno su propia cama.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$952.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.doble') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación22/Habitacion22-1.jpg') }}" alt="Máster Suite con cama king, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Máster Suite</h3>
            <div class="cc-feats"><span>2 personas</span><span>1 King</span></div>
            <p>Para 2 personas, 1 cama King. Nuestra habitación más premium, con los mejores acabados del hotel.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$952.00</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.master-suite') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación24/Habitacion24-22.jpg') }}" alt="Habitación Triple, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Triple</h3>
            <div class="cc-feats"><span>3 personas</span><span>Matrimonial + individual</span></div>
            <p>Para 3 personas, 1 cama matrimonial y 1 individual. Pensada para familias pequeñas o grupos de amigos.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$1,249.50</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.triple') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

        <article class="catalog-card reveal">
          <div class="cc-image"><img src="{{ asset('images/Habitación21/Habitacion21-1.jpg') }}" alt="Habitación Cuádruple, Hotel Fratelli Aguascalientes" loading="lazy" /></div>
          <div class="cc-body">
            <h3>Cuádruple</h3>
            <div class="cc-feats"><span>4 personas</span><span>2 matrimoniales</span></div>
            <p>Para 4 personas, 2 camas matrimoniales. La opción con más espacio para familias o grupos grandes.</p>
            <div class="cc-price"><span class="from">Desde</span><span class="amount">$1,606.50</span><span class="unit">MXN / noche</span></div>
            <a href="{{ route('habitaciones.cuadruple') }}" class="btn btn-gold">Ver habitación</a>
          </div>
        </article>

      </div>
    </div>
  </section>
@endsection
