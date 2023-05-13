<link rel="stylesheet" href="ff.css">
<?php
    if(!empty($_POST['codigo'])) {

        $codigo = $_POST['codigo'];

        include "conecta.php";
        if($conn) {
            // seleciona o banco de dados
            $db = mysqli_select_db($conn, "aulas");

            //comando sql para deletar o arquivo na tabela
            $sql = "DELETE FROM aula1 WHERE id = '$codigo'";

            /* executa o comando sql, caso de algum erro na instrução sql ele mostra a msg de erro */
            mysqli_query($conn, $sql) or die("não foi possível executar o comando Sql");
            echo "<center><b><font color=red>Registro excluido com sucesso";
            mysqli_close($conn);
            
            
        }
        else
        {
            echo "Não tem conexão com o banco de dados";
        }
    }
    else
    {
        echo "<center><font color=red>Favor preencha o codigo";
    }
?>