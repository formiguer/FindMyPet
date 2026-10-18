<?php
// Uso: php tools/render.php pagina.php [ficha]  -> HTML estático por stdout
require dirname(__FILE__) . '/shim.php';
chdir(dirname(dirname(__FILE__)));
$_GET = array();
$_REQUEST = array();
if (isset($argv[2])) { $_GET['ficha'] = $argv[2]; }

$banner = '<div style="background:#fff3cd;color:#664d03;text-align:center;padding:6px;font:13px sans-serif">'
    . 'Demo estática: los anuncios son ficticios y el buscador y el formulario no funcionan. '
    . '<a style="color:#0645ad" href="https://github.com/formiguer/findmypet">Código en GitHub</a></div>';

ob_start();
include $argv[1];
$html = ob_get_clean();
$html = preg_replace('/info\.php\?ficha=(\d+)/', 'info_$1.html', $html);
$html = preg_replace('/([A-Za-z0-9_\-]+)\.php(["\'#? ])/', '$1.html$2', $html);
$html = preg_replace('/<body([^>]*)>/i', '<body$1>' . $banner, $html, 1);
echo $html;
