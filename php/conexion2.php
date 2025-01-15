<?php
$servername = "sql308.thsite.top"; //Nombre del servidor
$username = "thsi_38097482"; //Nombre de usuario
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=thsi_38097482_BDIvan", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 