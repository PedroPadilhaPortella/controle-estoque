<?php
require_once "src/head.php";

?>

<body style="background-color: #664499;">
    <div class="container" id="divCont" style="width: 300px; margin-top: 200px; border-radius: 15px; border: 4px solid #663999; background-color: #662299">
        <div style="padding: 10px;">
            <center>
                <img src="src/assets/cadeado.png" alt="cadeado" width="100px" height="100px">
            </center>
            <form action="" method="POST">
                <div class="form-group">
                    <label style="font-size: 28px;">Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="nome de usuario">
                </div>
                <div class="form-group">
                    <label style="font-size: 28px;">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="senha">
                </div>
                <div style="text-align: right; margin: 20px">
                    <button type="submit" id="submit" class="btn btn-success">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>