# FindMyPet (Busco Mi Mascota)

Portal web en PHP para publicar y buscar mascotas **perdidas**, **encontradas** o **en adopción**
(perros, gatos y otras especies). Pensado para las Islas Baleares: incluye listados de
municipios, protectoras y veterinarios por isla.

> Proyecto antiguo (2013). Usa PHP 5 y la extensión `mysql_*`, eliminada en PHP 7.

## Funcionalidades
- Últimos avisos por especie (`perros.php`, `gatos.php`, `otros.php`) y listados completos por situación.
- Ficha de cada mascota y buscador (`pag_buscar.php`).
- Formulario para publicar un anuncio con foto (`contacto.php`).
- Directorio de protectoras, ayuntamientos, veterinarios y guarderías.
- Desplegables encadenados isla → municipio (`select_dependientes*`).
- Panel básico para editar/borrar anuncios (`edit/`).

## Demo estática
En `docs/` hay una versión estática (anuncios ficticios) para GitHub Pages; el buscador y el formulario no funcionan.
Se regenera con `bash tools/build_demo.sh` (necesita PHP 8 CLI).

## Estructura
| Ruta | Contenido |
|---|---|
| `*.php` (raíz) | Páginas públicas |
| `includes/` | Cabecera, menús, barras laterales, pie |
| `formulario/` | Listados parciales/totales de anuncios y formularios por isla |
| `conexion/` | Configuración de BD (`config.php`, `bd.php`) y scripts SQL |
| `edit/` | Panel de edición de anuncios |
| `ficheros/` | Fotos subidas (no versionadas) |
| `mascotas.sql` | Esquema y datos de poblaciones, protectoras y veterinarios |

## Ejecutar en local
Requiere Docker.

```bash
docker compose up --build
```

Abre <http://localhost:8080>. MySQL importa `mascotas.sql` la primera vez.

Sin Docker: PHP 5.x con Apache, MySQL, importa `mascotas.sql` y define las variables de
entorno `DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_DATABASE` (ver `.env.example`).

## Base de datos
Tablas: `formulario` (anuncios), `poblacion`, `protectoras`, `veterinarios`.

## Problemas conocidos
- `mysql_*` obsoleto: migrar a PDO/mysqli para usar PHP 8.
- Consultas SQL construidas con datos del usuario (inyección SQL).
- `edit/` no tiene autenticación.
- Usa etiquetas cortas `<?` (necesitan `short_open_tag=On`).
- Teléfono guardado como `int`, lo que no admite prefijos.
