<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Branch</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="775" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>      <table width="700" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
		  <?
		  $mode=$_GET["mode"];
		  if($mode=="add") {
		  ?>
          <form name="form1" method="post" action="formsubmit.php?mode=add">
            <table width="500" border="1" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td><strong>Add New Branchlll </strong></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Nombre </td>
                <td><input name="branchname" type="text" id="branchname"></td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td><input name="shortname" type="text" id="shortname"></td>
              </tr>
              <tr>
                <td>Especie</td>
                <td><input name="especie" type="text" id="especie"></td>
              </tr>
              <tr>
                <td>Situacion</td>
                <td><input name="situacion" type="text" id="situacion"></td>
              </tr>
              <tr>
                <td><input type="submit" name="Submit" value="Save Data"></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form>
		  <?		
		  } else  {
		  	include("../conexion/bd.php");
			$sn=$_GET["id"];
			$sql="select * from formulario where id='$sn'";
			
			$result=mysql_query($sql,$con) or die(mysql_error());
			while($row=mysql_fetch_array($result)) {
				$sn=$row['id'];
				$nombre=$row['n_persona'];
				$telefono=$row['telefono'];
				$especie=$row['especie'];
				$situacion=$row['situacion'];
			}
		?>
		<form name="form1" method="post" action="formsubmit.php?mode=update">
            <table width="500" border="1" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td><strong>Update Branchhh </strong></td>
                <td><input type="hidden" name="sn" value="<? echo $sn; ?>">
                  &nbsp;</td>
              </tr>
              <tr>
                <td>Nombre </td>
                <td><input name="branchname" type="text" id="branchname" value="<? echo $nombre; ?>"></td>
              </tr>
              <tr>
                <td>Telefono </td>
                <td><input name="shortname" type="text" id="shortname" value="<? echo $telefono; ?>"></td>
              </tr>
              <tr>
                <td>Especie </td>
                <td><input name="especie" type="text" id="especie" value="<? echo $especie; ?>"></td>
              </tr>
              <tr>
                <td>Situacion </td>
                <td><input name="situacion" type="text" id="situacion" value="<? echo $situacion; ?>"></td>
              </tr>
                <td><input type="submit" name="Submit" value="Update Data"></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form>
		
		<?	
			
		  }
		  ?>
		 
		  </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
