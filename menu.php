<?php
require_once "head.php";
require_once "config.php";

session_start();
$login = $_SESSION['login'];

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}

$sql = "SELECT nivel FROM usuarios WHERE email = '$login' and `status` = 'Ativo' ";
$executar = mysqli_query($connection, $sql);
$array = mysqli_fetch_array($executar);
$nivel = $array['nivel'];
?>

<body>
    <?php
        if ($nivel == 1) {
            $user = "Administrador";
            $color = "green";
        }
        if ($nivel == 2) {
            $user = "Funcionário";
            $color = "gold";
        }
        if ($nivel == 3) {
            $user = "Visitante";
            $color = "black";
        }
        ?>
    <div class="container" style="width:500px; height:40px;text-align:center;color:white;background-color:<?php echo $color; ?>">
        <h5>Usuário Logado: <?php echo $user; ?></h5>
    </div>
    <div class="container">

        <div class="container" style="text-align : right">
            <form action="index.php" method="post">
                <button class="btn btn-danger" type="submit"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;<b>Sair</b></button>
            </form>
        </div>

        <div class="container" style="margin-top: 40px">
            <h1 style="text-align: center;">Dashboard</h1>

            <div class="row">
                <?php if (($nivel == 1) || ($nivel == 2)) { ?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Novo Produto</h5>
                                <p class="card-text">Opção para adicionar produtos em nosso estoque</p>
                                <a href="cadastrarProduto/cadastrar.php" class="btn btn-primary">Adicionar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Produtos</h5>
                            <p class="card-text">Listar, editar e excluir produtos</p>
                            <a href="listarProdutos/listar.php" class="btn btn-primary">Listar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php if (($nivel == 1) || ($nivel == 2)) { ?>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gerenciar Categorias</h5>
                                <p class="card-text">Opção para gerenciar as categorias do estoque</p>
                                <a href="listarCategorias/listar.php" class="btn btn-primary">Gerenciar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gerenciar Fornecedores</h5>
                                <p class="card-text">Opção para gerenciar os fornecedores</p>
                                <a href="listarFornecedores/listar.php" class="btn btn-primary">Gerenciar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row">
                <?php if ($nivel == 1) { ?>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastar Usuários</h5>
                                <p class="card-text">Opção para cadastrar os usuários do sistema</p>
                                <a href="cadastrarUsuario/cadastrar.php" class="btn btn-primary">Gerenciar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gerenciar Usuários</h5>
                                <p class="card-text">Opção para gerenciar os usuários do sistema</p>
                                <a href="gerenciarUsuarios/gerenciar.php" class="btn btn-primary">Gerenciar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</body>

</html>