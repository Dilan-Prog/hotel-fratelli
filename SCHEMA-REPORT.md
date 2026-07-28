# Schema Markup Report — Hotel Fratelli Aguascalientes

Auditoría de solo lectura. Formato: JSON-LD detectado en 12 de 13 páginas del sitio
(la página 13, el layout compartido, no lleva schema propio, es correcto). **Cero
Microdata y cero RDFa** en todo el proyecto — 100% JSON-LD, que es el formato que
Google recomienda como preferido.

## Validation Results

| Página | Schema(s) | Estado | Issues |
|---|---|---|---|
| `/hoteles-en-aguascalientes` (home) | `Hotel`, `BreadcrumbList`, `FAQPage` (8 preguntas) | ✅ Válido | Ninguno de sintaxis. `starRating` omitido a propósito (sin dato oficial verificado) — correcto, no es un issue. `FAQPage` sin beneficio de rich result desde mayo 2026 (ver nota abajo) — mantener, no remover. |
| `/hoteles-centro` | `BreadcrumbList` | ✅ Válido pero incompleto | **Falta `Hotel`/`LodgingBusiness` y `FAQPage`** — ya documentado en `sprint-2-seo.md` |
| `/hoteles-cerca-feria-san-marcos` | `BreadcrumbList`, `FAQPage` (2 preguntas) | ✅ Válido pero incompleto | **Falta `Hotel`/`LodgingBusiness`** — esta página no tiene ninguna entidad de negocio marcada, solo el breadcrumb y las preguntas |
| `/hoteles-economicos-aguascalientes` | `BreadcrumbList`, `FAQPage` (2 preguntas) | ✅ Válido pero incompleto | **Falta `Hotel`/`LodgingBusiness`** — mismo gap que la anterior |
| `/contacto` | `BreadcrumbList` | ✅ Válido pero incompleto | Falta `ContactPage` o `Organization.contactPoint` — es literalmente la página de contacto y no lo declara |
| `/habitaciones` (índice) | `BreadcrumbList` | ✅ Válido pero incompleto | Sin `ItemList`/`Product` para el catálogo de 7 habitaciones con precio visible |
| `/habitaciones/sencilla` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Sin `Product`/`Offer` pese a mostrar precio exacto ($714.00 MXN) |
| `/habitaciones/doble` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Mismo gap — precio $952.00 sin `Offer` |
| `/habitaciones/doble-matrimonial` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Mismo gap — precio $833.00 sin `Offer` |
| `/habitaciones/suite-jr` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Mismo gap — precio $892.50 sin `Offer` |
| `/habitaciones/master-suite` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Mismo gap — precio $952.00 sin `Offer` |
| `/habitaciones/triple` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Mismo gap |
| `/habitaciones/cuadruple` | `BreadcrumbList` (3 niveles) | ✅ Válido pero incompleto | Mismo gap |

**Verificaciones que pasaron limpio en las 12 páginas:** sintaxis JSON válida (`json_decode`
sin error en ninguna), URLs siempre absolutas y apuntando al dominio/rutas reales
(`https://hotelfratelli.com.mx/...`, verificado contra `routes/web.php`), cero texto
placeholder (`[XXX]`, `TODO`, etc.) dentro de JSON-LD, cero tipos de schema deprecados
(nada de `HowTo`, `SpecialAnnouncement`, etc.), cero fechas mal formateadas (no hay
`datePublished`/`dateModified` en ningún lado porque no aplica — no hay contenido tipo
Article/BlogPosting en el sitio).

## ⚠️ Nota importante: FAQPage ya no da rich results

Google retiró los rich results de FAQ para **todos los sitios** el 7 de mayo de 2026
(esto reemplaza la restricción de agosto 2023 que solo aplicaba a gobierno/salud). Las
12 preguntas ya implementadas en el sitio (8 en home, 2+2 en las páginas SEO locales)
**siguen siendo válidas y útiles para motores de respuesta tipo IA** (ChatGPT, Perplexity,
AI Overviews) que sí leen `FAQPage` para extraer respuestas, pero ya no generan el
acordeón expandible en el SERP de Google. No se recomienda quitarlas — solo hay que dejar
de esperar ese beneficio específico de rich snippet en Google.

## Recomendaciones

### 1. Faltan gap opportunities — schema `Hotel`/`LodgingBusiness` en 3 páginas
`/hoteles-centro`, `/hoteles-cerca-feria-san-marcos` y `/hoteles-economicos-aguascalientes`
son páginas de aterrizaje que hablan del mismo hotel pero **no declaran la entidad
`Hotel` en su propio schema** — solo el `BreadcrumbList`. Esto ya está parcialmente
capturado en `sprint-2-seo.md` para `/hoteles-centro`; aquí se confirma que las otras 2
páginas hermanas tienen el mismo gap. Plantilla lista en `generated-schema.json`.

### 2. Oportunidad no explotada: `Product` + `Offer` en las 7 páginas de habitación
Cada página de habitación muestra un precio exacto en MXN pero no lo declara en schema.
`Product`/`Offer` están en la lista ACTIVA de tipos que Google sigue soportando — es una
oportunidad real de aparecer con precio visible en resultados enriquecidos. Plantilla
lista en `generated-schema.json` (aplica el mismo patrón a las 7 páginas, cambiando
nombre/precio/URL).

### 3. Oportunidad menor: `ContactPage` en `/contacto`
Bajo impacto pero gratis de implementar — declarar el tipo correcto de página.

### 4. Nada que corregir de sintaxis
No hay errores de JSON, tipos deprecados, ni URLs relativas que arreglar — el trabajo
aquí es 100% de **cobertura** (páginas sin el schema que deberían tener), no de
**corrección** (nada roto).

---

*Auditoría de solo lectura — no se modificó ningún archivo del proyecto. Las plantillas
generadas en `generated-schema.json` son sugerencias listas para pegar cuando decidan
implementarlas.*
