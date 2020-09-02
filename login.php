<?php
require_once "head.php";
require_once "config.php";
require_once "scripts/password.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT email, senha FROM usuarios WHERE email = '$email' and `status` = 'Ativo';";

$executar = mysqli_query($connection, $sql);

$total = mysqli_num_rows($executar);

if ($total == 0) {
        header("Location: erro.php");
}

while ($array = mysqli_fetch_array($executar)) {
        $senhaUser = $array['senha'];
        $senhaCode = sha1($senha);

        if ($total > 0 && $senhaCode == $senhaUser) {
                session_start();
                $_SESSION['login'] = $email;
                header("Location: menu.php");
        } else {
                header("Location: erro.php");
        }
}
