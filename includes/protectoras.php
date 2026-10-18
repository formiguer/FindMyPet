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
background-color:#5FAD97  ;
color:white;
}

</style>
<tr>
<th>NOMBRE</th>
<th>PAGINA WEB</th>
<th>FACEBOOK</th>
</tr>
<?php 
$result = mysql_query("SELECT * FROM protectoras WHERE isla='mallorca' ORDER BY id ASC");
while (($row = mysql_fetch_assoc($result)))
{?>	
    <tr>
		  <td bgcolor='#C9DCD4'><center><b><?=$row['nombre']?></td></b>
		  <td><div><center><A class='nati' HREF='<?=$row['url']?>' TARGET='_blank'</td><?=$row['url']?></div>
		  <td>
<A HREF='<?=$row['redes']?>' TARGET='_blank'</td>
<img src='images/face.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' ></a>
<?php	  
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
<th>Nombre</th>
<th>Web</th>
<th>Redes sociales</th>
</tr>
<?php $result = mysql_query("SELECT * FROM protectoras WHERE isla='menorca' ORDER BY id ASC");
while (($row = mysql_fetch_assoc($result)))
{	
    echo "<tr>
		  <td bgcolor='#C9DCD4'><center><b>{$row['nombre']}</td></b>
		  <td><center><A HREF='{$row['url']}' TARGET='_blank'</td>{$row['url']}
		  <td><center><A HREF='{$row['redes']};' TARGET='_blank'</td><img src='images/face.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none' >";
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
<th>Nombre</th>
<th>Web</th>
<th>Redes sociales</th>
</tr>
<?php $result = mysql_query("SELECT * FROM protectoras WHERE isla='ibiza_formentera' ORDER BY id ASC");
while (($row = mysql_fetch_assoc($result)))
{	
    echo "<tr>
		  <td bgcolor='#C9DCD4'><center><b>{$row['nombre']}</td></b>
		  <td><center><A HREF='{$row['url']}' TARGET='_blank'</td>{$row['url']}
		  <td><center><A HREF='{$row['redes']};' TARGET='_blank'</td><img src='images/face.png' WIDTH=30 HEIGHT=30 BORDER=0 style='float:none'>";
}
?>
</table></center></body></html>