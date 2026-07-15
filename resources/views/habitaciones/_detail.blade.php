{{-- Partial compartido por las 7 vistas de detalle de habitación. Variables esperadas:
     $roomNameHtml, $roomName, $eyebrow, $heroSub, $mainImg, $thumbs (array de 3),
     $desc, $feats (array de strings), $priceAmount, $breadcrumbLabel
     $mainImg/$thumbs son opcionales: si no hay fotos reales todavía, omitirlas (o pasar null/[])
     y se muestra un placeholder "fotos próximamente" en vez de una imagen rota. --}}
<header class="hero hero-small">
  <div class="hero-bg" aria-hidden="true">
    @if($mainImg ?? null)
      <picture>
        <source srcset="{{ asset(Str::replaceLast('.jpg', '.webp', $mainImg)) }}" type="image/webp">
        <img src="{{ asset($mainImg) }}" alt="{{ $roomName }}, Hotel Fratelli Aguascalientes" width="1024" height="681" fetchpriority="high" loading="eager" />
      </picture>
    @else
      <div class="photo-placeholder" role="img" aria-label="Fotos de esta habitación próximamente"></div>
    @endif
  </div>
  <div class="container hero-inner">
    <span class="hero-eyebrow">{{ $eyebrow }}</span>
    <h1>Habitación {!! $roomNameHtml !!}</h1>
    <p class="hero-sub">{{ $heroSub }}</p>
  </div>
</header>

<nav class="breadcrumbs" aria-label="Migas de pan"><div class="container"><ol>
  <li><a href="{{ route('home') }}">Inicio</a></li>
  <li><a href="{{ route('habitaciones.index') }}">Habitaciones</a></li>
  <li aria-current="page">{{ $breadcrumbLabel }}</li>
</ol></div></nav>

<section class="room-detail">
  <div class="container">
    <div class="room-detail-grid">
      <div class="gallery reveal">
        @if($mainImg ?? null)
          <div class="g-main">
            <picture>
              <source srcset="{{ asset(Str::replaceLast('.jpg', '.webp', $mainImg)) }}" type="image/webp">
              <img src="{{ asset($mainImg) }}" alt="{{ $roomName }} — vista general" width="1024" height="681" loading="lazy" />
            </picture>
          </div>
          @foreach ($thumbs ?? [] as $thumb)
            <div class="g-thumb">
              <picture>
                <source srcset="{{ asset(Str::replaceLast('.jpg', '-sm.webp', $thumb)) }}" type="image/webp">
                <img src="{{ asset($thumb) }}" alt="Detalle de {{ $roomName }}, Hotel Fratelli" width="1024" height="681" loading="lazy" />
              </picture>
            </div>
          @endforeach
        @else
          <div class="g-main">
            <div class="photo-placeholder">
              <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="9" cy="11" r="2"/><path d="M21 15l-5-4-4 3-3-2-6 5"/></svg>
              <span>Fotos de esta habitación próximamente</span>
            </div>
          </div>
        @endif
      </div>

      <div class="room-info reveal">
        <span class="room-eyebrow">Hotel Fratelli</span>
        <h2>Habitación {!! $roomNameHtml !!}</h2>
        <p class="desc">{{ $desc }}</p>

        <div class="room-amenities">
          @foreach ($feats as $feat)
            <div class="room-amenity">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M8.5 12.5l2.5 2.5 5-5"/></svg>
              {{ $feat }}
            </div>
          @endforeach
        </div>

        <div class="price-card">
          <div>
            <div class="price-from">Tarifa</div>
            <div class="price-amount"><span class="currency">$</span>{{ $priceAmount }}</div>
            <div class="price-unit">MXN / noche</div>
          </div>
        </div>

        <div class="room-cta-group">
          <a href="https://wa.me/524492196201?text={{ urlencode('Hola, quiero reservar la Habitación ' . $roomName . '.') }}" target="_blank" rel="noopener" class="btn btn-gold">Reservar esta habitación</a>
          <a href="https://wa.me/524492196201?text={{ urlencode('Hola, me interesa la Habitación ' . $roomName . '.') }}" target="_blank" rel="noopener" class="btn btn-outline-dark">Preguntar por WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
</section>
