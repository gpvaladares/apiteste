<?php

$servidor = "localhost";
$database = "bdtestephp";
$usuario = "root";
$senha ="root";


$conn = mysqli_connect($servidor, $usuario, $senha, $database);
// Check connection
//if (!$conn) {
   // die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//mysqli_close($conn);
?>