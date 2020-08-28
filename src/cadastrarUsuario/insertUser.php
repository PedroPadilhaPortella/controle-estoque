<?php
require_once "../config.php";
require_once "../head.php";
require_once "../.php";

$nomeUser = $_POST['nomeusuario']
$emailUser = $_POST['emailusuario']
$passwordUser = $_POST['senhausuario']
$nivelAcess = $_POST['acesso']

$sql = "INSERT INTO usuarios (nome, email, senha, nivel) VALUES ('$nomeUser', '$emailUser', sh1('$passwordUser'), '$nivelAcess');";



?>


