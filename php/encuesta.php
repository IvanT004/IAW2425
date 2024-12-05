<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Encuesta</title>
    <style>
        body{
            display: flex;
            justify-content:center;
            align-content:center;
        }
        form div{
            display:flex;
            width: max-content;
            flex-direction:column;
            margin: 1rem;
        }
        #espaciado{margin-top:1rem;}
    </style>
</head>
<body>
    <form action="encuesta.php" method="post">
        <div class="estructurado">
            <label for="">*Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="nombre">
        </div>
        <div class="estructurado">
            <label for="">*Género:</label>
            <select name="genero" id="genero">
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
                <option value="">Otro</option>
            </select>
        </div>
        <div class="estructurado">
            <label for="">¿Desea recibir novedades?</label>
            <input type="checkbox" name="novedades" id="novedades">
        </div>
        <div class="estructurado" id="espaciado">
            <label for="">*Elija su nacionalidad:</label>
            <label for="">Española<input type="radio" name="nacionalidad" id="espanola"></label>
            <label for="">Portuguesa<input type="radio" name="nacionalidad" id="portuguesa"></label>
            <label for="">Francesa<input type="radio" name="nacionalidad" id="francesa"></label>
        </div>
        <input type="button" value="Enviar">
        <?php
            
                if(isset($_POST["nombre"]) || isset($_POST["genero"]) || isset($_POST["nacionalidad"]))
                    echo"<div class='estructurado'>Debes de rellenar los campos obligatorios</div>";
                /*else{
                        echo"<p>Los datos se enviaron exitosamente:</p>";
                        echo"<p>Nombre: " . $_POST["nombre"] . "</p>";
                        echo"<p>Genero: " . $_POST["genero"] . "</p>";
                        echo"<p>Nacionalidad: " . $_POST["nacionalidad"] ."</p>";
                }*/
            
        ?>
    </form>
</body>
</html>