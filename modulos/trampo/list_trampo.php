<?php
include_once '../../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
include_once DIR . FUNCTIONS . 'jquery.php';
DataTable();
botaoNovo(URL . MODULOS . 'trampo/ad_trampo.php');
botaoProducao(URL . CONSULTAS . 'list_producao.php');
?>
<div id="main" role="main">
    <h4>Listagem Trampos</h4>
    <form id="form">
        <input type="hidden" name="action" id="action" value="excluir"/>
        <input type="button" value="Produção" id="producao" name="producao" class="btnProducao" /><br />
        <input type="button" value="Novo" id="novo" name="novo" class="btnNovo" />
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
                <tr>
                    <th width="5">id</th>
                    <th width="105">Data</th>
                    <th>EC</th>
                    <th>Valor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($oquefazer->registros = $oquefazer->resultado->FetchNextObj()): ?>
                    <tr>
                        <th width="5"><?php echo $oquefazer->registros->idTrampo; ?></th>
                        <th width="105"><?php echo $oquefazer->registros->Data; ?></th>
                        <th ><?php echo $oquefazer->registros->EC; ?></th>
                        <th ><?php echo $oquefazer->registros->Valor; ?></th>
                        <th>
                            <a href="<?php echo URL . MODULOS ?>trampo/index.php?tabela=trampo&acao=alterar&codigo=<?php echo $oquefazer->registros->idTrampo; ?>">
                            editar</a>
                        </th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th width="5">id</th>
                    <th width="105">Data</th>
                    <th >EC</th>
                    <th>Valor</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
<script>
    $(document).ready(function()
    {
        //If the User resizes the window, adjust the #container height
        $(window).bind("resize", resizeWindow);
        function resizeWindow(e)
        {
            var newWindowWidth = $(window).width();
            //var newWindowHeight = $(window).height();
            //$("#container").css("min-height", newWindowHeight );
            if (newWindowWidth > 1024)
            {
            }
            else if ((newWindowWidth >= 600) && (newWindowWidth <= 1024))
            {
                oTable.fnSetColumnVis(0, false);
                oTable.fnSetColumnVis(4, true);
            }
            else
            {
                oTable.fnSetColumnVis(0, false);
                oTable.fnSetColumnVis(4, false);
            }
        }
    }
    );
</script>

<?php include_once DIR . INCLUDES . 'rodape.php'; ?>
