<?php
    $url = file_get_contents("https://www.eltiempo.es/sevilla.html");
    $temperatura = explode("<tr>", $url);
    print_r($temperatura[1]);
?>