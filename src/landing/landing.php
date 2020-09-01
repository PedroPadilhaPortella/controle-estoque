<?php
require_once "../head.php";

?>

<body>

<?php

$_SESSION['usuario'];


if(!isset($_SESSION['usuario'])) {
    header("Location: ../../index.php");
}

?>

    <div class="container" style="margin-top: 100px">

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Novo Produto</h5>
                        <p class="card-text">Opção para adicionar produtos em nosso estoque</p>
                        <a href="../cadastrarProduto/cadastrar.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Listar, editar e excluir produtos</p>
                        <a href="../listarProdutos/listar.php" class="btn btn-primary">Listar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Categorias</h5>
                        <p class="card-text">Opção para gerenciar as categorias do estoque</p>
                        <a href="../listarCategorias/listar.php" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Fornecedores</h5>
                        <p class="card-text">Opção para gerenciar os fornecedores</p>
                        <a href="../listarFornecedores/listar.php" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Usuários</h5>
                        <p class="card-text">Opção para gerenciar os usuários do sistema</p>
                        <a href="../gerenciarUsuarios/gerenciar.php" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>