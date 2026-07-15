<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col footer-brand">
        <div class="logo"><img src="{{ asset('images/logotipo/hotel-fratelli-logo-blanco-color.png') }}" alt="Hotel Fratelli" class="logo-img" width="125" height="84"></div>
        <p>Confort, calidad y descanso en el corazón de Aguascalientes. Hotel boutique con 24 habitaciones a 5 minutos de la Feria de San Marcos.</p>
        <div class="socials">
          <a href="https://facebook.com/HotelFratelli" target="_blank" rel="noopener" aria-label="Facebook" title="Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.8c0-.9.2-1.5 1.5-1.5h1.6V4.5c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.4H7.8V14h2.6v8h3.1z"/></svg></a>
          <a href="#" aria-label="Instagram" title="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/></svg></a>
          <a href="https://wa.me/524492196201" target="_blank" rel="noopener" aria-label="WhatsApp" title="WhatsApp"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.1-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4 0 1.4 1 2.8 1.2 3 .1.2 2 3 4.8 4.2 1.7.7 2.3.8 3.1.7.5-.1 1.7-.7 1.9-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.3c1.4.8 3 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg></a>
        </div>
      </div>
      <div class="footer-col"><h4>Navegación</h4><ul>
        <li><a href="{{ route('home') }}">Inicio</a></li>
        <li><a href="{{ route('habitaciones.index') }}">Habitaciones</a></li>
        <li><a href="https://wa.me/524492196201?text={{ urlencode('Hola, quiero reservar una habitación en Hotel Fratelli.') }}" target="_blank" rel="noopener">Reservar</a></li>
        <li><a href="{{ route('contacto') }}">Contacto</a></li>
      </ul></div>
      <div class="footer-col"><h4>Habitaciones</h4><ul>
        <li><a href="{{ route('habitaciones.sencilla') }}">Sencilla</a></li>
        <li><a href="{{ route('habitaciones.doble-matrimonial') }}">Doble (matrimonial)</a></li>
        <li><a href="{{ route('habitaciones.doble') }}">Doble (separadas)</a></li>
        <li><a href="{{ route('habitaciones.suite-jr') }}">Suite Jr</a></li>
        <li><a href="{{ route('habitaciones.master-suite') }}">Máster Suite</a></li>
        <li><a href="{{ route('habitaciones.triple') }}">Triple</a></li>
        <li><a href="{{ route('habitaciones.cuadruple') }}">Cuádruple</a></li>
      </ul></div>
      @hasSection('footer-fourth-column')
        @yield('footer-fourth-column')
      @else
        <div class="footer-col"><h4>Contacto</h4><ul>
          <li><a href="tel:+524492196201">449 219 6201</a></li>
          <li><a href="tel:+524495963183">449 596 3183</a></li>
          <li><a href="mailto:fratelli.hotel@gmail.com">fratelli.hotel@gmail.com</a></li>
          <li>República de Brasil 627<br/>Las Américas, Aguascalientes</li>
        </ul></div>
      @endif
    </div>
    <div class="footer-bottom">
      <div>© 2025 Hotel Fratelli · Aguascalientes, México · Todos los derechos reservados</div>
      <div>Confort, calidad y descanso</div>
    </div>
  </div>
</footer>
<a href="https://wa.me/524492196201?text=Hola%20Hotel%20Fratelli,%20me%20interesa%20reservar" class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp" title="WhatsApp Hotel Fratelli">
  <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.1-1.7-.8-1.9-.9-.3-.1-.5-.1-.7.1-.2.3-.8.9-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.4-2.3-1.4-.8-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.1-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.4 0 1.4 1 2.8 1.2 3 .1.2 2 3 4.8 4.2 1.7.7 2.3.8 3.1.7.5-.1 1.7-.7 1.9-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3zM12 2C6.5 2 2 6.5 2 12c0 1.8.5 3.5 1.3 5L2 22l5.2-1.3c1.4.8 3 1.2 4.8 1.2 5.5 0 10-4.5 10-10S17.5 2 12 2z"/></svg>
</a>
