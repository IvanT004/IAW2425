<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <style>
        div{margin:1rem;}
        body{display:flex; flex-direction: column; align-items:center;text-align:center;justify-content:center;}
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
        <div><input type='text' placeholder='Correo electrónico*' name='email' required></div>
        <div><input type='password' placeholder='Contraseña*' name='contrasena' required></div>
        <div><input type='password' placeholder='Repite la contraseña*' name='contrasena2' required></div>
        <div><input type='text' placeholder='Provincia*' name='provincia' required></div>
        <div><input type='text' placeholder='Código Postal' name='codPostal' ></div>
        <button name='enviar'>Crear cuenta</button>"
    </form>

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
    
    if($contrasena !== $contrasena2){
        die("Las contraseñas deben coincidir.");
    }else{
        $hash = crypt($contrasena);

        //Datos de conexión con la base de datos
        $servername = 'sql308.thsite.top';
        $username = 'thsi_38097482';
        $password = '';
        $bd = 'thsi_38097482_BDIvan';
        $enlace = mysqli_connect($servername,$username,$password,$bd);
        if(!$enlace){
            die("Ha ocurrido un error en la comunicación con la base de datos.");
        }

        //Construcción de la consulta
        $query = "INSERT INTO registro('Nombre', 'Apellidos', 'Telefono', 'DNI', 'CorreoElectronico', 'Contrasena', 'Provincia', 'CodigoPostal') VALUES ('$nombre','$apellidos','$telefono','$dni','$email','$hash','$provincia','$codPostal')";

        //Ejecución de la consulta
        $resultado = mysqli_query($enlace,$query);
        if(!$resultado){
            echo "Los datos se registraron correctamente";
        }else{
            die("Hubo un erro al registrar los datos: " . mysqli_error($enlace));
        }

        //Cerramos conexión
        mysqli_close($enlace);
    }
} 
?>
</body></html>