<?php
$cid_codigo = '';
$cid_descricao = '';
$cid_uf = '';
if (isset($oquefazer->registros)) {
    $cid_codigo = $oquefazer->registros->cid_codigo;
    $cid_descricao = $oquefazer->registros->cid_descricao;
    $cid_uf = $oquefazer->registros->cid_uf;
}
?>
<form id="form1" name="form_cadastro" method="post" action="index.php">
    <div align="center">
        <table width="432" border="1" cellpadding="5" cellspacing="5" class="borda_tabela">
            <tr>
                <td colspan="2"><div align="center">
                        <h1 class="titulos_lista_pesquisa">Manutenção de Cidades</h1>
                    </div></td>
            </tr>
            <tr>
                <td width="54">Nome</td>
                <td width="337"><input type="text" name="cid_descricao" id="cid_descricao" 
                                       value="<?php echo $cid_descricao; ?>" /></td>
            </tr>
            <tr>
                <td>UF</td>
                <td><label for="cid_uf"></label>
                    <select name="cid_uf" id="cid_uf">
<?php
$estado1 = '';
$estado2 = '';
$estado3 = '';
$estado4 = '';
$estado5 = '';
$estado6 = '';
switch ($cid_uf) {
    case 'SC' : $estado1 = 'selected';
        break;
    case 'PR' : $estado2 = 'selected';
        break;
    case 'RS' : $estado3 = 'selected';
        break;
    case 'TO' : $estado4 = 'selected';
        break;
    case 'SP' : $estado5 = 'selected';
        break;
    case 'RJ' : $estado6 = 'selected';
        break;
}
?>
                        <option value="SC" <?php echo $estado1; ?>>SC</option>
                        <option value="PR" <?php echo $estado2; ?>>PR</option>
                        <option value="RS" <?php echo $estado3; ?>>RS</option>
                        <option value="TO" <?php echo $estado4; ?>>TO</option>
                        <option value="SP" <?php echo $estado5; ?>>SP</option>
                        <option value="RJ" <?php echo $estado6; ?>>RJ</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2"><label for="textfield"></label>
                    <div align="center">
                        <input type="submit" name="button" id="button" value="Salvar" />
                        <input type="reset" name="button2" id="button2" value="Limpar" />
                        <input type="button" name="button3" id="button3" value="Cancelar" />
                    </div>
                    <input type="hidden" name="tabela" value="cidade" />
                    <input type="hidden" name="acao" value="<?php echo 'gravar_' . $acao; ?>" />
                    <input type="hidden" name="codigo" value="<?php echo $cid_codigo; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2" class="titulos_lista_pesquisa">Rodapé</td>
            </tr>
        </table>
    </div>
</form>