@extends('layouts.app')

@section('title', 'Reservar Habitación | Hotel Fratelli Aguascalientes')

@section('meta')
  <meta name="description" content="Reserva tu habitación en Hotel Fratelli Aguascalientes. Confirmación en menos de 2 horas. WiFi gratis, recepción 24h, desde $714.00 MXN/noche." />
  <link rel="canonical" href="https://www.hotelfratelli.com.mx/reservar" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Reservar Habitación | Hotel Fratelli Aguascalientes" />
  <meta property="og:description" content="Reserva tu habitación en Hotel Fratelli Aguascalientes. Confirmación en menos de 2 horas. WiFi gratis, recepción 24h, desde $714.00 MXN/noche." />
  <meta property="og:url" content="https://www.hotelfratelli.com.mx/reservar" />
  <meta property="og:image" content="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}" />
  <meta property="og:locale" content="es_MX" />
  <meta property="og:site_name" content="Hotel Fratelli" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Reservar Habitación | Hotel Fratelli Aguascalientes" />
  <meta name="twitter:description" content="Reserva tu habitación en Hotel Fratelli Aguascalientes. Confirmación en menos de 2 horas. WiFi gratis, recepción 24h, desde $714.00 MXN/noche." />
  <meta name="twitter:image" content="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}" />
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{"@type":"ListItem","position":1,"name":"Inicio","item":"https://www.hotelfratelli.com.mx/hoteles-en-aguascalientes"},{"@type":"ListItem","position":2,"name":"Reservar","item":"https://www.hotelfratelli.com.mx/reservar"}]
}
</script>
@endsection

@section('content')
  <header class="hero hero-small">
    <div class="hero-bg" aria-hidden="true"><img src="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}" alt="Reserva tu habitación en Hotel Fratelli" /></div>
    <div class="container hero-inner">
      <span class="hero-eyebrow">Confirmación en menos de 2h</span>
      <h1>Reserva tu habitación en <em>Hotel Fratelli</em></h1>
      <p class="hero-sub">Envíanos tus fechas y un miembro del equipo te confirmará disponibilidad por WhatsApp o email.</p>
    </div>
  </header>

  <nav class="breadcrumbs" aria-label="Migas de pan"><div class="container"><ol>
    <li><a href="{{ route('home') }}">Inicio</a></li>
    <li aria-current="page">Reservar</li>
  </ol></div></nav>

  <section class="contact" style="padding-top:80px;">
    <div class="container">
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
          <div class="form-row">
            <div class="field"><label for="guests">Huéspedes</label>
              <select id="guests" name="guests">
                <option value="1">1 persona</option><option value="2">2 personas</option>
                <option value="3">3 personas</option><option value="4">4 personas</option>
              </select>
            </div>
            <div class="field"><label>&nbsp;</label><div style="font-size:13px;color:rgba(255,255,255,0.55);padding-top:12px;">Check-in 14:00 · Check-out 12:00</div></div>
          </div>
          <div class="field" style="margin-bottom: 20px;">
            <label for="message">Mensaje (opcional)</label>
            <textarea id="message" name="message" placeholder="Cuéntanos cualquier detalle de tu estancia..."></textarea>
          </div>
          <button type="submit" class="btn btn-gold form-submit">Enviar solicitud por WhatsApp</button>
          <p style="font-size:12px;color:rgba(255,255,255,0.5);margin:14px 0 0;text-align:center;letter-spacing:0.04em;">Al enviar serás redirigido a WhatsApp con tu solicitud pre-llenada.</p>
        </form>

        <aside class="contact-info reveal" aria-label="Información de reservas">
          <div class="info-row">
            <div class="info-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.1-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4 0 1.4 1 2.8 1.2 3 .1.2 2 3 4.8 4.2 1.7.7 2.3.8 3.1.7.5-.1 1.7-.7 1.9-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.3c1.4.8 3 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg></div>
            <div class="info-content"><div class="label">Reserva directa</div><div class="value"><a href="https://wa.me/524492196201" target="_blank" rel="noopener">WhatsApp 449 219 6201</a></div></div>
          </div>
          <div class="info-row">
            <div class="info-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92V21a1 1 0 01-1.1 1A19 19 0 012 4.1 1 1 0 013 3h4.09a1 1 0 011 .75l1 4a1 1 0 01-.27 1L7 10.5a16 16 0 006.5 6.5l1.75-1.82a1 1 0 011-.27l4 1a1 1 0 01.75 1z"/></svg></div>
            <div class="info-content"><div class="label">Teléfono</div><div class="value"><a href="tel:+524492196201">449 219 6201</a><br/><a href="tel:+524495963183">449 596 3183</a></div></div>
          </div>
          <div class="info-row">
            <div class="info-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></div>
            <div class="info-content"><div class="label">Email</div><div class="value"><a href="mailto:fratelli.hotel@gmail.com">fratelli.hotel@gmail.com</a></div></div>
          </div>
          <div class="info-row">
            <div class="info-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
            <div class="info-content"><div class="label">Política</div><div class="value">Sin cargo por cancelación hasta 48 horas antes del check-in. Confirmación en menos de 2 horas.</div></div>
          </div>
        </aside>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script>
    // Prefill room from query param
    const params = new URLSearchParams(location.search);
    const room = params.get('room');
    if (room) {
      window.addEventListener('DOMContentLoaded', () => {
        const sel = document.getElementById('roomType');
        if (sel) [...sel.options].forEach(o => { if (o.value === room || o.textContent.trim() === room) o.selected = true; });
      });
    }
  </script>
@endpush
