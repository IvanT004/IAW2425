<?php
setcookie("nombre","Pepito conejo");
//Cookie con matriz de datos
setcookie("datos[nombre]", "Pepito");
setcookie("datos[apellidos]", "Conejo");
// Uso de la cookie
if (isset($_COOKIE["nombre"])) {
    print "<p>Su nombre es $_COOKIE[nombre]</p>\n";
} else {
    print "<p>No sé su nombre.</p>\n";
}
//Uso en caso de que se haya guardado una matriz en forma de cookies

?>