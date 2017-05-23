<?php
include("utilerias.php");
$conexion=conecta();//conectado al servidor y bd
$u=GetSQLValueString($_GET["txtUsuario"],"text");
$consulta= sprintf("delete from usuarios where usuario= %s",$u);

mysql_query($consulta);
if(mysql_affected_rows()>0){
	print("Usuario Borrado :)");
}
else{
	print("Usuario no Borrado :(");
}

?>