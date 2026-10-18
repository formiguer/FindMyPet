<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Animals and Pets</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="templatemo_container">
  <div id="templatemo_topsection">
    <?php include("includes/cabecera.php"); ?>
    <?php include("includes/menu.php"); ?>
  </div>
<div id="templatemo_left_column"><!-- InstanceBeginEditable name="imagen izq" -->
  <div id="templatemo_left_top_o"></div>
<!-- InstanceEndEditable -->
 <?php include("includes/menu_otros.php"); ?>
  
  <div id="templatemo_right_column">
    <div id="templatemo_right_top"></div>
    <!-- InstanceBeginEditable name="cuerpo" -->
    <div id="templatemo_right_mid">
      <h1>ÚLTIMOS AVISOS   -   OTRAS ESPECIES</h1>
	  <A HREF='contacto.php'>
<img src="images/insertar_anuncio.png" onmouseover="this.src='images/insertar_anuncioMouseOver.png';" onmouseout="this.src='images/insertar_anuncio.png';" BORDER=0 style='float:left'/>

<A HREF='pag_buscar.php'>
<img src="images/boton_buscar.png" onmouseover="this.src='images/boton_buscarMouseOver.png';" onmouseout="this.src='images/boton_buscar.png';" BORDER=0 style='float:right'/></a>
<br><br>
      <h2><A HREF='o_perdidos.php' >PERDIDOS</h2></a>
      <?php 
	  include("formulario/o_perdidos_parcial.php"); 
	  ?>
      
      <p>&nbsp;</p>
      <h2><A HREF='o_encontrados.php' >ENCONTRADOS</h2><br /></a>
      <?php 
	  include("formulario/o_encontrados_parcial.php"); 
	  ?>
      
      <p>&nbsp;</p>
      <h2><A HREF='o_adopcion.php' >EN ADOPCIÓN </h2><br /></a>
      <?php 
	  include("formulario/o_adopcion_parcial.php"); 
	  ?>
      
    </div>
    <!-- InstanceEndEditable -->
    <?php include("includes/pie.php"); ?>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>
