<?php
include "conecta.php";

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se o nome de usuário e senha estão corretos
  if ($_POST['nome'] === 'gomeso' && $_POST['password'] === 'julinhateamo') {
    // Inicia uma sessão para o usuário logado
    session_start();
    $_SESSION['username'] = $_POST['username'];
    // Redireciona para a página protegida
    header('Location: Menuprincipal.php');
    exit();
  } else {
    echo '<font color=red><center>Você não tem permissão para acessar essa página!';
  }
}
?>
<center>
<input type="button" value="Voltar" onClick="location.href='loginADM.php'"> &nbsp;<br>
</center>