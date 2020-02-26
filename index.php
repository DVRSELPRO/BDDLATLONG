<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="formulario">
        <a class="botones" href="show.php"> VER CLIENTES </a>
        <p id="titulo"> Buscando Latitud y Longitud de una dirección</p>

    <form action="buscar.php" method="post">
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="mail" id="email" name="email" placeholder="Correo electronico">
        <input type="text" id="direccion" name="direccion" placeholder="Dirección">
        <input type="submit" value="enviar">
        </form>
        </section>
                   
</body>
</html>