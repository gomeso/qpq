<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title></title>
</head>
    <body>
        <form id="form" action="recebe-login.php" method="post">
            <div class="main-login">
                <div class="left-login">
                    <h1>Faça login<br>Para explorar mais o nosso site</h1>
                    <img src="img/Gym.gif" class="img-login" alt="gym">
                </div>
                <div class="right-login">
                    <div class="card-login">
                        <h1>LOGIN</h1>
                        <div class="textfield">
                            <label for="text">Usuário</label>
                            <input type="text" name="nome" placeholder="Usuário" required> 
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="password" placeholder="Senha" required>
                        </div>
                        <input class="btn-login" type="submit" value="Login">
                        <p>Ainda não tem uma conta?<a href="cadastro1.php">Criar Conta</a></p>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>