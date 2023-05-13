<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">

    <script language="javascript">      
        function mascara(src, mask)
            {
                var i = src.value.length;
                var saida = mask.substring(1,2);
                var texto = mask.substring(i);
                if (texto.substring(0,1) != saida)
                {
                    src.value += texto.substring(0,1);
                } 
            }

            function validarFormulario() {
                var password = document.getElementsByName('password')[0].value;
                var cpf = document.getElementsByName('cpf')[0].value;
                var mensagemErro = "";

                if (password.length < 8) {
                  mensagemErro += "A senha deve ter no mínimo 8 caracteres.\n";
                }
            
                if (cpf.length < 11) {
                  mensagemErro += "O CPF deve ter no mínimo 11 dígitos.\n";
                }
            
                if (mensagemErro !== "") {
                  alert(mensagemErro);
                  return false;
                }
            }




    </script>
    <title></title>
</head>
    <body>  
        <form id="form" action="recebe_cadastro.php" method="post" onsubmit="return validarFormulario()">
            <div class="main-login">

                <div class="right-login">
                    <div class="card-login">
                        <h1>REGISTRE-SE</h1>
                        <div class="textfield">
                            <label for="text">Nome de Usuário</label>
                            <input type="text" name="nome" placeholder="Digite seu nome de Usuário">
                        </div>
                        <div class="textfield">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" size="30" maxlength="14" placeholder="Digite seu CPF" onKeyPress="mascara(this, '###.###.###-##')">
                        </div>
                        <div class="textfield">
                            <label for="sexo">Sexo</label>
                            <input type="radio" name="sexo" value="Masculino">Masculino
                            <input type="radio" name="sexo" value="Feminino">Feminino   
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="password" placeholder="Digite uma Senha (mínimo 8 caracteres)">
                        </div>
                        <button class="btn-login">Registrar</button>
                        <p>Já tem uma conta?<a href="login.php">Acessar Conta</a></p>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>