<?php
require_once "../head.php";

?>

<body style="background-color: #ccc;">

    <div class="container" id="divCont" style="width: 500px; margin-top: 20px; margin-bottom: 20px; border-radius: 15px; border: 4px solid gray; background-color: #077">

        <div style="padding: 10px;">
            <center>
                <img src="../assets/cadeado.png" alt="cadeado" width="100px" height="100px">
            </center>

            <form action="insertUser.php" method="POST">

                <div class="form-group">
                    <label style="font-size: 28px;">Nome de Usuário</label>
                    <input type="text" name="nomeusuario" class="form-control" placeholder="Nome Completo" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label style="font-size: 28px;">Email</label>
                    <input type="email" name="emailusuario" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <label style="font-size: 28px;">Senha</label>
                    <input id="txtSenha" type="password" name="senhausuario" class="form-control" placeholder="Senha">
                </div>

                <div class="form-group">
                    <label style="font-size: 28px;">Repita sua Senha</label>
                    <input id="repetirSenha" type="password" name="senhausuario2" class="form-control" placeholder="Senha" required oninput="validarSenha(this)">
                    <small style="color: red;">As duas senhas precisam ser iguais</small>
                </div>

                <div class="form-group">
                    <label style="font-size: 23px;">Nível de Acesso</label>
                    <select name="acesso" class="form-control">
                        <optgroup>
                            <option value="1">Administrador</option>
                            <option value="2">Funcionário</option>
                            <option value="3">Conferente</option>
                        </optgroup>
                    </select>
                </div>

                <div style="text-align: right; margin: 20px">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validarSenha(input) {
            if(input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity("Repita a senha corretamente!")
            }else{
                input.setCustomValidity('')
            }
        }
    </script>
</body>