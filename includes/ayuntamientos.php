<h2>MALLORCA</h2>
<?php require_once("conexion/bd.php");?>
<html>
<div id="fb-root"></div>
<body><center>
<table width="100%" border="1" cellpadding="0">
<style>
table
{
border:1px black;
}
th
{
background-color:#8F8FBD ;
color:white;
}
</style>
<tr>
<th>MUNICIPIO</th>
<th>DIRECCION</th>
<th>TELEFONO</th>
<th>PAGINA WEB</th>
</tr>
<?php 
$result = mysql_query("SELECT * FROM poblacion WHERE isla='mallorca' ORDER BY poblacion ASC");
while (($row = mysql_fetch_assoc($result)))
{	
    echo "<tr>
		  <td bgcolor='#C8C8C8'><center><width=5>{$row['poblacion']}</td>
		  <td><center>{$row['direccion']}</td>
		  <td><center>{$row['telefono']}</td>
		  <td><A HREF='{$row['web']}' TARGET='_blank'</td>
		  <img src='images/ayunt.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a>
";	  
}
?>
</table></center></body></html>

<h2>MENORCA</h2>
<?php require_once("conexion/bd.php");?>
<html>
<div id="fb-root"></div>
<body><center>
<table width="100%" border="1" cellpadding="3">
<tr>
<th>MUNICIPIO</th>
<th>DIRECCION</th>
<th>TELEFONO</th>
<th>PAGINA WEB</th>
</tr>
<?php $result = mysql_query("SELECT * FROM poblacion WHERE isla='menorca' ORDER BY poblacion ASC");
while (($row = mysql_fetch_assoc($result)))
{	
    echo "<tr>
		  <td bgcolor='#C8C8C8'><center><width= 5>{$row['poblacion']}</td>
		  <td><center>{$row['direccion']}</td>
		  <td><center>{$row['telefono']}</td>
		  <td><A HREF='{$row['web']}' TARGET='_blank'</td>
		  <img src='images/ayunt.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a>
";	  
}
?>
</table></center>
</body>
</html>

<h2>IBIZA Y FORMENTERA</h2>
<?php require_once("conexion/bd.php");?>
<html>
<div id="fb-root"></div>
<body><center>
<table width="100%" border="2" cellpadding="3">
<tr>
<th>MUNICIPIO</th>
<th>DIRECCION</th>
<th>TELEFONO</th>
<th>PAGINA WEB</th>
</tr>
<?php $result = mysql_query("SELECT * FROM poblacion WHERE isla='ibiza' OR isla='formentera' ORDER BY isla DESC");
while (($row = mysql_fetch_assoc($result)))
{	
    echo "<tr>
		  <td bgcolor='#C8C8C8'><center><width= 5>{$row['poblacion']}</td>
		  <td><center>{$row['direccion']}</td>
		  <td><center>{$row['telefono']}</td>
		  <td><A HREF='{$row['web']}' TARGET='_blank'</td>
		  <img src='images/ayunt.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a>
";	  
}
?>
</table></center></body></html>