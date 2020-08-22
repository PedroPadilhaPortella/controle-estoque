<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ef27dc1cf3.js" crossorigin="anonymous"></script>
    <title>Formulário de Cadastro</title>
</head>

<body>
    <a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="../index.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
    <h3 style="text-align:center;">Formulário de Cadastro dos Produtos</h3>

    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
        <form style="margin-top: 20px" action="../src/insert.php" method="POST">
            <div class="form-group">
                <label>N° do Produto</label>
                <input type="number" class="form-control" name="Nproduto" placeholder="Insira o numero do Produto" required>
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="texto" class="form-control" name="NomeProduto" placeholder="Insira o nome do Produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade" min="0" required>
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
            <div style="text-align: right; margin: 20px">
                <button type="submit" id="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>