<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Webscrapping</title>
</head>
<body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="url" size="50" value=""/><br />
            <input type="submit" value="Buscar emails" />
        </form> 
    <?php
        
         $the_url = isset($_REQUEST['url']) ? htmlspecialchars($_REQUEST['url']) : ''; // Ternario
         if (isset($_REQUEST['url']) && !empty($_REQUEST['url'])) {
          $text = file_get_contents($_REQUEST['url']);
          }
          if (!empty($text)) {
            $res = preg_match_all(
            "/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i",$text,$matches);
            if ($res) {
                  foreach(array_unique($matches[0]) as $email) {
                  echo $email . "<br />";
            }
          }
          else {
              echo "No he encontrado ningún email.";
          }
        }

        
        
        //MI INTENTO
        /*if(isset($_POST['button'])){
            if(isset(($_POST['enlace']))){
                $enlace = htmlspecialchars($_POST['enlace']);
                $contenidoPag = file_get_contents($enlace);
                $emails = explode("<a href='mailto:", $contenidoPag);
                
                for($i = 0; $i < count($emails); $i++){
                    echo $emails[$i];
                }
                if(is_array($emails)){
                    foreach($emails as $correoPers){
                        echo $correoPers . "<br>";
                    }
                }else
                    echo"<p>Lo siento no se han encontrado emails en esta página web</p>";
            }
        }*/
    ?>
</body>
</html>
