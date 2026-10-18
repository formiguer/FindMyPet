<?php
require_once("conexion/bd.php");
?>
<html>
<body><center>
<table width="100%" border="1" cellpadding="3">
<style>
table
{
border:1px black;
}
th
{
background-color:#C6A512;
color:white;
}

</style>
<tr>
<th>ISLA</th>
<th>MUNICIPIO</th>
<th>FECHA</th>
<th>SEXO</th>
<th>FOTO</th>
<th>INFO</th>
</tr>
<?php
$result = mysql_query("SELECT * FROM formulario WHERE situacion='adopcion' AND especie='gato'");
while (($row = mysql_fetch_assoc($result)))
{
	echo "<tr>
	      <td bgcolor='#D2CE82'><center>{$row['isla']}</td>
	      <td><center>{$row['municipio']}</td>
		  <td bgcolor='#D2CE82'><center>{$row['fecha_per']}</td>
		  <td><center>{$row['sexo']}</td>
		  
<td>
<A HREF='{$row['ruta_fichero']}' TARGET='_blank'>
<img src=\"{$row['ruta_fichero']}\" WIDTH=50 HEIGHT=50 BORDER=0></center></a></td>
<td><center><a href=\"info.php?ficha={$row['id']}\"><img src='images/ficha.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a></td>";
}
?>
</table>
</body>
</html>
