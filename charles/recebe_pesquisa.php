<center>
<input type="button" name="imprimir"value="<< Imprimir >>" OnClick=print()><br></br>
<input type="button" value="Voltar" onClick="location.href='pesquisa.php'"> &nbsp;<br>
</center>
<link rel="stylesheet" href="ff.css">
<?php
    include("conecta.php");

    
    //verifica se teve conexão
    if($conn)
    {
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        
        //comando para pesquisa no banco
        $db = mysqli_select_db($conn, "aulas");
        

        // comando sql para selecionar  na tabela ex: faz a contagem de dados inseridos
        $sql = "SELECT count(id) from aula1 where id = '$codigo' or nome = '$nome'";

        /* executa o comando sql, caso de algum erro na instrução sql ele mostra a msg de erro */
        $contador = mysqli_query($conn, $sql) or die("não foi possivel executar o comando sql");

        // recebe a quantidade de linhas
        $res = mysqli_fetch_row($contador);

        
        
        // joga o conteúdo do vetor numa variável
        $num = $res[0];
        echo "<center>Quantidade de registros: <font color=white size=6>".$num;
        echo "</font><hr>";
        
        $sql1 = "SELECT  * from aula1 where id = '$codigo' or nome='$nome'";
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
                <td align='center' width='50%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>SEXO</font>
                </td>
                <td align='center' width='20%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>CPF</font>
                </td>
                <td align='center' width='40%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>SENHA</font>
                </td>
            <tr>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$codigo</font>
                </td>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$nome</font>
                </td>
                <td align='center' width='10%'>
                <font color='black' face='Verdana', Geneva, sans' size='2'>$cpf</font>
                </td>
                <td align='center' width='10%'>
                    <font color='black' face='Verdana', Geneva, sans' size='2'>$sexo</font>
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
