<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Formulário de Cadastro</title>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h3>Formulário de Cadastro dos Produtos</h3>
        <form style="margin-top: 20px" action="insert.php" method="POST">
            <div class="form-group">
                <label>N° do Produto</label>
                <input type="number" class="form-control" name="Nproduto" placeholder="Insira o numero do Produto" require>
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="texto" class="form-control" name="NomeProduto" placeholder="Insira o nome do Produto" autocomplete="off" require>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" min="0" require>
            </div>
            <div class="form-group">
                <label>Categorias</label>
                <select class="form-control" name="categoria" id="exampleFormControlSelect1">
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Periféricos</option>
                    <option>Jogos</option>
                    <option>Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor 1</option>
                    <option>Fornecedor 2</option>
                    <option>Fornecedor 3</option>
                    <option>Fornecedor 4</option>
                    <option>Fornecedor 5</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" id="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>

</html>