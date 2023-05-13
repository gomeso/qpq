
<?php
if (!empty($_POST['nome']) && !empty($_POST['sexo']) && !empty($_POST['cpf']) && !empty($_POST['password'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $password = $_POST['password'];

    include("conecta.php");

    // verifica se houve conexão
    if ($conn) {
        // seleciona o banco de dados
        $db = mysqli_select_db($conn, "aulas");

        if (!$db) {
            die("Não foi possível selecionar o banco de dados: " . mysqli_error($conn));
        }

        // verifica se o CPF já está cadastrado
        $sql2 = "SELECT * FROM aula1 WHERE cpf = '$cpf'";
        $resultado = mysqli_query($conn, $sql2) or die("Não foi possível executar o comando SQL");

        $verifica = mysqli_num_rows($resultado);

        if ($verifica > 0) {
            // CPF já cadastrado, exibe mensagem de erro em uma janela pop-up
            echo "<script>
                    alert('O CPF digitado já está cadastrado.');
                    window.history.back();
                  </script>";
            exit();
        } else {
            // CPF não cadastrado, realiza o registro

            // comando SQL para inserir na tabela
            $sql = "INSERT INTO aula1 (id, nome, cpf, sexo, password) VALUES ('', '$nome', '$cpf', '$sexo', '$password')";

            //* executa o comando SQL, caso ocorra algum erro na instrução SQL, mostra a mensagem de erro */
            mysqli_query($conn, $sql) or die("Não foi possível executar o comando SQL");

            // redireciona para a página principal após o registro
            header("Location: inter.php");
            exit();
        }
    } else {
        echo "<center><font color=red>Não houve conexão com o banco</font></center>";
    }
} else {
    echo "<center><font color=red>Todos os campos devem ser preenchidos</font></center>";
}
?>


