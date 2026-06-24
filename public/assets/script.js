/* ============================================================
   HOTEL FRATELLI — Scripts globales
   ============================================================ */

(function () {
  'use strict';

  // ===== NAVBAR scroll state =====
  const navbar = document.getElementById('navbar');
  if (navbar) {
    const onScroll = () => {
      if (window.scrollY > 30) navbar.classList.add('scrolled');
      else navbar.classList.remove('scrolled');
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ===== BURGER menu =====
  const burger = document.getElementById('burger');
  const navMenu = document.getElementById('navMenu');
  if (burger && navMenu) {

    // Inyectar botón "Reservar ahora" en el menú móvil
    const navCta = document.querySelector('.nav-cta');
    if (navCta && !navMenu.querySelector('.nav-reserve-mobile')) {
      const li = document.createElement('li');
      li.className = 'nav-reserve-mobile-li';
      const a = document.createElement('a');
      a.href = navCta.getAttribute('href');
      a.className = 'nav-reserve-mobile';
      a.textContent = 'Reservar ahora';
      li.appendChild(a);
      navMenu.appendChild(li);
    }

    const openMenu = () => {
      navMenu.classList.add('open');
      burger.classList.add('open');
      burger.setAttribute('aria-expanded', 'true');
    };
    const closeMenu = () => {
      navMenu.classList.remove('open');
      burger.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
    };

    burger.addEventListener('click', (e) => {
      e.stopPropagation();
      navMenu.classList.contains('open') ? closeMenu() : openMenu();
    });

    navMenu.querySelectorAll('a').forEach(a =>
      a.addEventListener('click', closeMenu)
    );

    // Cerrar al hacer clic fuera del menú
    document.addEventListener('click', (e) => {
      if (
        navMenu.classList.contains('open') &&
        !navMenu.contains(e.target) &&
        !burger.contains(e.target)
      ) {
        closeMenu();
      }
    });

    // Cerrar con tecla Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) closeMenu();
    });
  }

  // ===== REVEAL on scroll =====
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
  } else {
    document.querySelectorAll('.reveal').forEach(el => el.classList.add('in'));
  }

  // ===== ROOM CTA → prefill form / link to reservar =====
  document.querySelectorAll('[data-room-cta]').forEach(btn => {
    btn.addEventListener('click', () => {
      const type = btn.dataset.room;
      try { sessionStorage.setItem('fratelli_room', type); } catch (e) {}
    });
  });

  // ===== RESERVE form =====
  const form = document.getElementById('reserveForm');
  if (form) {
    // Prefill from sessionStorage
    try {
      const stored = sessionStorage.getItem('fratelli_room');
      if (stored) {
        const sel = form.querySelector('#roomType');
        if (sel) {
          [...sel.options].forEach(o => {
            if (o.value === stored || o.textContent.trim() === stored) o.selected = true;
          });
        }
        sessionStorage.removeItem('fratelli_room');
      }
    } catch (e) {}

    // Set min dates to today
    const today = new Date().toISOString().split('T')[0];
    const ci = form.querySelector('#checkin');
    const co = form.querySelector('#checkout');
    if (ci) ci.min = today;
    if (co) co.min = today;

    // Submit → open WhatsApp with prefilled message
    form.addEventListener('submit', e => {
      e.preventDefault();
      const data = new FormData(form);
      const msg = [
        '¡Hola Hotel Fratelli! Quiero reservar.',
        '',
        `Nombre: ${data.get('name') || '-'}`,
        `Email: ${data.get('email') || '-'}`,
        `Teléfono: ${data.get('phone') || '-'}`,
        `Tipo de habitación: ${data.get('roomType') || '-'}`,
        `Entrada: ${data.get('checkin') || '-'}`,
        `Salida: ${data.get('checkout') || '-'}`,
        `Huéspedes: ${data.get('guests') || '-'}`,
        `Mensaje: ${data.get('message') || '-'}`
      ].join('\n');
      const url = `https://wa.me/524492196201?text=${encodeURIComponent(msg)}`;
      window.open(url, '_blank', 'noopener');
    });
  }

  // ===== CAROUSEL (reseñas) =====
  document.querySelectorAll('[data-carousel]').forEach(initCarousel);

  function initCarousel(root) {
    const track = root.querySelector('.carousel-track');
    const prev = root.querySelector('[data-carousel-prev]');
    const next = root.querySelector('[data-carousel-next]');
    const dotsWrap = root.querySelector('.carousel-dots');
    if (!track) return;

    const slides = [...track.children];
    if (!slides.length) return;

    // Build dots based on visible-page count
    const buildDots = () => {
      if (!dotsWrap) return;
      const perView = getPerView();
      const pages = Math.max(1, Math.ceil(slides.length / perView));
      dotsWrap.innerHTML = '';
      for (let i = 0; i < pages; i++) {
        const d = document.createElement('button');
        d.className = 'carousel-dot' + (i === 0 ? ' active' : '');
        d.type = 'button';
        d.setAttribute('aria-label', `Ir al grupo ${i + 1}`);
        d.addEventListener('click', () => goToPage(i));
        dotsWrap.appendChild(d);
      }
    };

    const getPerView = () => {
      const w = window.innerWidth;
      if (w <= 680) return 1;
      if (w <= 980) return 2;
      return 3;
    };

    const goToPage = (pageIdx) => {
      const perView = getPerView();
      const slideEl = slides[pageIdx * perView];
      if (!slideEl) return;
      const left = slideEl.offsetLeft - track.offsetLeft;
      track.scrollTo({ left, behavior: 'smooth' });
    };

    const updateActiveDot = () => {
      if (!dotsWrap) return;
      const perView = getPerView();
      const scrollLeft = track.scrollLeft;
      let closest = 0;
      let minDist = Infinity;
      const dots = dotsWrap.querySelectorAll('.carousel-dot');
      for (let i = 0; i < dots.length; i++) {
        const slideEl = slides[i * perView];
        if (!slideEl) continue;
        const offset = slideEl.offsetLeft - track.offsetLeft;
        const dist = Math.abs(scrollLeft - offset);
        if (dist < minDist) { minDist = dist; closest = i; }
      }
      dots.forEach((d, i) => d.classList.toggle('active', i === closest));
    };

    const updateArrows = () => {
      if (!prev || !next) return;
      const max = track.scrollWidth - track.clientWidth - 2;
      prev.disabled = track.scrollLeft <= 2;
      next.disabled = track.scrollLeft >= max;
    };

    const scrollByPage = (dir) => {
      const perView = getPerView();
      const slideEl = slides[0];
      if (!slideEl) return;
      const slideW = slideEl.getBoundingClientRect().width;
      const gap = parseInt(getComputedStyle(track).columnGap || getComputedStyle(track).gap || 0, 10);
      const delta = (slideW + gap) * perView;
      track.scrollBy({ left: dir * delta, behavior: 'smooth' });
    };

    if (prev) prev.addEventListener('click', () => scrollByPage(-1));
    if (next) next.addEventListener('click', () => scrollByPage(1));

    track.addEventListener('scroll', () => {
      window.requestAnimationFrame(() => {
        updateActiveDot();
        updateArrows();
      });
    }, { passive: true });

    let resizeT;
    window.addEventListener('resize', () => {
      clearTimeout(resizeT);
      resizeT = setTimeout(() => {
        buildDots();
        updateActiveDot();
        updateArrows();
      }, 150);
    });

    buildDots();
    updateActiveDot();
    updateArrows();
  }
})();
