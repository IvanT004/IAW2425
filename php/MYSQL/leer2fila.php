<?php
    //Conexión con la base de datos
    $servername = "sql308.thsite.top";
    $username = "thsi_38097482";
    $password = "";
    $bd = "thsi_38097482_BDIvan";
    $enlace = mysqli_connect($servername,$username,$password,$bd);

    if (!$enlace){
        die("Ocurrió un problema con la conexión: " . mysqli_connect_error());
    }

    //Construcción de la consulta
    $consulta = "SELECT * FROM usuarios LIMIT 2";

    //Ejecución de la consulta
    $resultado = mysqli_query($enlace,$consulta);

    //Procesamiento de los datos
    if(mysqli_num_rows($resultado)>0){
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "Nombre: " . $fila["nombre"] . "<br>Apellido: " . $fila["apellidos"] . "<br>Email: " . $fila["email"] . "<br><br>";
        }
    }else{
        echo "<p>No hubo resultados en la tabla</p>";
    }

    //Cierre de la conexión
    mysqli_close($enlace);
?>