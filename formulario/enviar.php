<?php
$situacion = $_REQUEST["situacion"];
$n_persona = $_REQUEST["n_persona"];
$telefono = $_REQUEST["telefono"];
$email = $_REQUEST["email"];
$n_animal = $_REQUEST["n_animal"];
$especie = $_REQUEST["especie"];
$especie1 = $_REQUEST["especie1"];
$edad = $_REQUEST["edad"];
$razag = $_REQUEST["razag"];
$razap = $_REQUEST["razap"];
$chip = $_REQUEST["chip"];
$n_chip = $_REQUEST["n_chip"];
$color = $_REQUEST["color"];
$municipio = $_REQUEST["municipio"];
$zona = $_REQUEST["zona"];
$isla = $_REQUEST["isla"];
$fecha= $_REQUEST["fecha"];
$sexo= $_REQUEST["sexo"];
$clave= $_REQUEST["clave"];
$comentario= $_REQUEST["comentario"];

$date = date('d-n-Y');

// Elegir la raza que toca
if ($especie === "Perro")
    $raza = $razap;
elseif ($especie === "Gato")
    $raza = $razag;
else
    $raza = "";


//GENERADOR DE CODIGOS ALEATORIOS
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $cad = "";
        for($i=0;$i<15;$i++) {
        $cad .= substr($str,rand(0,62),1); 
        }
    /*con eso generas una cadena casi irrepetible de 15 digitos aleatorios y lo puedes configurar a gusto
    ahora solo quedaría agregarlo a tu imagen....
    por ejemplo
    */
    $fichero = ("$cad".$_FILES['fichero']['name']);
    //y ya se renombra
    //ahora si quieres hacer un poco mas optima la subida te aconsejaria quitar caracteres especiales y demás.... te paso una funcion
 

    function replace_filename($str,$min = 0) {
        $str = ereg_replace("[^a-zA-Z0-9.()]",'_',$str);
        return ($min == 1) ? strtolower($str) : $str;
    }
     
    //y después solo aplicamos
    $imagen = replace_filename($fichero);

// Recoge la ubicación temporal del fichero en el servidor
	$imagen_tmp = $_FILES["fichero"]["tmp_name"];











 
// Comprueba que se ha indicado un fichero en el formulario
if ($imagen == "") {
echo "Error, No se ha especificado ningun fichero\n";
}
 
// Ruta completa (incluido el nombre del fichero)
$destino = "ficheros/" . $imagen;
// alter table formulario auto_increment=1
// Copia el fichero al directorio de nuestro servidor, cogiéndolo de la ubicación temporal
if (move_uploaded_file($imagen_tmp, $destino)) {
// Conecta con la Base de Datos e inserta la información de la ruta y comentario del fichero

require_once(dirname(__FILE__) . "/../conexion/config.php");
$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_DATABASE, $conexion);

$sentencia = "INSERT INTO formulario 
(fecha_anuncio,
 situacion,
 n_persona,
 telefono, 
 email, 
 n_animal, 
 especie,
 especie1, 
 edad, 
 raza,
 sexo, 
 chip,
 n_chip, 
 color,
 isla, 
 municipio, 
 zona, 
 fecha_per, 
 comentario, 
 ruta_fichero,
 clave
 )
 VALUES (
'" . $date . "',
'" . $situacion . "',
'" . $n_persona . "',
'" . $telefono . "',
'" . $email . "',
'" . $n_animal . "',
'" . $especie . "',
'" . $especie1 . "',
'" . $edad . "',
'" . $raza . "',
'" . $sexo . "',
'" . $chip . "',
'" . $n_chip . "',
'" . $color . "',
'" . $isla . "',
'" . $municipio . "',
'" . $zona . "',
'" . $fecha . "',
'" . $comentario . "',
'" . $destino . "',
'" . $clave . "'
)";
$resultado = mysql_query($sentencia, $conexion);
 if ($resultado) {
  echo "El fichero se ha subido al servidor correctamente\n";
 }
}
else 
{
echo "Se ha producido un error al subir el fichero\n";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="3; URL=contacto.php">
