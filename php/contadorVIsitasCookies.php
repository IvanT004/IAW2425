<?php
if ( isset( $_COOKIE[ 'visitas' ] ) ) {

setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
setcookie('lang',"es",time()+3600*24);
echo 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
}
else {

setcookie( 'visitas', 1, time() + 3600 * 24 );
echo 'Bienvenido por primera vez a nuesta web';
}
?>