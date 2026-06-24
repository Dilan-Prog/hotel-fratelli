<nav class="navbar" id="navbar" aria-label="Navegación principal">
  <div class="container nav-inner">
    <a href="{{ route('home') }}" class="logo" title="Hotel Fratelli — Inicio">
      <span class="logo-mark" aria-hidden="true">C</span>
      <span class="logo-text"><span class="brand">FRATELLI</span><span class="sub">Hotel</span></span>
    </a>
    <ul class="nav-menu" id="navMenu">
      <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}" title="Inicio">Inicio</a></li>
      <li><a href="{{ route('habitaciones.index') }}" class="{{ request()->routeIs('habitaciones.*') ? 'active' : '' }}" title="Ver habitaciones">Habitaciones</a></li>
      <li><a href="{{ route('home') }}#servicios" title="Servicios">Servicios</a></li>
      <li><a href="{{ route('home') }}#ubicacion" title="Ubicación">Ubicación</a></li>
      <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}" title="Contacto">Contacto</a></li>
    </ul>
    <a href="{{ route('reservar') }}" class="btn btn-gold nav-cta" title="Reservar ahora">Reservar ahora</a>
    <button class="nav-burger" id="burger" aria-label="Abrir menú"><span></span><span></span><span></span></button>
  </div>
</nav>
