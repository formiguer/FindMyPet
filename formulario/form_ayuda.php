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
background-color:#DAA520;
color:white;
}

</style>

<tr>
<th>FECHA</th>
<th>NOMBRE</th>
<th>MUNICIPIO</th>
<th></th>
</tr>
<?php
$result = mysql_query("SELECT * FROM ayuda ORDER BY id DESC");
while (($row = mysql_fetch_assoc($result)))
{
	echo "<tr>
	      <td bgcolor='#F5D8A2'><center>{$row['fecha']}</td>
	      <td><center>{$row['n_persona']}</td>
		  <td><center>{$row['municipio']}</td>
<td>
<center><a href=\"info1.php?ficha={$row['id']}\"><img src='images/ficha.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a></td>
";
}
?>

</table></center>
</body>
</html>
