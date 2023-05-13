<html>
<head>
    <meta charset="UTF-8">
    <title></title>
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
        </script>
    </head>
        <body>
            <form id="form" method="post" action="recebe_cadastro.php" >
     
            <table width="50%" border="1" align="center" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="center" bgcolor="navy" colspan="2">
                    <font color="#FFFFFF" face="Verdana, Geneva, sans-serif" size="4">Cadastre-se para acessar o site</font></td>
                </tr>
                
                <tr>
                    <td align="right" bgcolor="#0000CC"><font color="#FFFFFF">Digite seu nome:</font></td>
                <td bgcolor='#C6E2FF'><input type="text" name="nome1" size="30"></td>
                </tr>

                <tr>
                 <td align="right" bgcolor="#0000CC"><font color="#FFFFFF">CPF:</font></td>
                <td bgcolor='#C6E2FF'>
                    <input type="text" name="cpf" size="30" maxlength="14" onKeyPress="mascara(this, '###.###.###-##')">
                </td>
                </tr>
                
                <tr>
                    <td align="right" bgcolor="#0000CC"><font color="#FFFFFF">Sexo:</font></td>
                    <td bgcolor='#C6E2FF'>
                        <input type="radio" name="sexo" value="Masculino">Masculino
                        <input type="radio" name="sexo" value="Feminino">Feminino                 
                    </td>

                </tr>
                    <tr>
                    <td align="right" bgcolor="#0000CC"><font color="#FFFFFF">Senha:</font></td>
                    <td bgcolor='#C6E2FF'>
                        <input type="password" name="password">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center" bgcolor="#0000CC">
                    <input type="submit" name="submit" value="Gravar dados">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center" bgcolor='#C6E2FF'>
                    <input type="button" value="Pagina Inicial" onClick="location.href='Menuprincipal.php'"> &nbsp;<br>
                    </td>
                </tr>    
            </table>    
        </form> 
    </body>
</html>