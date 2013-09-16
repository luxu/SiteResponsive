<?php
include_once '../../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';

include_once DIR . FUNCTIONS . 'jquery.php';

//ajaxjQuery('index.php', 'veiculo');
ajaxjQuery('index.php','data','location.href="'.URL.MODULOS.'pecas/list_pecas.php";');
?>
<div id="conteudo">
    <h1>Cadastro de Peças</h1>

    <div id="retorno"></div>
    <div id="load"><img src="<?php echo URL . IMG ?>load.gif" alt="" /><br />Aguarde, processando...</div>

    <form id="form" oninput="total.value=parseInt(preco.value)*parseInt(qtdProduto.value)">
        <input type="hidden" name="action" id="action" value="salvar" />
        <p>
            <label for="veiculo">Qual o veículo?</label>
            <select name="veiculo" id="veiculo">
               <option value="carro">CARRO</option>
               <option value="moto">MOTO</option>
            </select>
        </p>
        <p>
            <label for="data">Data</label>
            <input type="date" name="data" id="data"/>
        </p>
        <p>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao"/>
        </p>
        <p>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco"/>
        </p>
        <p>
            <label for="qtdProduto">Qtd Produto:</label>
            <input type="number" name="qtdProduto" id="qtdProduto"/>
        </p>
        <p>
            <label for="total">Total Pago:</label>
            <input type="number" name="total" id="total"/>
        </p>
        <p>
            <label for="troca">Troca (em KM):</label>
            <input type="number" name="troca" id="troca"/>
        </p>
        <p>
            <label for="proxTroca">Próxima Troca (em KM):</label>
            <input type="number" name="proxTroca" id="proxTroca"/>
        </p>
        <p>
            <label for="comercio">Comércio:</label>
            <input type="text" name="comercio" id="comercio"/>
        </p>
        <p>
            <label for="local">Localidade:</label>
            <input type="text" name="local" id="local"/>
        </p>
        <p>
            <input type="submit" value="Salvar" />
            <input type="reset" style="display: none;" id="limpar" value="apagar" />
        </p>
    </form>
</div>

<?php include_once DIR . INCLUDES . 'rodape.php'; ?>