<?php
require_once "src/head.php";

?>

<body style="background-color: #664499;">
    <div class="container" id="divCont" style="width: 300px; margin-top: 150px; border-radius: 15px; border: 4px solid #663999; background-color: #662299">
        <div style="padding: 10px;">
            <center>
                <img src="src/assets/cadeado.png" alt="cadeado" width="100px" height="100px">
            </center>
            <form action="validarLogin.php" method="POST">
                <div class="form-group">
                    <label style="font-size: 28px;">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="email do usuario">
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
    
    <div style="color: white;">
    <center>
        <p>Não possui cadastro, clique <a href="src/cadastrarUsuario/cadastrar_usuario_externo.php" style="color: blue;">aqui</a></p>
    </center>
    </div>
</body>