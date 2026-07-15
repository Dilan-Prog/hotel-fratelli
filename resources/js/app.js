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

    const getPerView = () => {
      const w = window.innerWidth;
      if (w <= 680) return 1;
      if (w <= 980) return 2;
      return 3;
    };

    // Build dots based on visible-page count
    const buildDots = (perView) => {
      if (!dotsWrap) return;
      const pages = Math.max(1, Math.ceil(slides.length / perView));
      const frag = document.createDocumentFragment();
      for (let i = 0; i < pages; i++) {
        const d = document.createElement('button');
        d.className = 'carousel-dot' + (i === 0 ? ' active' : '');
        d.type = 'button';
        d.setAttribute('role', 'tab');
        d.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
        d.setAttribute('aria-label', `Ir al grupo ${i + 1}`);
        d.addEventListener('click', () => goToPage(i));
        frag.appendChild(d);
      }
      dotsWrap.innerHTML = '';
      dotsWrap.appendChild(frag);
    };

    const goToPage = (pageIdx) => {
      const perView = getPerView();
      const slideEl = slides[pageIdx * perView];
      if (!slideEl) return;
      const left = slideEl.offsetLeft - track.offsetLeft;
      track.scrollTo({ left, behavior: 'smooth' });
    };

    // Lee toda la geometría necesaria primero y aplica los cambios de DOM después:
    // alternar lecturas (offsetLeft/scrollWidth) y escrituras (classList/disabled)
    // forzaba reflows síncronos en cada scroll/resize.
    const syncState = () => {
      const perView = getPerView();
      const scrollLeft = track.scrollLeft;
      const maxScroll = track.scrollWidth - track.clientWidth - 2;
      const trackOffsetLeft = track.offsetLeft;
      const dots = dotsWrap ? dotsWrap.querySelectorAll('.carousel-dot') : [];

      let closest = 0;
      let minDist = Infinity;
      for (let i = 0; i < dots.length; i++) {
        const slideEl = slides[i * perView];
        if (!slideEl) continue;
        const dist = Math.abs(scrollLeft - (slideEl.offsetLeft - trackOffsetLeft));
        if (dist < minDist) { minDist = dist; closest = i; }
      }

      dots.forEach((d, i) => {
        const active = i === closest;
        d.classList.toggle('active', active);
        d.setAttribute('aria-selected', active ? 'true' : 'false');
      });
      if (prev && next) {
        prev.disabled = scrollLeft <= 2;
        next.disabled = scrollLeft >= maxScroll;
      }
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
      window.requestAnimationFrame(syncState);
    }, { passive: true });

    let resizeT;
    window.addEventListener('resize', () => {
      clearTimeout(resizeT);
      resizeT = setTimeout(() => {
        buildDots(getPerView());
        syncState();
      }, 150);
    });

    buildDots(getPerView());
    syncState();
  }

  // ===== MAPA — lazy load (scroll o clic) =====
  document.querySelectorAll('[data-map-lazy]').forEach(initLazyMap);

  function initLazyMap(container) {
    const src = container.dataset.mapSrc;
    const title = container.dataset.mapTitle || 'Mapa';
    const trigger = container.querySelector('[data-map-trigger]');
    let loaded = false;

    const loadMap = () => {
      if (loaded || !src) return;
      loaded = true;
      const iframe = document.createElement('iframe');
      iframe.src = src;
      iframe.width = '100%';
      iframe.height = '100%';
      iframe.style.border = '0';
      iframe.loading = 'lazy';
      iframe.referrerPolicy = 'no-referrer-when-downgrade';
      iframe.title = title;
      container.innerHTML = '';
      container.appendChild(iframe);
    };

    if (trigger) trigger.addEventListener('click', loadMap);

    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            loadMap();
            io.unobserve(e.target);
          }
        });
      }, { rootMargin: '200px 0px', threshold: 0 });
      io.observe(container);
    }
  }
})();
