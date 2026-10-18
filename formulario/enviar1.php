<?php
$n_persona = $_REQUEST["n_persona"];
$telefono = $_REQUEST["telefono"];
$email = $_REQUEST["email"];
$municipio = $_REQUEST["municipio"];
$isla = $_REQUEST["isla"];
$fecha= $_REQUEST["theDate2"];
$comentario = $_REQUEST["comentario"];

require_once(dirname(__FILE__) . "/../conexion/config.php");
$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_DATABASE, $conexion);

$sentencia = "INSERT INTO ayuda 
(
 n_persona,
 telefono, 
 email, 
 isla, 
 municipio, 
 fecha, 
 comentario
 )
  VALUES (
'" . $n_persona . "',
'" . $telefono . "',
'" . $email . "',
'" . $isla . "',
'" . $municipio . "',
'" . $fecha . "',
'" . $comentario . "'
)";
$resultado = mysql_query($sentencia, $conexion);
 if ($resultado) {
  echo "El fichero se ha subido al servidor correctamente\n";
 }
else 
{
echo "Se ha producido un error al subir el fichero\n";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="3; URL=ayuda.php">