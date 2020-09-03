<?php
require_once "../config.php";
require_once "../head.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = '$id';";

$delete = mysqli_query($connection, $sql);

header("Location: gerenciar.php"); //redireciona para gerenciar.php
