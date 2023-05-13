<?php

include "conecta.php";

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $senha);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $password = $_POST["password"];

    // Consulta para verificar o login
    $db = mysqli_select_db($conn, "aulas");
    $sql = "SELECT  * FROM aula1 WHERE nome = '$nome'";
    $result = $conn->query($sql);

    // Verifica se o usuário existe no banco de dados
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifica se a senha está correta
        if ($row["password"] == $password) {
            // Login bem-sucedido, redireciona para a página principal
            header("Location: inter.php");
            exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta!";
        }
    } else {
        // Usuário não existe, redireciona para a página de registro
        header("Location: cadastro1.php");
        exit();
    }
}
$conn->close();
?>
