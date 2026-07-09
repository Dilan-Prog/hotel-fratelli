# Auditoría Técnica — Hotel Fratelli Aguascalientes

**Stack:** Laravel 10/11 + Blade + CSS/JS vanilla (pipeline Vite instalado pero desconectado de producción)
**Fecha de auditoría:** 2026-07-08 (revisión completa tras ronda de correcciones)
**Alcance:** 13 rutas públicas (`routes/web.php`), `resources/views/**`, `public/assets/style.css`, `public/assets/script.js`, `public/robots.txt`, `public/sitemap.xml`, `public/favicon.ico`, `app/Console/Commands/GenerateSitemap.php`

---

## Resumen ejecutivo

| Área | Estado general |
|---|---|
| **SEO** | Queda pendiente 1 acción manual (favicon vacío) y ajustes menores de longitud de title/description. |
| **CSS** | ✅ Muy bueno. Se eliminó el 100% del CSS muerto detectado (13 líneas `[style]` inalcanzables + 3 definiciones de `.section-tight`). Quedan mejoras de accesibilidad (contraste, unidades) sin abordar por ser cambios de diseño visual, fuera del alcance de las correcciones técnicas solicitadas. |
| **JavaScript** | ✅ Sin cambios desde la última revisión — sigue limpio, sin `eval`, sin `var`, sin riesgos de seguridad. El pipeline Vite sigue desconectado (deuda técnica, no un bug). |

---

## Hallazgos resueltos desde la auditoría anterior

| # | Hallazgo | Estado | Verificación |
|---|---|---|---|
| C1 | Canonical/og:url/BreadcrumbList con sufijo `.html` inexistente en 4 páginas | ✅ **Resuelto** | `grep -rn '\.html"' resources/views/` ya no encuentra canonical/og:url rotos (el único resultado restante es un link externo legítimo a Booking.com en el JSON-LD `sameAs` del home, que sí es una URL real) |
| C2 | No existía `sitemap.xml` | ✅ **Resuelto** | `public/sitemap.xml` generado vía `php artisan sitemap:generate` (comando nuevo `app/Console/Commands/GenerateSitemap.php`, paquete `spatie/laravel-sitemap` v7.3.4), 13 URLs con dominio absoluto correcto y `lastmod`. `robots.txt` ahora referencia `Sitemap: https://www.hotelfratelli.com.mx/sitemap.xml` |
| M3 | `fetchpriority` roto (typo + valor partido) + `loading="lazy"` contradictorio en imagen LCP del home | ✅ **Resuelto** | [home.blade.php:97-98](resources/views/frontend/home.blade.php:97): ahora `fetchpriority="high"` + `loading="eager"`, sintaxis válida |
| M4 | H1 duplicado en las 7 páginas de detalle de habitación | ✅ **Resuelto** | [_detail.blade.php:8](resources/views/habitaciones/_detail.blade.php:8) mantiene el único `<h1>`; el segundo se cambió a `<h2>` con estilos CSS extendidos para no alterar el diseño visual |
| M7 | 13 líneas de CSS con `!important` totalmente inalcanzables (selector `[style]` que ningún elemento tiene) | ✅ **Resuelto** | `grep -c "\[style\]" public/assets/style.css` → 0 ocurrencias |
| N7 | Clase `.section-tight` sin uso | ✅ **Resuelto** | Se encontraron y eliminaron 3 definiciones (base + 2 media queries), no solo 1 como se había estimado. Re-chequeo de las 139 clases restantes del CSS: **0 clases sin usar** |
| N4 | Archivo huérfano vacío `resources/views/frontend/home/home.blade.php` | ✅ **Resuelto** | Archivo y carpeta contenedora eliminados |
| N9 | Falta `FAQPage` Schema pese a tener contenido tipo Q&A | ✅ **Resuelto** | Agregado `FAQPage` JSON-LD en `hoteles-cerca-feria-san-marcos.blade.php` (2 preguntas) y `hoteles-economicos-aguascalientes.blade.php` (2 preguntas), extraído literalmente de los `<h2>` en formato pregunta. JSON validado sintácticamente |

---

## Hallazgos críticos pendientes

### C3. `favicon.ico` sigue pesando 0 bytes — requiere acción manual
[public/favicon.ico](public/favicon.ico) sigue siendo un archivo vacío (confirmado de nuevo: `ls -la` → 0 bytes, sin cambios desde la última revisión). Ya se agregó la etiqueta explícita en el layout:

```html
<!-- resources/views/layouts/app.blade.php:11 -->
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />
```

pero apunta a un archivo vacío, por lo que el ícono sigue sin mostrarse en pestañas del navegador ni marcadores.

