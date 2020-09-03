<?php
require_once "../config.php";
require_once "../head.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
}
?>

<body>

    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="../menu.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <div class="container" style="margin-top: 20px;">
        <h3 style="padding: 20px; text-align: center;">Aprovação de Usuários</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Usuário</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php

            $sql = "SELECT * FROM `usuarios` WHERE status = 'inativo';";
            $query = mysqli_query($connection, $sql);

            while ($array = mysqli_fetch_array($query)) {
                $id = $array['id'];
                $nome = $array['nome'];
                $email = $array['email'];
                $nivel = $array['nivel'];

            ?>
                <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $nivel ?></td>
                    <td>
                        <a class="btn btn-success btn-sm" href="aprovar_usuario.php?id=<?php echo $id; ?>&nivel=1" role="button"><i class="far fa-thumbs-up"></i>&nbsp;Administrador</a>

                        <a class="btn btn-warning btn-sm" href="aprovar_usuario.php?id=<?php echo $id; ?>&nivel=2" role="button"><i class="far fa-thumbs-up"></i>&nbsp;Funcionário</a>

                        <a class="btn btn-dark btn-sm" href="aprovar_usuario.php?id=<?php echo $id; ?>&nivel=3" role="button"><i class="far fa-thumbs-up"></i>&nbsp;Visitante</a>

                        <a class="btn btn-danger btn-sm" href="excluir_usuario.php?id=<?php echo $id; ?>" role="button"><i class="far fa-thumbs-down"></i>&nbsp;Rejeitar</a>
                    </td>
                <?php } ?>
                </tr>
        </table>
    </div>
</body>

</html>