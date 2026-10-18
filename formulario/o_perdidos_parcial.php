<?php
require_once("conexion/bd.php");
?>
<html>
<div id="fb-root"></div>
<body><center>
<table width="100%" border="1" cellpadding="3">
<style>
table
{
border:1px black;
}
th
{
background-color:#9B9B0D;
color:white;
}

</style>
<tr>
<th>ISLA</th>
<th>MUNICIPIO</th>
<th>FECHA</th>
<th>ESPECIE</th>
<th>SEXO</th>
<th>FOTO</th>
<th>INFO</th>
</tr>
<?php
$result = mysql_query("SELECT * FROM formulario WHERE situacion='perdido' AND especie='otros'");
while (($row = mysql_fetch_assoc($result)))
{
	echo "<tr>
	      <td bgcolor='#B2CE8F' ><center>{$row['isla']}</td>
	      <td><center>{$row['municipio']}</td>
		  <td bgcolor='#B2CE8F'><center>{$row['fecha_per']}</td>
		  <td><center>{$row['especie1']}</td>
		  <td><center>{$row['sexo']}</td>
		  
<td>
<A HREF='{$row['ruta_fichero']}' TARGET='_blank'>
<img src=\"{$row['ruta_fichero']}\" WIDTH=50 HEIGHT=50 BORDER=0></center></a></td>
<td><center><a href=\"info_otros.php?ficha={$row['id']}\"><img src='images/ficha.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a></td>
";
}
?>

</table></center>
</body>
</html>