**Acción requerida:** reemplazar manualmente `public/favicon.ico` por un archivo `.ico` real — esto no puede generarse automáticamente por herramientas de edición de código.

---

## Hallazgos medios (sin cambios desde la auditoría anterior)

### M1. `<title>` fuera del largo óptimo (50–60 caracteres)
Sigue sin modificarse (correcciones previas fueron solo técnicas, no de copy, por instrucción explícita). Estado actual:

| Página | Longitud |
|---|---|
| Home | 79 |
| Doble matrimonial | 90 |
| Doble | 89 |
| Hoteles económicos | 74 |
| Cuádruple | 78 |
| Sencilla / Triple | 74 |
| Habitaciones (índice) / Hoteles cerca feria | 72 |
| Máster Suite | 67 |
| Suite Jr | 62 |
| Contacto | 57 |
| Reservar | 52 ✅ dentro de rango |

### M2. Meta description fuera de rango (150–160 caracteres óptimo)
| Página | Longitud | Nota |
|---|---|---|
| Home | 183 | sobre el límite |
| Hoteles cerca feria | 165 | ligeramente sobre |
| Hoteles económicos | 157 | ✅ en rango |
| Contacto | 153 | ✅ en rango |
| Reservar | 145 | cerca del rango |
| Habitaciones (índice) | 162 | ligeramente sobre |
| Sencilla / Doble / Doble matrimonial / Suite Jr / Máster Suite / Triple | 96–117 | muy por debajo, desaprovecha espacio en SERP |
| Cuádruple | 123 | por debajo |

*(No se modifica: instrucción explícita del usuario de no tocar copy/meta descriptions en las rondas de corrección aplicadas.)*

### M5. Pipeline Vite/Node sigue desconectado del sitio real
Sin cambios: [layouts/app.blade.php](resources/views/layouts/app.blade.php:16) sigue enlazando `public/assets/style.css`/`script.js` directamente en vez de usar `@vite(...)`. `resources/css/app.css` (0 bytes) y `resources/js/bootstrap.js` (axios sin usar) siguen siendo código muerto. No se tocó porque no formaba parte de las correcciones solicitadas — sigue siendo deuda técnica documentada.

### M6. Contraste insuficiente del dorado sobre blanco
Sin cambios: `--gold: #C9973A` ([style.css:9](public/assets/style.css:9)) se sigue usando en `<em>` dentro de encabezados sobre fondos blancos ([style.css:243](public/assets/style.css:243) `.hero h1 em`, [style.css:317](public/assets/style.css:317) `h2 em`, [style.css:920-921](public/assets/style.css:920) `.room-info h1 em, .room-info h2 em`). Contraste ≈2.6:1, por debajo de WCAG AA (mínimo 3:1 para texto grande). No se corrigió porque implica un cambio de diseño visual, fuera del alcance de "solo problemas técnicos" de las correcciones aplicadas — **requiere decisión de negocio/diseño**, se recomienda usar `--gold-deep: #a87d2a` sobre fondos claros.

---

## Hallazgos menores (sin cambios)

### N2. `starRating: 2` sigue contradiciendo el posicionamiento de marca
[home.blade.php:33](resources/views/frontend/home.blade.php:33) sigue declarando `"starRating": "2"` en el JSON-LD `Hotel`, mientras el resto del sitio se posiciona como "boutique" con 3.8/5 en reseñas. No es un bug técnico — requiere confirmación del negocio sobre la clasificación real del hotel.

### N3. URLs de imágenes con mayúsculas y tildes
`public/images/Habitación17`, `Habitación22`, etc. siguen sin normalizar (mayúsculas + `ó` acentuada → URLs percent-encoded). Solo afecta assets de imagen, no rutas de página. Requeriría renombrar 148 archivos y actualizar todas las referencias — cambio de mayor esfuerzo, no incluido en esta ronda.

### N5. `og:image`/hero de `contacto.blade.php` sigue usando foto de stock de Unsplash
[contacto.blade.php:12,18,30](resources/views/frontend/contacto.blade.php:12) sigue enlazando `images.unsplash.com` en vez de una foto real del hotel — es contenido/copy visual, no un problema técnico de etiquetas, por lo que no se tocó en esta ronda de correcciones.

### N6. 3 usos activos de `!important` restantes (no son código muerto)
Tras eliminar los 8 `!important` muertos (bloque `[style]`), quedan 3 usos **funcionales** en overrides del menú móvil ([style.css:1115,1117,1125](public/assets/style.css:1115)) — no representan un problema, solo fricción de especificidad menor. No requieren acción urgente.

