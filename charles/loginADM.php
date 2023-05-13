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
        <form id="form" action="recebe_loginADM.php" method="post">
            <div class="main-login">
                <div class="left-login">
                    <h1>ADMINISTRAÇÃO</h1>
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
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>