<?php
// Simula la extensión mysql_* (eliminada en PHP 7) con SQLite en memoria,
// para generar la demo estática sin MySQL. Solo soporta consultas simples.
error_reporting(getenv("SHIMDEBUG") ? E_ALL : 0);ini_set("display_errors",1);
$GLOBALS['__pdo'] = new PDO('sqlite::memory:');
$root = dirname(dirname(__FILE__));

// Tablas con datos reales: se extraen los INSERT de mascotas.sql
$sql = file_get_contents($root . '/mascotas.sql');
preg_match_all('/INSERT INTO `(\w+)` \(([^)]*)\) VALUES\s*(.*?\));\s*\r?\n/s', $sql, $m, PREG_SET_ORDER);
foreach ($m as $ins) {
    $GLOBALS['__pdo']->exec('CREATE TABLE `' . $ins[1] . '` (' . $ins[2] . ')');
    $GLOBALS['__pdo']->exec($ins[0]);
}

// Anuncios de ejemplo (ficticios)
$demo = require dirname(__FILE__) . '/demo_data.php';
$cols = array_keys($demo['formulario'][0]);
$GLOBALS['__pdo']->exec('CREATE TABLE formulario (`' . implode('`,`', $cols) . '`)');
$st = $GLOBALS['__pdo']->prepare('INSERT INTO formulario VALUES (' . implode(',', array_fill(0, count($cols), '?')) . ')');
foreach ($demo['formulario'] as $r) { $st->execute(array_values($r)); }
$GLOBALS['__pdo']->exec('CREATE TABLE ayuda (id, nombre, mensaje, fecha)');

function mysql_connect() { return true; }
function mysql_select_db() { return true; }
function mysql_close() { return true; }
function mysql_error() { return ''; }
function mysql_real_escape_string($s) { return str_replace("'", "''", $s); }
function mysql_query($q) {
    if (stripos(ltrim($q), 'SET ') === 0) { return true; }
    try { $r = $GLOBALS['__pdo']->query($q); } catch (Exception $e) { return false; }
    return $r ? $r->fetchAll(PDO::FETCH_ASSOC) : false;
}
function mysql_fetch_assoc(&$rs) { return is_array($rs) ? array_shift($rs) : false; }
function mysql_fetch_array(&$rs) {
    $row = mysql_fetch_assoc($rs);
    return $row ? array_merge($row, array_values($row)) : false;
}
function mysql_fetch_row(&$rs) { $row = mysql_fetch_assoc($rs); return $row ? array_values($row) : false; }
function mysql_num_rows($rs) { return is_array($rs) ? count($rs) : 0; }
