<?php
$servername = "sql308.thsite.top"; //Nombre del servidor
$username = "thsi_38097482"; //Nombre de usuario
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 