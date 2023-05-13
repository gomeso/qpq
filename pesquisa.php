<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ff.css">
    <title></title>
</head>
    <body>
        <center>
            <form action="recebe_pesquisa.php" method="post">
                Entre com o Codigo: <input type="number" name="codigo">
                Entre com o Nome: <input type="text" name="nome">
                <input type="submit" name="submit" value="Pesquisar">
            </form>
            <input type="button" value="Pagina Inicial" onClick="location.href='Menuprincipal.php'"> &nbsp;<br>
        </center>
</html>
<?php
    include("conecta.php");

    //verifica se teve conexão
    if($conn)
    {
        //comando para pesquisa no banco
        $db = mysqli_select_db($conn, "aulas");
        

        // comando sql para selecionar  na tabela ex: faz a contagem de dados inseridos
        $sql = "SELECT count(id) from aula1";

        /* executa o comando sql, caso de algum erro na instrução sql ele mostra a msg de erro */
        $contador = mysqli_query($conn, $sql) or die("não foi possivel executar o comando sql");

        // recebe a quantidade de linhas
        $res = mysqli_fetch_row($contador);
        // joga o conteúdo do vetor numa variável
        $num = $res[0];
        echo "<center>Quantidade de registros: <font color=white size=6>".$num;
        echo "</font><hr>";
        
        $sql1 = "SELECT  * from aula1";
        $resultado = mysqli_query($conn, $sql1) or die("não foi possivel executar o comando sql");

        // monta array com os dados do resultado, enquanto existir dados no banco ele irá mostrando registro por registro
        while($conteudo = mysqli_fetch_array($resultado))
        {
            $codigo = $conteudo[0];
            $nome = $conteudo[1];
            $sexo = $conteudo[2];
            $cpf = $conteudo[3];
            $password = $conteudo[4];

            echo "<table width='50%' align='center' bgcolor='white' border='2'>
            <tr>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>CODIGO</font>
                </td>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>NOME</font>
                </td>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>CPF</font>
                </td>
                <td align='center' width='20%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>SEXO</font>
                </td>
                <td align='center' width='20%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>SENHA</font>
                </td>
            <tr>
            <tr>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$codigo</font>
                </td>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$nome</font>
                </td>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$sexo</font>
                </td>
                <td align='center' width='20%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$cpf</font>
                </td>
                <td align='center' width='20%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$password</font>
                </td>";

        }
    }
    else
    {
        echo "não houve conexão com o banco";
    }
?>
