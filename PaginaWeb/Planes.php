<!DOCTYPE html>
<html>
<head>
    <title>
        Planes 2015
    </title>
    <style type="text/css">
    body{
        background-color: CYAN ;
    }
    </style>
</head>
<body>
<img src="internet-4.jpg" hspace=00 , width=1340 , border=2, HEIGHT=250  />
 <center>
    <h1> En Ban Comunicaciones Encuentras Las Mejores Ofertas De Nuestro Pais ....   </h1>
    </center>

    <a href="index.php"> Volver </a><br> 
    <h4><b>Tarifas Planes Segun El Estrato</b><br></h4>


</body>
</html>

<?php

$servidor = "localhost";
$base = "bancomunicaciones";
$login = "root";
$pass = "";

$con=mysql_connect($servidor,$login,$pass) or die ("No se puede conectar");

 mysql_select_db($base,$con) or die ("No base datos");

 $consulta = mysql_query(' SELECT IdPlan, Estrato, PlanPersonal, Valor2MB,PlanFamiliar, Valor4MB,PlanEmpresarial, Valor10MB FROM planes');

if (!$consulta) {
    echo "Error" . mysql_error();

}

?>
<?php


 echo '<table border= "3px">';
    echo '<tr> <td> IdPlan </td> <td> Estrato </td> <td> PlanPersonal </td> <td> Valor2MB </td> <td>PlanFamiliar</td> <td>Valor4MB</td> <td>PlanEmpresarial</td> <td>Valor10MB</td><td>Editar</td> ';


 while ($fila = mysql_fetch_array($consulta)) {

 
?>

<tr>

    <td><?php echo $fila['IdPlan'];?></td>
    <td><?php echo $fila['Estrato'];?></td>
    <td><?php echo $fila['PlanPersonal'];?></td>
    <td><?php echo $fila['Valor2MB'];?></td>
    <td><?php echo $fila['PlanFamiliar'];?></td>
    <td><?php echo $fila['Valor4MB'];?></td>
    <td><?php echo $fila['PlanEmpresarial'];?></td>
    <td><?php echo $fila['Valor10MB'];?></td>

    <td>

        <a href="Editar.php"> <img src="images.png" style="width: 20px"> !</a>
        <a href="Planes_eliminar.php?codigo=<?php echo $fila['IdPlan']?>"><img src="delete1.png" style="width: 20px"></a>
    </td>
    
 <?php  
 }

?>
 </table>
 
 <center>
 <h3>¡¡¡ La personas dan un buen servicio cuando les gusta lo que hacen !!!</h3>
</center>