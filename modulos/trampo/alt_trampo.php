<?php
include_once '../../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
?>
<div id="main" role="main">
    <h4>Alteração de OS</h4>
    <form id="form" action="index.php" method="post">
        <input type="hidden" name="tabela" value="trampo" />
        <input type="hidden" name="acao"   value="gravar_alterar" />
        <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->idTrampo ?>" />
        <p><label for="data">Data</label><input type="date" value="<?php echo $oquefazer->registros->Data ?>" name="data" id="data" /></p>
        <p><label for="ec">EC</label><input type="text" value="<?php echo $oquefazer->registros->EC ?>" name="ec" id="ec" /></p>
        <p><label for="nroos">Nro_OS</label><input type="text" value="<?php echo $oquefazer->registros->NRO_OS ?>" name="nroos" id="nroos" /></p>
        <p><label for="conclusao">Conclusão</label>
            <select name="conclusao" id="conclusao">
                <option value="<?php echo $oquefazer->registros->Conclusao; ?>"><?php echo $oquefazer->registros->Conclusao; ?></option>
                <option value="FORA-GET-INSTALAÇÃO - R$ 8,00">FORA-GET-INSTALAÇÃO - R$ 8,00</option>
                <option value="FORA-CIELO-INSTALAÇÃO - R$ 5,00">FORA-CIELO-INSTALAÇÃO - R$ 5,00</option>
                <option value="FORA-GET-MANUTENÇÃO - R$ 8,00">FORA-GET-MANUTENÇÃO - R$ 8,00</option>
                <option value="FORA-CIELO-TROCA - R$ 5,00">FORA-CIELO-TROCA - R$ 5,00</option>
                <option value="FORA-CIELO-CANCELADA - R$ 5,00">FORA-CIELO-CANCELADA - R$ 5,00</option>
                <option value="FORA-GET-CANCELADA - R$ 3,00">FORA-GET-CANCELADA - R$ 3,00</option>
                <option value="FORA-GET-RETIRADA - R$ 5,00">FORA-GET-RETIRADA - R$ 5,00</option>
                <option value="FORA-CIELO-DESINSTALAÇÃO - R$ 5,00">FORA-CIELO-DESINSTALAÇÃO - R$ 5,00</option>
                <option value="FORA-CIELO-PROTOCOLADA - R$ 0,00">FORA-CIELO-PROTOCOLADA - R$ 0,00</option>
                <option value="FORA-GET-PROTOCOLADA - R$ 0,00">FORA-GET-PROTOCOLADA - R$ 0,00</option>
                <option value="FORA-CIELO-ALTERAÇÃO - R$ 5,00">FORA-CIELO-ALTERAÇÃO - R$ 5,00</option>
                <option value="FORA-CIELO_TEF-ALTERAÇÃO - R$ 4,00">FORA-CIELO_TEF-ALTERAÇÃO - R$ 4,00</option>
                <option value="PRUDENTE-GET-INSTALAÇÃO - R$ 6,00">PRUDENTE-GET-INSTALAÇÃO - R$ 6,00</option>
                <option value="PRUDENTE-CIELO-INSTALAÇÃO - R$ 5,00">PRUDENTE-CIELO-INSTALAÇÃO - R$ 5,00</option>
                <option value="PRUDENTE-GET-MANUTENÇÃO - R$ 6,00">PRUDENTE-GET-MANUTENÇÃO - R$ 6,00</option>
                <option value="PRUDENTE-CIELO-TROCA - R$ 5,00">PRUDENTE-CIELO-TROCA - R$ 5,00</option>
                <option value="PRUDENTE-GET-CANCELADA - R$ 3,00">PRUDENTE-GET-CANCELADA - R$ 3,00</option>
                <option value="PRUDENTE-CIELO-CANCELADA - R$ 5,00">PRUDENTE-CIELO-CANCELADA - R$ 5,00</option>
                <option value="PRUDENTE-GET-RETIRADA - R$ 5,00">PRUDENTE-GET-RETIRADA - R$ 5,00</option>
                <option value="PRUDENTE-CIELO-DESINSTALAÇÃO - R$ 5,00">PRUDENTE-CIELO-DESINSTALAÇÃO - R$ 5,00</option>
                <option value="PRUDENTE-CIELO-PROTOCOLADA - R$ 0,00">PRUDENTE-CIELO-PROTOCOLADA - R$ 0,00</option>
                <option value="PRUDENTE-GET-PROTOCOLADA - R$ 0,00">PRUDENTE-GET-PROTOCOLADA - R$ 0,00</option>
                <option value="PRUDENTE-CIELO-ALTERAÇÃO - R$ 5,00">PRUDENTE-CIELO-ALTERAÇÃO - R$ 5,00</option>
                <option value="PRUDENTE-CIELO_TEF-ALTERAÇÃO - R$ 4,00">PRUDENTE-CIELO_TEF-ALTERAÇÃO - R$ 4,00</option>
                <option value="ENTREGA - R$ 1,50">ENTREGA - R$ 1,50</option>
            </select>
        </p>
        <p><input type="submit" value="Salvar" /><input type="reset" style="display: none;" id="limpar" /></p>
    </form>
</div>
<?php include_once DIR . INCLUDES . 'rodape.php'; ?>