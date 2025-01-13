<?php
    $servername = "sql308.thsite.top"; //Nombre del servidor
    $username = "thsi_38097482"; //Nombre de usuario
    $password = "";

    //Crear conexión 
    $conn = new mysqli($servername,$username,$password);

    //Comprueba la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error)
    }
    echo "Connected successfully";
?>