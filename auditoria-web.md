# Auditoría Técnica — Hotel Fratelli Aguascalientes

**Stack:** Laravel 10/11 + Blade + CSS/JS vanilla (sin build activo de Vite en producción)
**Fecha de auditoría:** 2026-07-07
**Alcance:** 13 rutas públicas (`routes/web.php`), `resources/views/**`, `public/assets/style.css`, `public/assets/script.js`, `public/robots.txt`, `public/favicon.ico`

---

## Resumen ejecutivo

| Área | Estado general |
|---|---|
| **SEO** | ⚠️ Medio-Bajo. Metadatos (title/description/OG/JSON-LD) están bien implementados por página, pero hay un **bug crítico de canonical URLs** que no coinciden con las rutas reales, **no existe `sitemap.xml`**, y el favicon está **vacío (0 bytes)**. |
| **AEO** | ⚠️ Medio. Buen contenido en prosa tipo Q&A y jerarquía de encabezados en páginas SEO, pero falta `FAQPage` Schema y hay **H1 duplicado** en las 7 páginas de detalle de habitación. |
| **CSS** | ✅ Bueno. Poco CSS muerto (1 clase sin usar de 140), buen uso de variables CSS. Debilidades: 100% `px` (sin `rem`), 13 líneas de CSS totalmente inalcanzable con `!important`, contraste de color insuficiente en el dorado sobre blanco. |
| **JavaScript** | ✅ Bueno. Vanilla JS limpio, sin `eval`, sin `var`, sin dependencias externas riesgosas. Debilidad: el pipeline de Vite (`resources/js`, `resources/css/app.css`) está **completamente desconectado** del sitio real — código muerto. |

---

## Hallazgos críticos

### C1. Canonical / og:url / BreadcrumbList apuntan a URLs `.html` que no existen
Las rutas reales en [routes/web.php](routes/web.php:19) son limpias (`/contacto`, `/reservar`, etc., sin extensión), pero 4 plantillas declaran su propia canonical con sufijo `.html`, que **nunca ha sido una URL real del sitio**:

| Archivo | Ruta real | Canonical declarado |
|---|---|---|
| [frontend/contacto.blade.php:7](resources/views/frontend/contacto.blade.php:7) | `/contacto` | `.../contacto.html` |
| [frontend/reservar.blade.php:7](resources/views/frontend/reservar.blade.php:7) | `/reservar` | `.../reservar.html` |
| [frontend/hoteles-cerca-feria-san-marcos.blade.php:7](resources/views/frontend/hoteles-cerca-feria-san-marcos.blade.php:7) | `/hoteles-cerca-feria-san-marcos` | `.../hoteles-cerca-feria-san-marcos.html` |
| [frontend/hoteles-economicos-aguascalientes.blade.php:7](resources/views/frontend/hoteles-economicos-aguascalientes.blade.php:7) | `/hoteles-economicos-aguascalientes` | `.../hoteles-economicos-aguascalientes.html` |

El mismo error se repite en `og:url` (misma línea +4/+5) y en el `item` del JSON-LD `BreadcrumbList` de cada una de esas 4 páginas (p. ej. [contacto.blade.php:23](resources/views/frontend/contacto.blade.php:23)).

**Impacto:** Google puede indexar una URL canonical que devuelve 404, provocar señales de contenido duplicado/no indexable, y diluir el "link equity" que reciben esas 4 páginas. Las páginas de `habitaciones/*` **no tienen este problema** (sus canonical sí coinciden con la ruta real).

**Fix:** quitar el sufijo `.html` de los 4 archivos, en `canonical`, `og:url` y el `item` del BreadcrumbList.

```html
<!-- Antes -->
<link rel="canonical" href="https://www.hotelfratelli.com.mx/contacto.html" />
<meta property="og:url" content="https://www.hotelfratelli.com.mx/contacto.html" />

<!-- Después -->
<link rel="canonical" href="https://www.hotelfratelli.com.mx/contacto" />
<meta property="og:url" content="https://www.hotelfratelli.com.mx/contacto" />
```

---

