<?php
    $hostname="";
    $password="";
    $database="";
    $link= mysqli_connect($hostname,$user,$password,$database) or dia("No fue posible hacer la conección");
    ?>