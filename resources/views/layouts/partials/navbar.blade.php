<nav class="navbar" id="navbar" aria-label="Navegación principal">
  <div class="container nav-inner">
    <a href="{{ route('home') }}" class="logo" title="Hotel Fratelli — Inicio">
      <img src="{{ asset('images/logotipo/hotel-fratelli-logo-blanco-color.png') }}" alt="Hotel Fratelli" class="logo-img">
    </a>
    <ul class="nav-menu" id="navMenu">
      <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}" title="Inicio">Inicio</a></li>
      <li><a href="{{ route('habitaciones.index') }}" class="{{ request()->routeIs('habitaciones.*') ? 'active' : '' }}" title="Ver habitaciones">Habitaciones</a></li>
      <li><a href="{{ route('home') }}#servicios" title="Servicios">Servicios</a></li>
      <li><a href="{{ route('home') }}#ubicacion" title="Ubicación">Ubicación</a></li>
      <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}" title="Contacto">Contacto</a></li>
    </ul>
    <a href="https://wa.me/524492196201?text={{ urlencode('Hola, quiero reservar una habitación en Hotel Fratelli.') }}" target="_blank" rel="noopener" class="btn btn-gold nav-cta" title="Reservar ahora por WhatsApp">Reservar ahora</a>
    <button class="nav-burger" id="burger" aria-label="Abrir menú"><span></span><span></span><span></span></button>
  </div>
</nav>
