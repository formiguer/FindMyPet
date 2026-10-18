<?php
require_once("conexion/bd.php");
?>
<?php
$result = mysql_query("SELECT * FROM lista_estados WHERE relacion=3");
while (($row = mysql_fetch_assoc($result)))
{
	echo "<tr>
		  <td><center>*option value=+{$row['opcion']}+>{$row['opcion']}*option></td>
";
}
?>