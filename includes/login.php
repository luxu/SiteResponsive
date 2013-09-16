<?php include_once '../config/config.php'; ?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Trampo Mackinson</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo URL . CSS ?>style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="main" role="main">
            <form id="form" method="post" action="autentica.php">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <table width="250" border="1" align="center" cellpadding="5" cellspacing="5" class="borda_tabela">
                    <thead>
                        <tr><td colspan="2" align="center" class="titulos_lista_pesquisa">Acesso ao sistema</td></tr>
                        <tr><td><label for="usu_login">Login</label></td><td><input name="login" id="login" type="text" size="15" /></td></tr>
                        <tr><td>Senha</td><td><label for="usu_senha"></label><input type="password" name="senha" id="senha" size="15" /></td></tr>
                        <tr><td colspan="2" class="titulos_lista_pesquisa" style="padding-left:50px;">
                                <input type="submit" id="enviar" name="enviar" value="Entrar" class="btnLogin"/>
                            </td>
                        </tr>
                    </thead>
                </table>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </form>
        </div>
    </body>
</html>