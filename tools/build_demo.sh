#!/bin/bash
# Genera la demo estática en docs/ (GitHub Pages) a partir de las páginas PHP.
# Uso: bash tools/build_demo.sh
set -e
cd "$(dirname "$0")/.."
OUT=docs
rm -rf $OUT && mkdir -p $OUT
PAGES="index perros gatos otros ayuda p_perdidos p_encontrados p_adopcion g_perdidos g_encontrados g_adopcion o_perdidos o_encontrados o_adopcion protectora ayuntamiento guarderia guarderias veterinarios tienda_animal otros_negocios otros_colaboradores que_hacer nuestraweb politica contacto pag_buscar"
for p in $PAGES; do
  php -d short_open_tag=1 tools/render.php $p.php > $OUT/$p.html
done
for id in 1 2 3 4 5 6 7 8; do
  php -d short_open_tag=1 tools/render.php info.php $id > $OUT/info_$id.html
done
cp -r images styles.css select_dependientes.css includes/js $OUT/ 2>/dev/null || true
mkdir -p $OUT/includes && cp -r includes/js $OUT/includes/ && rm -rf $OUT/js
cp jquery-1.9.1.min.js select_dependientes.js $OUT/
touch $OUT/.nojekyll
echo "OK: $(ls $OUT/*.html | wc -l) páginas en $OUT/"
