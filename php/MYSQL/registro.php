<?php
echo "<DOCTYPE!><html><head><title>Registro</title><style>";
echo "div{margin:1rem;}body{display:flex;align-items:center;text-align:center;justify-content:center;}input{border-radius:4px;padding:1rem;width:400px;}";
echo "form{justify-items:center;}button{border-radius:4px;padding:1rem;background-color:#d3e9fe;}";
echo "</style></head><body>";
echo "<h1>Registro de usuarios</h1>";
echo "<form action='registro.php' method=post>";
echo "<div><input type='text' placeholder='Nombre*' required></div>";
echo "<div><input type='text' placeholder='Apellidos*' required></div>";
echo "<div><input type='text' placeholder='Teléfono*' required></div>";
echo "<div><input type='text' placeholder='DNI*' required></div>";
echo "<div><input type='text' placeholder='Correo electrónico*' required></div>";
echo "<div><input type='password' placeholder='Contraseña*' required></div>";
echo "<div><input type='password' placeholder='Repite la contraseña*' required></div>";
echo "<div><input type='text' placeholder='Provincia*' required></div>";
echo "<div><input type='text' placeholder='Código Postal'></div>";
echo "<button>Crear cuenta</button>";
echo "</form></body></html>";
?>