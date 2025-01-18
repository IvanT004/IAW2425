<?php
//Conexión con la base de datos
    $servername = "sql308.thsite.top"; //Nombre del servidor
    $username = "thsi_38097482"; //Nombre de usuario
    $password = "";
    $bd = "thsi_38097482_BDIvan";
    $enlace = mysqli_connect($servername,$username,$password,$bd);
    if (!$enlace){
        die("Ocurrió un problema con la conexión : " . mysqli_connect_error());
    }

//Construcion de la Query
    $query = "SELECT * FROM usuarios LIMIT 1";

//Ejecución de la Query
    $resultado = mysqli_query($enlace, $query);

//Procesamiento de los datos
    //Al menos tengo un registro que mostrar
    if(mysqli_num_rows($resultado)>0){
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "Nombre: " . $fila["nombre"] . "<br>Apellido: " . $fila["apellidos"] . "<br>Email: " . $fila["email"] . "<br>";
        }
    }else{
        echo "<p>No hubo resultados en la tabla</p>";
    }

//Cierre de la conexión 
    mysqli_close($enlace);
?>