### C2. No existe `sitemap.xml`
No hay ningún archivo `sitemap.xml` en `public/` ni generado dinámicamente. [public/robots.txt](public/robots.txt:1) tampoco referencia ninguno:

```
User-agent: *
Disallow:
```

**Impacto:** Los motores de búsqueda dependen únicamente del rastreo por enlaces internos para descubrir las 13 páginas; no hay una lista explícita de URLs canónicas ni `lastmod`/`priority`. Esto es más relevante aún dado el bug C1 (URLs canonical rotas).

**Fix recomendado:** generar `public/sitemap.xml` (estático, ya que las rutas son fijas) y añadir en `robots.txt`:
```
Sitemap: https://www.hotelfratelli.com.mx/sitemap.xml
```

---

### C3. `favicon.ico` existe pero pesa 0 bytes
[public/favicon.ico](public/favicon.ico) está presente en el repo pero es un **archivo vacío** (0 bytes, confirmado con `ls -la`). Además no hay ningún `<link rel="icon">` explícito en [layouts/app.blade.php](resources/views/layouts/app.blade.php:1) — el sitio depende 100% del auto-descubrimiento de `/favicon.ico`, que está roto.

**Impacto:** el sitio no muestra icono en pestañas del navegador, marcadores ni resultados de búsqueda/Discover.

**Fix:** reemplazar `public/favicon.ico` por un ícono real y agregar explícitamente:
```html
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any" />
```

---

## Hallazgos medios

### M1. `<title>` fuera del largo óptimo (50–60 caracteres) en varias páginas
| Página | Longitud | Título |
|---|---|---|
| Home ([home.blade.php:3](resources/views/frontend/home.blade.php:3)) | **79** | "Hotel Fratelli Aguascalientes \| Confort, Calidad y Descanso desde $714.00/noche" |
| Doble matrimonial | **90** | "Habitación Doble (cama matrimonial) \| Hotel Fratelli Aguascalientes — $833.00 MXN/noche" |
| Doble | **89** | "Habitación Doble (camas separadas) \| Hotel Fratelli Aguascalientes — $952.00 MXN/noche" |
| Hoteles económicos | 74 | ligeramente largo |
| Sencilla / Cuádruple / Triple | 74–78 | ligeramente largo |

Solo `reservar.blade.php` (52) y `suite-jr.blade.php` (62) están cerca del rango óptimo. Google trunca títulos ~por encima de 60 caracteres en SERP de escritorio.

### M2. Meta description fuera de rango en varias páginas
- Home ([home.blade.php:6](resources/views/frontend/home.blade.php:6)): **183 caracteres** (óptimo 150–160) → se cortará en el snippet.
- `hoteles-cerca-feria-san-marcos.blade.php:6`: 165 caracteres, ligeramente sobre el límite.
- Varias páginas de habitación individuales (`master-suite`: 102, `triple`: 96) están **muy por debajo** de 150, desaprovechando espacio para persuadir al usuario en el SERP.

### M3. `fetchpriority` roto en la imagen LCP del home
En [frontend/home.blade.php:94-100](resources/views/frontend/home.blade.php:94):

```html
<img src="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}"
alt="Habitación con cama king y acabados elegantes, Hotel Fratelli Aguascalientes"
title="Habitación con cama king y acabados elegantes, Hotel Fratelli Aguascalientes"
loading="lazy"
fechtpriority="h
igh"
/>
```

Dos problemas simultáneos:
1. El atributo está **mal escrito** (`fechtpriority` en vez de `fetchpriority`) y su valor está **partido en dos líneas** (`"h` … `igh"`), por lo que el navegador nunca lo reconoce.
2. Aunque se corrigiera la ortografía, **combinar `loading="lazy"` con `fetchpriority="high"` en la imagen de fondo del hero es contradictorio**: esta es la imagen que normalmente determina el LCP (Largest Contentful Paint) de la página de inicio, y cargarla en modo `lazy` retrasa su renderizado, empeorando el LCP real.

