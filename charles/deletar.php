<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ff.css">
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
            <form id="form" method="post" action="recebe_delete.php" >
     
            <table class="gg"border="1" align="center" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="center" colspan="2">Apagar Funcionário</td>
                </tr>
                
                <tr>
                    <td align="right">Digite o codigo:</td>
                <td><input type="number" name="codigo" size="30"></td>
                </tr>
       
                <tr>
                    <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Apagar dados">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                    <input type="button" value="Pagina Inicial" onClick="location.href='Menuprincipal.php'"> &nbsp;<br>

                    </td>
                </tr>    
            </table>    
        </form> 
    </body>
</html>