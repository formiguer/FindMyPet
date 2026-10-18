<?php
require_once(dirname(__FILE__) . "/config.php");

$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
$db = mysql_select_db(DB_DATABASE);
mysql_query("SET NAMES 'utf8'");
?>
