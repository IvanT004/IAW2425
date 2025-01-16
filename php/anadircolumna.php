<?php
//Crear conexión con la base de datos
$servername = "sql308.thsite.top";
$username = "thsi_38097482";
$password = "";
$bd = "thsi_38097482_BDIvan";
$enlace = mysqli_connect($servername, $username, $password, $bd);

if (!$enlace) {
    die("Ocurrió un problema con la conexión: " . mysqli_connect_error());
}

//Construcción de la consulta
$consulta = "ALTER TABLE usuarios ADD fullname VARCHAR(30), ADD telefono INT(10)";

//Ejecución de la consulta
$resultado = mysqli_query($enlace,$consulta);

if ($resultado) {
    echo "Las nuevas columnas se han guardado correctamente";
} else {
    echo "Las nuevas columnas no se han podido guardar";
}

//Cierre de la conexión
mysqli_close($enlace);
?>
