<?php
if ( isset( $_COOKIE[ 'visitas' ] ) ) {

setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
echo "Numero de visitas: ". $_COOKIE['visitas'] . " usando el idioma " . $_COOKIE['lang'];
}
else {

setcookie( 'visitas', 1, time() + 3600 * 24 );
header("Set-Cookie: name=value; HttpOnly");
echo 'Bienvenido por primera vez a nuesta web';
}
?>
