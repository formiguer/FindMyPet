<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Branch</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="script.js"> </script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="775" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><hr size="1" noshade></td>
  </tr>
  <tr>
    <td>
      <form action="" method="post" name="" id="">
        <table width="600" border="1" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td><input name="topcheckbox" type="checkbox" class="check" id="topcheckbox" onClick="selectall();" value="ON">
Select All &nbsp;&nbsp;&nbsp;</td>
            <td colspan="5" align="center"><a href="form.php?mode=add">Add New Branch </a></td>
          </tr>
          <tr>
            <td><strong><a href="javascript:goDel()">Delete</a></strong></td>
            <td><strong>Contacto </strong></td>
            <td><strong>Telefono </strong></td>
			<td><strong>Especie </strong></td>
			<td><strong>Situacion </strong></td>
            <td><strong>Update</strong></td>
          </tr>
		  <?
		  include("../conexion/bd.php");
		  
		  $sql="select * from formulario order by id";
		  $result=mysql_query($sql, $con) or die(mysql_error());
		  while($row=mysql_fetch_array($result)) {
		  ?>
          <tr>
            <td><input name="<? echo $row['id']; ?>" type="checkbox" class="check"></td>
            <td><? echo $row['n_persona']; ?></td>
            <td><? echo $row['telefono']; ?></td>
			<td><? echo $row['especie']; ?></td>
			<td><? echo $row['situacion']; ?></td>
            <td><a href="<? echo "form.php?id=".$row['id']."&mode=update"; ?>">Update</a></td>
          </tr>
		  <? } ?>
          <tr>
            <td><strong><a href="javascript:goDel()">Delete</a></strong></td>
            <td><strong>Contacto </strong></td>
            <td><strong>Telefono </strong></td>
			<td><strong>Especie </strong></td>
			<td><strong>Situacion </strong></td>
            <td><strong>Update</strong></td>
          </tr>
        </table>
    </form></td>
  </tr>
</table>
</body>
</html>
