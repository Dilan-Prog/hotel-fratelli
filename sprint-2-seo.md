# Sprint 2 de SEO — Hotel Fratelli Aguascalientes

Pendientes identificados en el gap analysis de `/hoteles-en-aguascalientes` vs
`/hoteles-centro` (ver conversación del [fecha de esta auditoría]). No se aplicó nada de
esto todavía — es la lista de trabajo para cuando se retome el Sprint 2.

Contexto: en el código ya existen 2 comentarios `TODO Sprint 2 SEO` marcando los enlaces
rotos a propósito — están en [home.blade.php:450](resources/views/frontend/home.blade.php:450)
y [home.blade.php:846](resources/views/frontend/home.blade.php:846) (verifica el número de
línea real al momento de ejecutar, puede haber cambiado). Este archivo es el resto del
trabajo que acompaña a esos dos TODOs.

---

## Top 5 quick wins (esta semana)

1. Agregar schema `Hotel` a `/hoteles-centro` — copiar el bloque ya validado del home,
   cambiar solo `url`. Sin esto, esta página no tiene ninguna oportunidad de rich snippet.
2. Optimizar la imagen hero de `/hoteles-centro` — aplicar el mismo patrón
   `<picture>`+WebP+`width`/`height`+`fetchpriority` que el home ya tiene resuelto.
3. Reparar el enlace roto home → `/hoteles-centro` — está documentado como Sprint 2, pero
   técnicamente es un quick win real de <5 minutos si deciden adelantarlo.
4. Convertir los 2-3 H2 tipo pregunta de `/hoteles-centro` en FAQPage schema — el copy ya
   existe, solo falta estructurarlo (mismo patrón ya usado 8 veces en el home).
5. Diferenciar el H2 "uno de los hoteles en Aguascalientes mejor ubicados" en
   `/hoteles-centro` por una variante más específica de "centro" para reducir la
   superposición de keyword con el home.

## Top 3 mejoras de mayor esfuerzo / mayor impacto

1. Ampliar el contenido de `/hoteles-centro` de 373 a un rango más competitivo (el home
   tiene 1,589) — agregar profundidad real sobre el Centro Histórico que el home NO
   cubre, para que ambas páginas se complementen en vez de solaparse.
2. Agregar reseñas propias o segmentadas a `/hoteles-centro` (aunque sean las mismas del
   home, presentadas con un ángulo de "huéspedes que vinieron a conocer el centro") —
   necesita decidir si reutilizar contenido o generar reseñas nuevas verificables.
3. Construir enlazado interno real entre las 3 páginas SEO del "Sprint 2"
   (`/hoteles-centro`, `/hoteles-cerca-feria-san-marcos`, `/hoteles-economicos-aguascalientes`)
   — hoy solo se conocen entre sí de forma parcial; un cluster de enlazado cruzado con
   anchor text descriptivo repartiría mejor la autoridad del home hacia estas páginas.

---

## Prompt a ejecutar cuando llegue el Sprint 2

```
Vamos a ejecutar el Sprint 2 de SEO documentado en sprint-2-seo.md. Lee ese archivo
completo primero, y también los 2 comentarios "TODO Sprint 2 SEO" que ya existen en
resources/views/frontend/home.blade.php (búscalos con grep) — son parte del mismo trabajo.

Antes de tocar nada, verifica el estado actual de cada punto (puede que algo ya haya
cambiado desde que se escribió este archivo):
- ¿Sigue sin existir schema Hotel en /hoteles-centro?
- ¿Sigue la imagen hero de /hoteles-centro sin optimizar (sin webp/width/height/fetchpriority)?
- ¿Siguen rotos los 2 enlaces marcados con TODO?
- ¿Sigue /hoteles-centro con ~373 palabras?

Ejecuta en este orden, verificando cada uno antes de pasar al siguiente (no reportes
"listo" solo porque el comando no dio error — confirma con grep/lectura del resultado):

1. Repara los 2 enlaces rotos marcados "TODO Sprint 2 SEO" en home.blade.php — deben
   apuntar a route('hoteles.centro') y route('hoteles.economicos') respectivamente.
   Quita también el comentario TODO una vez reparado.

2. Agrega el bloque JSON-LD `Hotel` a hoteles-centro.blade.php — copia el bloque completo
   que ya existe y está validado en home.blade.php, cambia únicamente el campo "url" a
   la URL real de /hoteles-centro. No dupliques el `BreadcrumbList` que ya tiene.

3. Optimiza la imagen hero de hoteles-centro.blade.php: aplica el mismo patrón
   <picture>+<source type="image/webp">+width/height+fetchpriority="high"+loading="eager"
   que ya está resuelto en el hero de home.blade.php. Genera las variantes WebP
   necesarias si no existen (usa el mismo método que ya se usó antes en este proyecto:
   PHP GD si no hay ImageMagick/cwebp disponible).

4. Convierte los H2 tipo pregunta de hoteles-centro.blade.php en FAQPage JSON-LD,
   siguiendo exactamente el mismo patrón ya usado en home.blade.php (extrae pregunta +
   respuesta literal del contenido existente, no inventes texto nuevo). Valida el JSON
   con json_decode antes de darlo por bueno.

5. Reescribe el H2 "uno de los hoteles en Aguascalientes mejor ubicados" en
   hoteles-centro.blade.php con una variante que incluya "centro" explícitamente, para
   reducir la superposición de keyword con el home — muéstrame la propuesta antes de
   aplicarla.

6. Amplía el contenido de hoteles-centro.blade.php con profundidad real sobre el Centro
   Histórico que el home NO cubre (evita repetir la misma lista de 5 lugares en el mismo
   orden que ya usa el home — verifica esto con grep contra el texto actual del home
   antes de escribir, para no volver a crear el solapamiento que motivó este Sprint 2).

7. Decide y aplica: reseñas para hoteles-centro (reutilizar 2-3 del home con contexto de
   "centro", o dejar pendiente si prefieres reseñas nuevas verificables — pregúntame si
   no está claro).

8. Construye enlazado cruzado entre /hoteles-centro, /hoteles-cerca-feria-san-marcos y
   /hoteles-economicos-aguascalientes — cada una debe enlazar a las otras 2 con anchor
   text descriptivo (no "clic aquí"), en un lugar natural del contenido.

Al terminar, dame un resumen de qué se aplicó, verificado con evidencia real (grep,
conteo de palabras antes/después, json_decode sin error) — no solo "se hizo".

No hagas commit ni push sin que yo lo confirme.
```
