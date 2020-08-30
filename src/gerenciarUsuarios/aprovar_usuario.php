<?php
require_once "../config.php";
require_once "../head.php";

$id = $_GET['id'];
$nivel = $_GET['nivel'];

$sql = "UPDATE `usuarios` SET `status` = 'Ativo', nivel = '$nivel' WHERE id = '$id'";

$update = mysqli_query($connection, $sql);
?>