**Fix:**
```html
<img src="{{ asset('images/Habitación22/Habitacion22-25.jpg') }}"
     alt="Habitación con cama king y acabados elegantes, Hotel Fratelli Aguascalientes"
     fetchpriority="high"
     loading="eager" />
```

### M4. H1 duplicado en las 7 páginas de detalle de habitación
El partial [habitaciones/_detail.blade.php](resources/views/habitaciones/_detail.blade.php:8) genera **dos etiquetas `<h1>`** en la misma página: una en el `<header class="hero">` (línea 8) y otra en `.room-info` (línea 31), ambas con el mismo contenido `Habitación {{ $roomNameHtml }}`. Esto afecta a las 7 rutas (`sencilla`, `doble`, `doble-matrimonial`, `suite-jr`, `master-suite`, `triple`, `cuadruple`), ya que todas incluyen este mismo partial.

**Impacto:** rompe la jerarquía semántica H1→H2→H3 recomendada tanto para SEO tradicional como para motores de respuesta (AEO), que usan el H1 único para identificar la entidad principal de la página.

**Fix:** cambiar el segundo `<h1>` (línea 31) a `<h2>` (visualmente puede mantenerse igual vía CSS).

### M5. Vite/Node completamente desconectado del sitio real (código muerto)
El proyecto tiene `vite.config.js`, `resources/css/app.css` (0 bytes) y `resources/js/app.js`/`bootstrap.js` configurados como pipeline de assets Laravel estándar, pero [layouts/app.blade.php:16,28](resources/views/layouts/app.blade.php:16) **no usa `@vite(...)`** — enlaza directamente `public/assets/style.css` y `public/assets/script.js` a mano:

```html
<link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
...
<script src="{{ asset('assets/script.js') }}" defer></script>
```

Esto significa que `npm run build`/`npm run dev` no tienen ningún efecto sobre lo que ven los usuarios, `resources/js/bootstrap.js` (axios, Echo/Pusher comentado) nunca se ejecuta, y la dependencia `axios` en `package.json` está instalada sin usarse.

**Impacto:** no es un bug visible, pero es deuda técnica que confundirá a cualquier desarrollador futuro que edite `resources/css/app.css` esperando ver cambios.

### M6. Contraste insuficiente del color dorado sobre fondo blanco
La variable `--gold: #C9973A` ([style.css:9](public/assets/style.css:9)) se usa en `<em>` dentro de títulos H1/H2 sobre fondos blancos — p. ej. [style.css:243](public/assets/style.css:243) `.hero h1 em`, [style.css:318](public/assets/style.css:318) `h2 em`, [style.css:920](public/assets/style.css:920) `.room-info h1 em`. El contraste calculado de `#C9973A` sobre `#FFFFFF` es **≈2.6:1**, por debajo del mínimo WCAG AA de **3:1 para texto grande** (y muy por debajo de 4.5:1 para texto normal).

**Impacto:** el texto en dorado dentro de encabezados sobre secciones claras (ej. "Aguascalientes" en `<h2>` de `hoteles-economicos-aguascalientes.blade.php:47`) es difícil de leer para usuarios con baja visión.

**Fix:** usar `--gold-deep: #a87d2a` (ya definido en el archivo, [style.css:11](public/assets/style.css:11)) para texto sobre fondo blanco, reservando `--gold` para fondos oscuros donde sí cumple contraste.

### M7. CSS totalmente inalcanzable (dead code) protegido con `!important`
[style.css:1210-1217](public/assets/style.css:1210) y su equivalente en el breakpoint de 430px ([style.css:1308-1313](public/assets/style.css:1308)) definen reglas para el selector `.room-detail[style]` y `.room-detail .breadcrumbs[style]`:

```css
.room-detail[style] { padding-top: 100px !important; }
.room-detail .breadcrumbs[style] {
  margin-left: -18px !important;
  margin-right: -18px !important;
  margin-top: -18px !important;
  padding-left: 18px !important;
  padding-right: 18px !important;
}
```

