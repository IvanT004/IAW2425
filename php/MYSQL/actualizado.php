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
    $query = "UPDATE usuarios SET nombre='Juan', apellidos='Perez Lopez' WHERE id=7";

//Ejecución de la Query
    $resultado = mysqli_query($enlace, $query);

//Procesamiento de los datos
    //Al menos tengo un registro que mostrar
    if($resultado){
        echo"<p>Datos actualizados correctamente.</p>";
    }else{
        echo "<p>No se pudo actualizar los datos.</p>";
    }

//Cierre de la conexión 
    mysqli_close($enlace);
?>