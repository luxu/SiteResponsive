<?php
include_once '../../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
?>
<h3>Cadastro de Veículo</h3>
<div id="main" role="main">
    <form id="form" oninput="distanciapercorrida.value=parseInt(kmfinal.value)-parseInt(kminicial.value)" action="index.php" method="post">
        <input type="hidden" name="tabela" value="veiculo" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_incluir'; ?>" />
        <p>
            <label for="localidade">Veículo:</label>
            <select name="veiculo" id="veiculo">
                <option value="carro">CARRO</option>
                <option value="moto">MOTO</option>
            </select>
        </p>
        <p>
            <label for="data">Data</label>
            <input type="date" name="data" id="data" value="<?php echo date('Y-m-d'); ?>" />
        </p>
        <p>
            <label for="kminicial">KM Inicial</label>
            <input type="number" id="kminicial" name="kminicial" />
        </p>
        <p>
            <label for="kmfinal">KM Final</label>
            <input type="number" id="kmfinal" name="kmfinal" />
        </p>
        <p>
            <label for="distanciapercorrida">Distância</label>
            <input type="number" id="distanciapercorrida" name="distanciapercorrida" />
        </p>
        <p>
            <label for="litrosabastecidos">Abastecidos</label>
            <input value="20" step="0.1" type="number" name="litrosabastecidos" id="litrosabastecidos"/>
        </p>
        <p>
            <input type="submit" value="Salvar" />
            <input type="reset" style="display: none;" id="limpar" value="apagar" />
        </p>
    </form>
</div>
