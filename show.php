<!DOCTYPE html>
<?php require_once("coneccion.php");
$result = mysql_query ($link, "SELECT * FROM cliente");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar registros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="formulario">
        <a class="botones" href="index.php"> REGISTRAR CLIENTES </a>
        <p id="titulo"> Buscando Latitud y Longitud de una dirección</p>
        <?php
        if ($result){
            echo "<table border = "1"> \n";
            echo "<tr><td> ID </td><td> Nombre </td><td> E-Mail </td><td> Dirección </td><td> LATITUD </td><td> LOMGITUD </td></tr>";
            do{
                echo"<tr><td>".$row["cod_cliente"]."</td><td>".$row["nombreCliente"]."</td><td>".$row["emailCliente"]."</td><td>".$row["direccionCliente"]."</td><td>".$row["latCliente"].$row["lngCliente"]."</td></tr>";
            }while($row =mysqli_fetch_array($result));
            echo "</table> \n";
        }else{
            echo "<hr></br></br><p align="center">
        }
        ?>

    </section>             
</body>
</html>