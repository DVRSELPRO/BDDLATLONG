<?php
    require_once("coneccion.php");
    require_once("geolocalizador.php");

    $nombre= $_POST["nombre"];
    $email = $_POST["email"];
    $direccion=$_POST["direccion"];

    $return =Maps::buscaLugar($direccion);
    $lat = $return[0];
    $lng=$return[1];
    $sql="INSERT INTO cliente 
    (nombreCliente, emailCliente, direccionCliente,latCliente,lngCliente)
        VALUES ("$nombre", "$email", "$direccion", "$lat", "$lng");";
        $query = mysqli_query($link, $sql);

        if($query){
            echo "<script>alert(\"Exito al registrar...\)"; </script>";
            echo "<scrip> location.href="index.php"</location>;

            else{
                echo"<script> alert(\"Error al registrar\"); </script>";
                echo "<script>location.href="index.php"</script>";
            }

        }
    
?>