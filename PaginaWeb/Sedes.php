<!DOCTYPE html>
<html>
<head>
    <title>
       Sedes 
    </title>
    <style type="text/css">
    body{
        background-color: CYAN ;
    }
    </style>
</head>
<body>
 <center>
    <h1> Lista De Sedes </h1>
    <h2> La Mejor Cobertura Del Pais </h2>
    </center>

    <a href="index.php"> Volver </a><br> 
    <h4><b>Lista Actualizada</b><br></h4>

  <img src="destacado-wifi.png" align=right , hspace=1 , alt=" Conec" width=350 , height=350/>
</body>
</html>

<?php

$servidor = "localhost";
$base = "bancomunicaciones";
$login = "root";
$pass = "";

$con=mysql_connect($servidor,$login,$pass) or die ("No se puede conectar");

 mysql_select_db($base,$con) or die ("No base datos");

 $consulta = mysql_query(' SELECT IdSede, Departamento, PorcentajeCobertura, Disponibilidad  FROM sedes');

if (!$consulta) {
    echo "Error" . mysql_error();

}

?>
<?php


 echo '<table border= "3px">';
    echo '<tr> <td> IdSede </td> <td> Departamento </td> <td> PorcentajeCobertura </td> <td> Disponibilidad </td> <td>Editar</td> ';


 while ($fila = mysql_fetch_array($consulta)) {

 
?>
<tr>
    <td><?php echo $fila['IdSede'];?></td>
    <td><?php echo $fila['Departamento'];?></td>
    <td><?php echo $fila['PorcentajeCobertura'];?></td>
    <td><?php echo $fila['Disponibilidad'];?></td>
    <td>

        <a href="Sedes_editar.php"> <img src="images.png" style="width: 20px"> !</a>
        <a href="Sedes_eliminar.php?codigo=<?php echo $fila['IdSede']?>"><img src="delete1.png" style="width: 20px"></a>
    </td>
    
 <?php  
 }

?>
 </table>
 <center><br><br><br>

 <h3>¡¡¡ La personas dan un buen servicio cuando les gusta lo que hacen !!!</h3>
</center>



