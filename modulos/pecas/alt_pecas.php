<?php
include_once '../../config/config.php';
include_once DIR.INCLUDES.'topo.php';
include_once DIR.INCLUDES.'menu.php';

include_once DIR.FUNCTIONS.'jquery.php';

ajaxjQuery('index.php','data','location.href="'.URL.MODULOS.'pecas/list_pecas.php";');

if(!isset($_GET['modulo']) || empty($_GET) || !is_numeric($_GET['modulo'])){
   echo '<script>history.back();</script>';
}

$resultMod = mysql_query("SELECT * FROM `pecas` WHERE idpecas='$_GET[modulo]'") or die(mysql_error());

if(mysql_num_rows($resultMod)<=0){
   echo '<script>history.back();</script>';
}

$rowMod = mysql_fetch_object($resultMod) or die(mysql_error());

?>
<div id="conteudo">
    <h1>Alteração de Peças</h1>

    <div id="retorno"></div>
    <div id="load"><img src="<?php echo URL.IMG?>load.gif" alt="" /><br />Aguarde, processando...</div>

    <form id="form" >
       <input type="hidden" name="action" id="action" value="alterar" />
       <input type="hidden" name="modulo" id="modulo" value="<?php echo $_GET['modulo']?>" />
        <p>
            <label for="localidade">Qual o veículo?</label>
            <select name="veiculo" id="veiculo">
               <option value="carro" <?php echo ($rowMod->veiculo=='carro') ? 'selected="selected"' : '';?>>CARRO</option>
               <option value="moto" <?php echo ($rowMod->veiculo=='moto') ? 'selected="selected"' : '';?>>MOTO</option>
            </select>
        </p>
        <p>
            <label for="data">Data</label>
            <input type="date" name="data" id="data" value="<?php echo $rowMod->data?>"/>
        </p>
        <p>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="<?php echo $rowMod->descricao?>"/>-
        </p>
        <p>
            <label for="preco">Preço:</label>
            <input type="text" id="preco" name="preco" value="<?php echo $rowMod->preco?>"/>=
        </p>
        <p>
            <label for="qtdProduto">Qtd Produto:</label>
            <input type="text" id="qtdProduto" name="qtdProduto" value="<?php echo $rowMod->qtdProduto?>"/>
        </p>
        <p>
            <label for="total">Total Pago:</label>
            <input type="number" name="total" id="total" value="<?php echo $rowMod->total?>"/>
        </p>
        <p>
            <label for="troca">Troca (em KM):</label>
            <input type="text" name="troca" id="troca" value="<?php echo $rowMod->troca?>"/>
        </p>
        <p>
            <label for="proxTroca">Próxima Troca (em KM):</label>
            <input type="text" name="proxTroca" id="proxTroca" value="<?php echo $rowMod->proxTroca?>"/>
        </p>
        <p>
            <label for="comercio">Comércio:</label>
            <input type="text" name="comercio" id="comercio" value="<?php echo $rowMod->comercio?>"/>
        </p>
        <p>
            <label for="local">Local:</label>
            <input type="text" name="local" id="local" value="<?php echo $rowMod->local?>"/>
        </p>
        <p>
            <input type="submit" value="Salvar" />
            <input type="reset" style="display: none;" id="limpar" value="apagar" />
        </p>
    </form>
</div>

<?php include_once DIR.INCLUDES.'rodape.php';?>