Se verificó contra todo `resources/views`: **ningún** elemento con `class="room-detail"` (definido solo en [_detail.blade.php:19](resources/views/habitaciones/_detail.blade.php:19)) ni `class="breadcrumbs"` tiene nunca un atributo `style=""` en el HTML actual. El selector de atributo `[style]` nunca puede coincidir → **13 líneas de CSS 100% muertas**, con 8 declaraciones `!important` que nunca se ejecutan.

**Fix:** eliminar ambos bloques, o si la intención original era otro selector, corregirlo (probablemente se quiso decir `.room-detail`/`.breadcrumbs` a secas, sin `[style]`).

---

## Hallazgos menores

### N1. Meta description del homepage genérica frente al resto — no crítico pero revisar
El resto es consistente: cada página tiene `<title>` y `description` únicos (verificado en las 13 rutas), buenos Open Graph/Twitter Cards completos, y JSON-LD (`Hotel`, `LodgingBusiness`, `BreadcrumbList`) en la mayoría de páginas. Esto es una fortaleza, no un defecto — se documenta para contexto.

### N2. `starRating: 2` contradice el posicionamiento de marca
En el JSON-LD `Hotel` del home ([home.blade.php:33](resources/views/frontend/home.blade.php:33)): `"starRating": { "@type": "Rating", "ratingValue": "2" }`, mientras el resto del contenido se posiciona como "hotel boutique" con `aggregateRating` de 3.8/5 ([home.blade.php:84](resources/views/frontend/home.blade.php:84)) y 277 reseñas. No es un error técnico, pero es una señal de marca inconsistente que vale la pena confirmar con el negocio.

### N3. URLs de imágenes con mayúsculas y tildes
Las carpetas en `public/images/` (`Habitación17`, `Habitación22`, etc.) usan mayúsculas y el carácter acentuado `ó`, lo que genera URLs de imagen percent-encoded (ej. `/images/Habitaci%C3%B3n22/...`). Las URLs de **páginas** (rutas de Laravel) sí son limpias/en minúsculas — este hallazgo aplica solo a rutas de assets de imagen.

### N4. Archivo huérfano vacío
[resources/views/frontend/home/home.blade.php](resources/views/frontend/home/home.blade.php) existe, pesa 0 bytes y no es referenciado por ninguna ruta (la ruta `home` usa `resources/views/frontend/home.blade.php`, un nivel arriba). Es un remanente de una reestructuración de carpetas; se recomienda eliminarlo para evitar confusión.

### N5. `og:image` de `contacto.blade.php` usa una foto de stock de Unsplash, no una foto real del hotel
[frontend/contacto.blade.php:12](resources/views/frontend/contacto.blade.php:12) y el hero de la misma página ([línea 30](resources/views/frontend/contacto.blade.php:30)) usan `https://images.unsplash.com/photo-1566073771259-...` (un baño genérico) en vez de una imagen real del hotel — mientras que todas las demás páginas usan fotos reales de `public/images/`. Esto crea una dependencia externa innecesaria (latencia + falla si Unsplash cambia la URL) y una imagen no representativa de la marca al compartir el link en redes sociales.

### N6. `!important` disperso (14 ocurrencias totales)
Además de las 8 muertas (ver M7), hay 6 usos activos en overrides de menú móvil ([style.css:1115,1117,1125](public/assets/style.css:1115)) — funcionales pero indican fricción de especificidad que podría resolverse reordenando selectores.

### N7. Una clase CSS sin uso
`.section-tight` (definida en el archivo, buscar con `grep -n "section-tight" public/assets/style.css`) no aparece en ningún archivo `.blade.php`. Es la única clase de las 140 detectadas en el CSS que no se usa — el archivo está, en general, muy bien mantenido.

### N8. Sin `rem`/`em`, 100% `px`
Las 1330 líneas de `style.css` usan exclusivamente `px` (503 ocurrencias) para tamaños de fuente y espaciados; 0 usos de `rem`/`em`. Esto significa que si un usuario cambia el tamaño de fuente por defecto del navegador (accesibilidad), el sitio no escala proporcionalmente.

