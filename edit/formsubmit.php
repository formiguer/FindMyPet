<?
		  include("../conexion/bd.php");
		  $mode=$_GET["mode"];
		  if($mode=="add") {
		  	$branchname=$_POST["branchname"];
			$shortname=$_POST["shortname"];
			$especie=$_POST["especie"];
			$situacion=$_POST["situacion"];
			$sql="insert into formulario(situacion, n_persona, telefono, especie) values('$situacion', '$branchname','$shortname', '$especie')";
			$result=mysql_query($sql,$con) or die(mysql_error());
			header("location: index.php");
			
		  } elseif($mode=="update") {
		  	$branchname=$_POST["branchname"];
			$shortname=$_POST["shortname"];
			$especie=$_POST["especie"];
			$situacion=$_POST["situacion"];
			$sn=$_POST["sn"];
			$sql="update formulario set 
			situacion='$situacion',
			n_persona='$branchname',
			telefono='$shortname',
			especie='$especie' 
			where id='$sn'";
			//echo $sql;
			$result=mysql_query($sql,$con) or die(mysql_error());
			header("location: index.php");
		  }
		  ?>