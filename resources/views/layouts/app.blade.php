<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Hotel Fratelli Aguascalientes | Reservas desde $714.00/noche')</title>
  @yield('meta')
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Hotel Fratelli" />
  <meta name="theme-color" content="#1A1A1A" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-48x48.png') }}" sizes="48x48" />
  <link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon.png') }}" sizes="180x180" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/icon-192x192.png') }}" sizes="192x192" />
  <link rel="icon" type="image/png" href="{{ asset('images/favicon/icon-512x512.png') }}" sizes="512x512" />

  <link rel="preconnect" href="https://images.unsplash.com" crossorigin />

  {{-- CSS crítico (navbar + hero, mobile y desktop): copia literal de un subconjunto de
       resources/css/app.css. Existe para que lo visible-sin-scroll ya esté bien estilizado
       en el primer pintado, antes de que el CSS completo (cargado abajo vía preload+swap
       para no bloquear el render) termine de aplicarse — evita el "flash sin estilo + salto
       de layout de golpe" que causaba un CLS alto (0.178 desktop / 0.310 mobile en PageSpeed).
       IMPORTANTE: si cambian las reglas de .navbar/.hero/.nav-*/.hero-*/:root en app.css,
       hay que actualizar este bloque a mano — no hay generación automática. --}}
  <style>
    :root{--black:#1A1A1A;--black-soft:#232323;--black-deep:#0f0f0f;--gold:#C9973A;--gold-soft:#d9ac55;--gold-deep:#a87d2a;--gold-a11y:#8a6422;--white:#FFFFFF;--grey-light:#F5F5F2;--grey-mid:#d6d6d1;--grey-text:#6b6b66;--serif:"Playfair Display","Playfair Display Fallback",Georgia,serif;--sans:"Inter","Inter Fallback",system-ui,-apple-system,sans-serif;--r:4px;--maxw:1240px}
    *,*::before,*::after{box-sizing:border-box}
    html{scroll-behavior:smooth}
    body{margin:0;font-family:var(--sans);color:var(--black);background:var(--white);line-height:1.6;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility}
    img{max-width:100%;display:block}
    a{color:inherit;text-decoration:none}
    button{font-family:inherit;cursor:pointer}
    .container{max-width:var(--maxw);margin:0 auto;padding:0 28px}
    .navbar{position:fixed;top:0;left:0;right:0;z-index:100;padding:22px 0;background:transparent;transition:background .35s ease,padding .35s ease,border-color .35s ease;border-bottom:1px solid transparent}
    .navbar.scrolled,.navbar.solid{background:rgba(26,26,26,.96);backdrop-filter:blur(10px);padding:14px 0;border-bottom:1px solid rgba(201,151,58,.18)}
    .nav-inner{display:flex;align-items:center;justify-content:space-between;gap:24px}
    .logo{display:flex;align-items:center;gap:12px;color:var(--white)}
    .logo-img{height:60px;width:auto;aspect-ratio:125/84}
    .nav-menu{display:flex;gap:32px;align-items:center;list-style:none;margin:0;padding:0}
    .nav-menu a{color:var(--white);font-size:13.5px;font-weight:500;letter-spacing:.08em;text-transform:uppercase;position:relative;padding:6px 0;transition:color .2s ease}
    .nav-menu a::after{content:"";position:absolute;left:0;bottom:0;width:0;height:1px;background:var(--gold);transition:width .3s ease}
    .nav-menu a:hover,.nav-menu a.active{color:var(--gold)}
    .nav-menu a:hover::after,.nav-menu a.active::after{width:100%}
    .btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:14px 26px;font-family:var(--sans);font-size:13px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;border-radius:var(--r);border:1px solid transparent;transition:transform .2s ease,background .2s ease,color .2s ease,border-color .2s ease,box-shadow .2s ease;cursor:pointer;white-space:nowrap}
    .btn-gold{background:var(--gold);color:var(--black);border-color:var(--gold)}
    .btn-gold:hover{background:var(--gold-soft);border-color:var(--gold-soft);transform:translateY(-2px);box-shadow:0 10px 24px -10px rgba(201,151,58,.5)}
    .btn-outline{background:transparent;color:var(--white);border-color:var(--white)}
    .btn-outline:hover{background:var(--white);color:var(--black);transform:translateY(-2px)}
    .nav-cta{padding:11px 22px;font-size:12px}
    .nav-burger{display:none;width:40px;height:40px;background:transparent;border:1px solid rgba(255,255,255,.4);border-radius:var(--r);flex-direction:column;gap:5px;align-items:center;justify-content:center}
    .nav-burger span{width:18px;height:1.5px;background:var(--white);transition:transform .3s ease,opacity .3s ease}
    .hero{position:relative;min-height:100vh;color:var(--white);display:flex;align-items:center;overflow:hidden;isolation:isolate}
    .hero.hero-medium{min-height:70vh}
    .hero.hero-small{min-height:55vh}
    .hero-bg{position:absolute;inset:0;z-index:-2;background:var(--black);overflow:hidden}
    .hero-bg img{width:100%;height:100%;object-fit:cover;opacity:.55;transform:scale(1.02)}
    .hero-bg::after{content:"";position:absolute;inset:0;background:linear-gradient(110deg,rgba(0,0,0,.85) 0%,rgba(0,0,0,.55) 45%,rgba(0,0,0,.35) 100%)}
    .hero-inner{position:relative;z-index:1;max-width:760px;padding-top:80px;width:100%}
    .hero-eyebrow{display:inline-flex;align-items:center;gap:12px;color:var(--gold);font-size:12px;letter-spacing:.32em;text-transform:uppercase;margin-bottom:28px}
    .hero-eyebrow::before{content:"";width:32px;height:1px;background:var(--gold)}
    .hero h1{font-family:var(--serif);font-weight:500;font-size:clamp(36px,6vw,68px);line-height:1.05;letter-spacing:-.01em;margin:0 0 22px;color:var(--white);text-wrap:balance}
    .hero h1 em{font-style:italic;color:var(--gold);font-weight:400}
    .hero-sub{font-size:17px;line-height:1.65;color:rgba(255,255,255,.82);margin:0 0 36px;max-width:560px;text-wrap:pretty}
    .hero-cta{display:flex;flex-wrap:wrap;gap:14px}
    .hero-meta{display:flex;flex-wrap:wrap;gap:32px;margin-top:56px;padding-top:28px;border-top:1px solid rgba(255,255,255,.18);max-width:560px}
    .hero-meta div{display:flex;flex-direction:column}
    .hero-meta .k{font-family:var(--serif);color:var(--gold);font-size:26px;font-weight:500;line-height:1}
    .hero-meta .v{font-size:11.5px;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,.65);margin-top:8px}
    @media (max-width:680px){
      .container{padding:0 18px}
      .btn{white-space:normal;text-align:center}
      .nav-menu{display:none}
      .nav-burger{display:flex}
      .nav-cta{display:none}
      .nav-menu.open{display:flex;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:rgba(12,12,12,.97);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);padding:6px 18px 28px;gap:0;border-top:1px solid rgba(201,151,58,.25);box-shadow:0 36px 60px rgba(0,0,0,.6);z-index:98}
      .nav-menu.open li{border-bottom:1px solid rgba(255,255,255,.07)}
      .nav-menu.open li:last-child{border-bottom:none}
      .nav-menu.open a{display:block;padding:15px 2px;font-size:14px;letter-spacing:.1em}
      .nav-reserve-mobile{display:none}
      .nav-menu.open .nav-reserve-mobile{display:block;margin-top:18px;padding:15px!important;background:var(--gold);color:var(--black)!important;font-size:12px;font-weight:700;letter-spacing:.2em;text-transform:uppercase;text-align:center;border-radius:var(--r)}
      .nav-reserve-mobile-li{border-bottom:none!important}
      .nav-burger.open span:nth-child(1){transform:translateY(6.5px) rotate(45deg)}
      .nav-burger.open span:nth-child(2){opacity:0;transform:scaleX(0)}
      .nav-burger.open span:nth-child(3){transform:translateY(-6.5px) rotate(-45deg)}
      .hero-inner{padding-top:112px;padding-bottom:52px}
      .hero-eyebrow{font-size:10.5px;letter-spacing:.2em}
      .hero h1{margin-bottom:16px}
      .hero-sub{font-size:15px;max-width:100%;margin-bottom:28px}
      .hero-cta{flex-direction:column;gap:10px}
      .hero-cta .btn{width:100%;justify-content:center}
      .hero-meta{display:grid;grid-template-columns:1fr 1fr;gap:20px 28px;margin-top:32px;max-width:100%;padding-top:22px}
      .hero-meta .k{font-size:22px}
      .hero-meta .v{font-size:10.5px;letter-spacing:.14em}
    }
    @media (max-width:430px){
      .container{padding:0 16px}
      .hero-inner{padding-top:100px;padding-bottom:44px}
      .hero-meta{gap:14px 20px;margin-top:26px}
      .hero-meta .k{font-size:20px}
    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18339067548"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-18339067548');
  </script>

  {{-- Fuentes autohospedadas: precarga directa (sin dependencia de red a Google) --}}
  <link rel="preload" as="font" type="font/woff2" href="{{ asset('fonts/inter-var-latin.woff2') }}" crossorigin>
  <link rel="preload" as="font" type="font/woff2" href="{{ asset('fonts/playfair-display-var-latin.woff2') }}" crossorigin>

  {{-- CSS propio: preload de alta prioridad sin bloquear el primer render (patrón preload + swap).
       El swap se aplica vía JS con nonce (no onload inline) para mantener una CSP sin 'unsafe-inline' en script-src. --}}
  <link id="app-css-preload" rel="preload" as="style" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/css/app.css') }}" />
  <noscript><link rel="stylesheet" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/css/app.css') }}" /></noscript>
  <script nonce="{{ $cspNonce }}">
    (function () {
      var link = document.getElementById('app-css-preload');
      if (!link) return;
      link.addEventListener('load', function () { link.rel = 'stylesheet'; });
    })();
  </script>

  @vite(['resources/js/app.js'])

  @stack('head')
</head>
<body>

  @include('layouts.partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('layouts.partials.footer')

  @stack('scripts')
</body>
</html>
