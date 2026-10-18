<?php
require_once("conexion/bd.php");
?>
<body bgcolor="#333333">
<table CELLSPACING=2 CELLPADDING=1 width='80%' border='2' align='center'>
<tr bgcolor='#ffffff'><td bgcolor="#458B00"><center><Font Color="#ffffff" Face="sans-serif" size="3"><B><center>DATOS MASCOTA</B></font></td></tr>
<?php
$nbrow=0;
$cont = 0; //Para el checkbox



    $id= strtoupper($_GET['ficha']);

$result = mysql_query("SELECT * FROM formulario where id='$id'");

if (!$result) {
    die('Invalid query: ' . mysql_error());
}

$row = mysql_fetch_assoc($result);
if (!$row)
        die("No se encontró jugador");

?>

<table cellspacing="2" cellpadding="0" width="80%" border="1" align="center">
<tr><br>
<td>
<table cellspacing="2" cellpadding="2" width="100%" border="1" border color="#ff0000" bgcolor="#cccccc" align="center">

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Fecha</B></font></td><td align="right"><center><?php echo $row['fecha_per'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Contacto</B></font></td><td align="right"><center><?php echo $row['n_persona'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Teléfono</B></font></td><td align="right"><center><?php echo $row['telefono'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Email</B></font></td><td align="right"><center><?php echo $row['email'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Nombre</B></font></td><td align="right"><center><?php echo $row['n_animal'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Especie</B></font></td><td align="right"><center><?php echo $row['especie'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Raza</B></font></td><td align="right"><center><?php echo $row['raza'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Edad</B></font></td><td align="right"><center><?php echo $row['edad'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Municipio</B></font></td><td align="right"><center><?php echo $row['municipio'] ?></td></tr>

<tr bgcolor="#ffffff"><td bgcolor="#9B9B0D"><Font Color="#ffffff" Face="sans-serif" size="2"><B><center>Zona</B></font></td><td align="right"><center><?php echo $row['zona'] ?></td></tr>

</table>

<td>
<A HREF='<?php echo ($row['ruta_fichero']);?>' TARGET='_blank'>
<img src='<?php echo ($row['ruta_fichero']);?>' WIDTH=100 HEIGHT=100 style='float:none'></center>
</tr>
</table>
<br>
<center>
<table border="1" cellpadding="2"  >
<style>
table
{
border:1px black;
}
th
{
background-color:#ffffff;
color:black;
}
.ajustar{
width: 350px;
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
<tr bgcolor='#ffffff'><td bgcolor="#458B00"><center><Font Color="#ffffff" Face="sans-serif" size="3"><B><center>MAS INFORMACIÓN</B></font></td></tr>
</tr>
<?php
$id= strtoupper($_GET['ficha']);
$result = mysql_query("SELECT * FROM formulario where id='$id'");
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
<br><br>
<form action="contacto-edit.php" method="get">
<center>

<table>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Teléfono:</B></font></td>
<td>
<input name="telefono" />
</td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Contraseña:</B></font></td>
<td>
<input name="clave1" />
</td>
<tr><td colspan="2" style="text-align: right">
Para editar o borrar anuncio.
</td>
</tr>
</table>
<br><br>
<center>
<input type="image" src="images/modificar.png" onmouseover="this.src='images/modificarMouseOver.png';" onmouseout="this.src='images/modificar.png';" BORDER=0 value="modificar" />
&nbsp;&nbsp;&nbsp;
<input type="image" src="images/borrar.png" onmouseover="this.src='images/borrarMouseOver.png';" onmouseout="this.src='images/borrar.png';" BORDER=0 value="borrar" />
</center>

<input type="hidden" name="nombre" value="<?= $row['n_animal'] ?>" />
<input type="hidden" name="especie" value="<?= $row['especie'] ?>" />
<input type="hidden" name="raza" value="<?= $row['raza'] ?>" />
</form>

<br><br><center>
<input type="image" src="images/atras.png" onmouseover="this.src='images/atrasMouseOver.png';" onmouseout="this.src='images/atras.png';"BORDER=0 style='float:none' value="Volver" onclick="javascript:history.go(-1);"></center>
