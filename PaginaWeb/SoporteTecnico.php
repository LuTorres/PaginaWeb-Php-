<!DOCTYPE html>
<html>
<head>
    <title>
        Soporte Tecnico
    </title>
    <style type="text/css">
    body{
        background-color: CYAN ;
    }
    </style>
</head>
<body>

  <img src="internet.jpg" hspace=00 , width=1330 ,  HEIGHT=200  />
 <center>
    <h1> Soporte Tecnico Las 24 Horas La Mejor Cobertura Del Pais</h1>
    
    </center>
     <img src="Antena-Opergal.jpg" align=right , hspace=1 , alt=" Aguila" width=250 , height=200/>
    <a href="index.php"> Volver </a><br><br> 
    <h4> Lista De Reparaciones Y Soportes A Realizar Antes De 24 a 72 Horas </h4>
   
</body>
</html>

<?php

$servidor = "localhost";
$base = "bancomunicaciones";
$login = "root";
$pass = "";

$con=mysql_connect($servidor,$login,$pass) or die ("No se puede conectar");

 mysql_select_db($base,$con) or die ("No base datos");

 $consulta = mysql_query(' SELECT IdSoporte, Nombre,Cedula, Direccion,Departamento,Municipio,Problema  FROM soporte');

if (!$consulta) {
    echo "Error" . mysql_error();

}

?>
<?php


 echo '<table border= "3px">';
    echo '<tr> <td> IdSoporte </td> <td> Nombre </td> <td> Cedula </td> <td> Direccion </td> <td> Departamento </td><td> Municipio </td> <td> Problema </td> <td>Editar</td> ';


 while ($fila = mysql_fetch_array($consulta)) {

 
?>
<tr>
    <td><?php echo $fila['IdSoporte'];?></td>
    <td><?php echo $fila['Nombre'];?></td>
    <td><?php echo $fila['Cedula'];?></td>
    <td><?php echo $fila['Direccion'];?></td>
    <td><?php echo $fila['Departamento'];?></td>
    <td><?php echo $fila['Municipio'];?></td>
    <td><?php echo $fila['Problema'];?></td>
    <td>

        <a href="Editar.php"> <img src="images.png" style="width: 20px"> !</a>
        <a href="Usuarios_eliminar.php?codigo=<?php echo $fila['IdPersona']?>"><img src="delete1.png" style="width: 20px"></a>
    </td>
    
 <?php  
 }

?>
 </table>
 <center><br><br>

 <h3>¡¡¡ La personas dan un buen servicio cuando les gusta lo que hacen !!!</h3>
</center>