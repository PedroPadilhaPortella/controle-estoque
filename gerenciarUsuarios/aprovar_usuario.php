<?php
require_once "../config.php";
require_once "../head.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$id = $_GET['id'];
$nivel = $_GET['nivel'];

$sql = "UPDATE `usuarios` SET `status` = 'Ativo', nivel = '$nivel' WHERE id = '$id'";

$update = mysqli_query($connection, $sql);

header("Location: gerenciar.php");
