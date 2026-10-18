
<?php
require_once("conexion/bd.php");
?>
<html>
<div id="fb-root"></div>
<body><center>
<table width="100%" border="1" cellpadding="2"  >
<style>
table
{
border:1px black;
}
th
{
background-color:#DAA520;
color:white;
}
.celda{
height: auto;
width: 50px;
}
</style>


<tr>
<th></th>
<th>FECHA</th>
<th>CONTACTO</th>
<th>TELEFONO</th>
<th>EMAIL</th>
<th>MUNICIPIO</th>
</tr>
<?php
$id= strtoupper($_GET['ficha']);
$result = mysql_query("SELECT * FROM ayuda where id='$id'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

$row = mysql_fetch_assoc($result);
if (!$row)
        die("No se encontró jugador");
{
	echo "<tr>
		  <td><center>{$row['id']}</td>
	      <td bgcolor='#F5D8A2'><center>{$row['fecha']}</td>
	      <td><center>{$row['n_contacto']}</td>
		  <td><center>{$row['telefono']}</td>
		  <td><center>{$row['email']}</td>
		  <td><center>{$row['municipio']}</td>


";
}
?>

</table></center>
<center>
<table border="1" cellpadding="2"  >
<style>
table
{
border:1px black;
}
th
{
background-color:#DAA520;
color:white;
}
.ajustar{
width: 420px;
float: left;
white-space: pre; /* CSS 2.0 */
white-space: pre-wrap; /* CSS 2.1 */
white-space: pre-line; /* CSS 3.0 */
white-space: -pre-wrap; /* Opera 4-6 */
white-space: -o-pre-wrap; /* Opera 7 */
white-space: -moz-pre-wrap; /* Mozilla */
white-space: -hp-pre-wrap; /* HP */
word-wrap: break-word; /* IE 5+ */
}
div.limpiar{
clear: both;
}

</style>
<br><br>

<tr>
<th>COMENTARIO</th>
</tr>
<?php
$id= strtoupper($_GET['ficha']);
$result = mysql_query("SELECT * FROM ayuda where id='$id'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

$row = mysql_fetch_assoc($result);
if (!$row)
        die("No se encontró jugador");
{
	echo "<tr>
		  <td class='ajustar'><center>{$row['comentario']}</td>
";
}
?>

</table></center>





<center>
<table border="1" cellpadding="2"  >
<style>
table
{
border:1px black;
}
th
{
background-color:#DAA520;
color:white;
}
.ajustar{
width: 420px;
float: left;
white-space: pre; /* CSS 2.0 */
white-space: pre-wrap; /* CSS 2.1 */
white-space: pre-line; /* CSS 3.0 */
white-space: -pre-wrap; /* Opera 4-6 */
white-space: -o-pre-wrap; /* Opera 7 */
white-space: -moz-pre-wrap; /* Mozilla */
white-space: -hp-pre-wrap; /* HP */
word-wrap: break-word; /* IE 5+ */
}
div.limpiar{
clear: both;
}

</style>
<br><br>

<tr>
<th>COMENTARIO</th>
</tr>
<?php
$id= strtoupper($_GET['ficha']);
$result = mysql_query("SELECT * FROM ayuda where id='$id'");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

$row = mysql_fetch_assoc($result);
if (!$row)
        die("No se encontró jugador");
{
	echo "<tr>
		  <td class='ajustar'><center>{$row['comentario']}</td>
";
}
?>

</table></center>















</body>
</html>
<br>
<br><br>
<center><input type=button value="Volver" onclick="javascript:history.go(-1);"></center>