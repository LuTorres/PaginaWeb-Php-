<?php

$servidor = "localhost";
$base = "bancomunicaciones";
$login = "root";
$pass = "";

$con=mysql_connect($servidor,$login,$pass) or die ("No se puede conectar");

 mysql_select_db($base,$con) or die ("No base datos");

 $codi = $_GET['codigo'];

 $cons = 'DELETE FROM planes WHERE IdPlan='.$codi;

 $res = mysql_query($cons, $con);

 if ($res) {
 	echo 'Usuario Eliminado Con Exito<a href="Planes.php">volver</a>';
 }else{
    echo "Hey no, Falla". mysql_error();
 }

 ?>