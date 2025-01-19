<?php
    //Datos de conexión con la base de datos
        $servername = 'sql308.thsite.top';
        $username = 'thsi_38097482';
        $password = '';
        $bd = 'thsi_38097482_BDIvan';
        $enlace = mysqli_connect($servername,$username,$password,$bd);
        if(!$enlace){
            die("Ha ocurrido un error en la comunicación con la base de datos. " . mysqli_connect_error());
        }
    // Datos que queremos insertar en la tabla usuarios
        $nombre = "Jose Manuel";
        $apellidos = "Carmona Garcia";
        $email = "josemanuel32@gmail.com";
    //Consulta
        $query = "INSERT INTO usuarios (nombre,apellidos,email) VALUES (?, ?, ?)";
    //Ejecutar consulta
        $preparada = mysqli_prepare($enlace,$query);
        //Vinculamos los datos con la consulta
        $vinculado = mysqli_stmt_bind_param($preparada,"sss",$nombre,$apellidos,$email);
        //Ejecutamos la consulta
        $resultado = mysqli_stmt_execute($preparada);
        if($resultado){
            echo "Los datos se insertaron corractamente";
        }else{
            echo "Ha ocurrido un error al insertar los datos";
        }
    //Cerra conexion
        mysqli_close($enlace);
?>