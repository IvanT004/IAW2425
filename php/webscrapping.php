<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Webscrapping</title>
</head>
<body>
    <form action="webscrapping.php" method="post">
        <input type="text" name="enlace">
        <button name="button">Buscar emails</button>
    </form>
    <?php
        if(isset($_POST['button'])){
            if(isset(($_POST['enlace']))){
                $enlace = htmlspecialchars($_POST['enlace']);
                $contenidoPag = file_get_contents($enlace);
                $emails = explode("<a href='mailto:", $contenidoPag);
                
                for($i = 0; $i < count($emails); $i++){
                    echo $emails[$i];
                }
               /* if(is_array($emails)){
                    foreach($emails as $correoPers){
                        echo $correoPers . "<br>";
                    }
                }else
                    echo"<p>Lo siento no se han encontrado emails en esta página web</p>";*/
            }
        }
    ?>
</body>
</html>
