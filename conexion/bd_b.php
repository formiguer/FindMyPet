<?php
require_once(dirname(__FILE__) . "/config.php");

function conectar()
{
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	mysql_select_db(DB_DATABASE);
}

function desconectar()
{
	mysql_close();
}
?>
