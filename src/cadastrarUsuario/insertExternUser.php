<?php
require_once "../config.php";
require_once "../head.php";
require_once "../scripts/password.php";

$nomeUser = $_POST['nomeusuario'];
$emailUser = $_POST['emailusuario'];
$passwordUser = $_POST['senhausuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome, email, senha, nivel, status) 
VALUES ('$nomeUser', '$emailUser', sha1('$passwordUser'), '$nivelAcess', '$status');";

$insert = mysqli_query($connection, $sql)

?>

<div class="container" style="width: 600px; margin-top: 40px; text-align: center;">
    <h4>Usuário Adicionado com Sucesso! Eperando Aprovação...</h4>
    <div style="padding-top: 20px;">
        <a href="../../index.php" role="button" class="btn btn-primary">Fazer Login</a>
    </div>
</div>

