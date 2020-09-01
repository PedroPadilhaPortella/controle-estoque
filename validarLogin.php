<?php

require_once "src/head.php";
require_once "src/config.php";
require_once "src/scripts/password.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$senhaDecode = sha1($senha);

$sql = "SELECT email, senha FROM usuarios WHERE email = '$email';";

$query = mysqli_query($connection, $sql);

$total = mysqli_num_rows($query);

while($array = mysqli_fetch_array($query)){

    $senhaUser = $array['senha'];

    if($total > 0 && $senhaDecode == $senhaUser){
            header('Location: src/landing/landing.php');
    }else{
            header("Location: erro.php");
    }
}

?>