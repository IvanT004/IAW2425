<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Introduce numero positivo > 0</label>
        <input type="text" name="numero" id="numero">
        <input type="button" value="Enviar">
    </form>
    
    <script>
        $(document).ready(function () {
            $("button").click(function(){
                if(!$("#numero").val() > 0)
                    alert("¿Dónde vas gorrión. Introduce un número positivo?");
            });
        });
    </script>
    <?php
        $numero = $_POST["numero"];
        if(isset($numero) || !$numero > 0){
            echo"¿Dónde vas gorrión. Introduce un número positivo?" ;
        }else{
            for($i=; $i <= $numero; $i++)
                for($x=1; $x <= $i; $x++)
                    echo"*";
            echo"<br>";
        }
    ?>
</body>
</html>