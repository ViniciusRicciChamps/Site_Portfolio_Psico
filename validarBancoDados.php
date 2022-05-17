<?php


$nomeServidor = "localhost";
$nomeUsuario = "root";
$senhaAcessoBD = "";

$conn = new mysqli($nomeServidor, $nomeUsuario, $senhaAcessoBD);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>