### N8. CSS sigue usando 100% `px`, 0 `rem`
489 ocurrencias de `px`, 0 de `rem` en `style.css` (bajó de 503 tras las eliminaciones de CSS muerto, proporción sin cambios). Implica que el sitio no escala si el usuario cambia el tamaño de fuente del navegador. Cambio de mayor esfuerzo (tocaría las 1315 líneas del archivo), no incluido en esta ronda.

---

## Verificación de las correcciones aplicadas (evidencia técnica)

- **`grep -c "\[style\]" public/assets/style.css` → `0`** (antes: 2 selectores, 13 líneas, 8 `!important` muertos)
- **139 clases CSS analizadas, 0 sin usar** (antes: 1 clase sin usar — resultó ser 3 definiciones de la misma clase)
- **`php -r 'json_decode(...)'` sobre los 2 nuevos bloques `FAQPage`** → ambos válidos en ambas páginas
- **`public/sitemap.xml`** → 13 `<loc>` con dominio `https://www.hotelfratelli.com.mx`, `<lastmod>` en formato ISO 8601
- **`resources/views/frontend/home/home.blade.php`** → ya no existe, carpeta contenedora eliminada
- **`resources/views/habitaciones/_detail.blade.php`** → 1 sola etiqueta `<h1>` (línea 8); antes había 2

---

## Tabla de prioridades (estado actualizado)

| Área | Problema | Estado | Impacto | Esfuerzo |
|---|---|---|---|---|
| SEO | Canonical/og:url/.html rotos en 4 páginas | ✅ Resuelto | — | — |
| SEO | No existía sitemap.xml | ✅ Resuelto | — | — |
| AEO/SEO | H1 duplicado en 7 páginas de habitación | ✅ Resuelto | — | — |
| SEO/Rendimiento | `fetchpriority` roto + lazy en imagen LCP | ✅ Resuelto | — | — |
| AEO | Falta FAQPage Schema | ✅ Resuelto | — | — |
| CSS | CSS inalcanzable con !important | ✅ Resuelto | — | — |
| Limpieza | Clase CSS sin uso / archivo huérfano | ✅ Resuelto | — | — |
| SEO | favicon.ico vacío (requiere reemplazo manual del binario) | ⏳ Pendiente (acción manual) | Medio | Bajo |
| SEO | Title fuera de rango en 9 de 13 páginas | ⏳ Pendiente | Medio | Bajo |
| SEO | Meta description fuera de rango en 8 de 13 páginas | ⏳ Pendiente | Medio | Bajo |
| Accesibilidad | Contraste dorado/blanco insuficiente (≈2.6:1) | ⏳ Pendiente | Medio | Bajo (decisión de diseño) |
| Mantenibilidad | Pipeline Vite desconectado, código muerto | ⏳ Pendiente | Bajo | Medio |
| Rendimiento | Imágenes sin WebP/AVIF (148 archivos, 15MB) | ⏳ Pendiente | Medio | Medio |
| Accesibilidad | 100% px, sin rem | ⏳ Pendiente | Bajo | Medio |
| SEO | Foto de stock no representativa en contacto | ⏳ Pendiente | Bajo | Bajo |
| Contenido | `starRating: 2` inconsistente con posicionamiento boutique | ⏳ Pendiente (decisión de negocio) | Bajo | Bajo |
| SEO | URLs de imágenes con mayúsculas/tildes | ⏳ Pendiente | Bajo | Medio |

---

## Fortalezas verificadas (actualizado)

- Las 13 rutas tienen `<title>` y `meta description` **únicos** (sin duplicados entre páginas).
- Canonical, og:url y BreadcrumbList JSON-LD ahora **coinciden exactamente** con las rutas reales de Laravel en las 13 páginas.
- `sitemap.xml` generado y referenciado desde `robots.txt`.
- H1 único por página en las 13 rutas (incluyendo las 7 de detalle de habitación, antes duplicado).
- `FAQPage` Schema presente en las 2 páginas con contenido tipo Q&A, además del `BreadcrumbList` ya existente.
- CSS sin código muerto: 0 selectores inalcanzables, 0 clases sin usar sobre 139 analizadas.
- JavaScript vanilla limpio: sin `var`, sin `eval`, sin `innerHTML` con datos no sanitizados, manejo defensivo de `sessionStorage` con `try/catch`.
- Todos los elementos interactivos del carrusel/menú son `<button>` nativos — accesibles por teclado sin código adicional.
- Todas las imágenes tienen atributo `alt` descriptivo.
- Imagen LCP del home ahora carga con `fetchpriority="high"` y `loading="eager"` correctamente formados.
