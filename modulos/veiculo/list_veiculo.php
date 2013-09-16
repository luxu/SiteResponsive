<?php
include_once '../../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
include_once DIR . FUNCTIONS . 'jquery.php';
DataTable();
botaoNovo(URL . MODULOS . 'veiculo/ad_veiculo.php');
?>
<div id="main" role="main">
    <h4>Listagem dos Veículos</h4>
    <form id="form">
        <input type="hidden" name="action" id="action" value="excluir"/>
        <input type="button" id="novo" name="novo" value="Novo" class="btnNovo" />
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Data</th>
                    <th>Inic</th>
                    <th>Final</th>
                    <th>=</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($oquefazer->registros = $oquefazer->resultado->FetchNextObj()): ?>
                    <tr>
                        <th><?php echo $oquefazer->registros->idveiculo; ?></th>
                        <th><?php echo $oquefazer->registros->data; ?></th>
                        <th><?php echo $oquefazer->registros->kminicial; ?></th>
                        <th><?php echo $oquefazer->registros->kmfinal; ?></th>
                        <th><?php echo $oquefazer->registros->distanciapercorrida; ?></th>
                        <th><a href="<?php echo URL . MODULOS ?>veiculo/index.php?tabela=veiculo&acao=alterar&codigo=<?php echo $oquefazer->registros->idveiculo; ?>">editar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Data</th>
                    <th>Inic</th>
                    <th>Final</th>
                    <th>=</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