### N9. Sin `FAQPage`/`HowTo` Schema pese a tener contenido tipo Q&A
`hoteles-cerca-feria-san-marcos.blade.php` y `hoteles-economicos-aguascalientes.blade.php` tienen contenido en formato pregunta-respuesta muy claro (`<h2>¿Qué es la Feria Nacional de San Marcos?</h2>`, `<h2>¿Por qué somos económicos sin perder calidad?</h2>`, etc.) pero **no está marcado como `FAQPage`** en JSON-LD — solo tienen `BreadcrumbList`. Es contenido ideal para "People Also Ask" / respuestas de IA generativa, pero sin el schema no se aprovecha al máximo.

---

## Tabla de prioridades

| Área | Problema | Impacto | Esfuerzo |
|---|---|---|---|
| SEO | Canonical/og:url/.html rotos en 4 páginas (C1) | Alto | Bajo |
| SEO | No existe sitemap.xml (C2) | Alto | Bajo |
| SEO | favicon.ico vacío (C3) | Medio | Bajo |
| SEO | Title fuera de rango (M1) | Medio | Bajo |
| SEO | Meta description fuera de rango (M2) | Medio | Bajo |
| SEO/Rendimiento | `fetchpriority` roto + lazy en imagen LCP (M3) | Medio | Bajo |
| AEO/SEO | H1 duplicado en 7 páginas de habitación (M4) | Medio | Bajo |
| Mantenibilidad | Pipeline Vite desconectado, código muerto (M5) | Bajo | Medio |
| Accesibilidad | Contraste dorado/blanco insuficiente (M6) | Medio | Bajo |
| CSS | 13 líneas de CSS inalcanzable con !important (M7) | Bajo | Bajo |
| AEO | Falta FAQPage Schema (N9) | Medio | Medio |
| SEO | Foto de stock no representativa en contacto (N5) | Bajo | Bajo |
| Rendimiento | Imágenes sin WebP/AVIF (148 archivos, 15MB, varias >100KB) | Medio | Medio |
| Accesibilidad | 100% px, sin rem (N8) | Bajo | Medio |
| Limpieza | Archivo huérfano vacío (N4) | Bajo | Bajo |
| Limpieza | Clase CSS sin uso `.section-tight` (N7) | Bajo | Bajo |

---

## Notas sobre rendimiento e imágenes (contexto adicional)

- `public/images/` pesa **15 MB en 148 archivos JPG**, sin ninguna versión WebP/AVIF. Varios archivos superan 100–285 KB individualmente (ej. `Hotel-frontal/hotel-fratelli-noche.jpg` = 285 KB, usado en `home.blade.php:132` sin `loading="lazy"` explícito más allá del que ya tiene).
- Buen uso general de `loading="lazy"` en imágenes fuera del viewport inicial (galerías, tarjetas de habitación).
- El único `<script>` del sitio ([layouts/app.blade.php:28](resources/views/layouts/app.blade.php:28)) ya usa `defer` correctamente.
- El CSS (`style.css`, 38 KB) se carga en `<head>` de forma bloqueante sin fallback — normal para un sitio de este tamaño, pero candidato a "critical CSS inline" si se busca optimizar más el LCP.
- La hoja de Google Fonts ([layouts/app.blade.php:15](resources/views/layouts/app.blade.php:15)) ya usa `display=swap` y `preconnect` — buena práctica ya implementada.

---

## Fortalezas verificadas (para contexto, no requieren acción)

- Las 13 rutas tienen `<title>` y `meta description` **únicos** (sin duplicados entre páginas).
- Open Graph y Twitter Cards completos en todas las páginas.
- JSON-LD válido (`Hotel`, `LodgingBusiness`, `BreadcrumbList`) presente en todas las páginas.
- `robots` meta configurado correctamente (`index, follow`) de forma centralizada en el layout.
- CSS muy bien mantenido: solo 1 de 140 clases sin usar.
- JavaScript vanilla limpio: sin `var`, sin `eval`, sin `innerHTML` con datos no sanitizados, manejo defensivo de `sessionStorage` con `try/catch`.
- Todos los elementos interactivos del carrusel/menú son `<button>` nativos — accesibles por teclado sin código adicional.
- Todas las imágenes tienen atributo `alt` descriptivo.
