<?php
if(isset($_POST['enviar'])){

    //Obtenemos los datos del usuario 
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellidos = htmlspecialchars($_POST['apellidos']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $dni = htmlspecialchars($_POST['dni']);
    $email = htmlspecialchars($_POST['email']);
    $contrasena = htmlspecialchars($_POST['contrasena']);
    $contrasena2 = htmlspecialchars($_POST['contrasena2']);
    $provincia = htmlspecialchars($_POST['provincia']);
    $codPostal = htmlspecialchars($_POST['codPostal']);

    if ($contrasena !== $contrasena2){
        die("Las contrasenas deben coincidir.");
    }else{
        $hashX = crypt($contrasena,"kk");
        echo "Entro en else";
        //Datos de conexión con la base de datos
        $servername = "sql308.thsite.top";
        $username = "thsi_38097482";
        $password = "";
        $bd = "thsi_38097482_BDIvan";
        $enlace = mysqli_connect($servername,$username,$password,$bd);
        if(!$enlace){
            die("Ha ocurrido un error en la comunicación con la base de datos." . mysqli_connect_error());
        }
        
        //Construcción de la consulta
        $query = "INSERT INTO registro (nombre,apellidos,telefono,dni,correo,contrasena,provincia,codpostal) VALUES ('$nombre','$apellidos','$telefono','$dni','$email','$hashX','$provincia','$codPostal')";

        //Ejecución de la consulta
        $resultado = mysqli_query($enlace,$query);
        if($resultado){
            echo("Los datos se registraron correctamente");
        }else{
            echo("Hubo un error al registrar los datos");
        }
        
        //Enviar correo
        $mensaje = "¡Gracias por registrarte " . $nombre. " !" . "Se ha registrado con los siguientes datos: <br>Nombre: " . $nombre . "<br>Apellidos: " . $apellidos . "<br>Telefono: " . $telefono . "<br>DNI: " . $dni . "<br>Provincia: " . $provincia;

        //Cerramos conexión
        mysqli_close($enlace);
    }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <style>
        div{margin:1rem;}
        body{display:flex;flex-direction: column; align-items:center;text-align:center;justify-content:center;}
        input{border-radius:4px;padding:1rem;width:400px;}    
        form{justify-items:center;}
        button{border-radius:4px;padding:1rem;background-color:#d3e9fe;}
    </style>
</head>
<body>
    <h1>Registro de usuarios</h1>

    <form action="registro.php" method="post">
        <div><input type='text' placeholder='Nombre*' name='nombre' required></div>
        <div><input type='text' placeholder='Apellidos*' name='apellidos' required></div>
        <div><input type='text' placeholder='Teléfono*' name='telefono' required></div>
        <div><input type='text' placeholder='DNI*' name='dni' required></div>
        <div><input type='email' placeholder='Correo electrónico*' name='email' required></div>
        <div><input type='password' placeholder='Contraseña*' name='contrasena' required></div>
        <div><input type='password' placeholder='Repite la contraseña*' name='contrasena2' required></div>
        <div><input type='text' placeholder='Provincia*' name='provincia' required></div>
        <div><input type='text' placeholder='Código Postal' name='codPostal' ></div>
        <button type='submit' name='enviar' id='boton'>Crear cuenta</button>
    </form>
</body></html>