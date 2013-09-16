<?php
include_once '../../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
include_once DIR . FUNCTIONS . 'jquery.php';
DataTable();
ajaxjQuery('index.php','action','history.go();');
?>
<div id="conteudo">
    <h1>Listagem de Peças</h1>
    <div id="retorno"></div>
    <div id="load"><img src="<?php echo URL.IMG?>load.gif" alt="" /><br />Aguarde, processando...</div>
    <p><input type="button" value="Novo" class="btnNovo" 
              onclick="location.href='http://localhost/Makinson/modulos/pecas/ad_pecas.php';" /></p>
    <form id="form">
         <input type="hidden" name="action" id="action" value="excluir"/>
         <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Data</th>
                  <th>Veiculo</th>
                  <th>PróxTroca</th>
                  <th>Troca</th>
                  <th>Local</th>
                  <th>Comércio</th>
                  <th>Total</th>
                  <th>Qtd Prod.</th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <?php
            $resultMod = mysql_query("SELECT * FROM `pecas`") or die(mysql_error());
            if (mysql_num_rows($resultMod) > 0): ?>
            <tbody>
               <?php while ($rowMod = mysql_fetch_object($resultMod)):?>
                  <tr >
                     <th><?php echo $rowMod->idpecas;?></th>
                     <th><?php echo $rowMod->descricao;?></th>
                     <th><?php echo $rowMod->preco;?></th>
                     <th><?php echo $rowMod->data;?></th>
                     <th><?php echo ($rowMod->veiculo == 'carro') ? 'CARRO': 'MOTO'; ?></th>
                     <th><?php echo $rowMod->proxTroca;?></th>
                     <th><?php echo $rowMod->troca;?></th>
                     <th><?php echo $rowMod->local;?></th>
                     <th><?php echo $rowMod->comercio;?></th>
                     <th><?php echo number_format($rowMod->total, 2, '.', '');?></th>
                     <th><?php echo $rowMod->qtdProduto;?></th>
                     <th><a href="<?php echo URL . MODULOS ?>pecas/alt_pecas.php?modulo=<?php echo $rowMod->idpecas ?>"><img src="<?php echo URL . IMG ?>bt_edit.png" alt ="" title="Alterar"</a></th>
                     <th><input type="checkbox" name="modulos[]" value="<?php echo $rowMod->idpecas;?>"/><img src="<?php echo URL . IMG ?>bt_delete.png" alt ="" title="Excluir"</th>
                  </tr>
               <?php endwhile; ?>
            </tbody>
            <?php else: ?>
               <tr><th colspan="5">Nenhum registro encontrado!</th></tr>
            <?php endif; ?>
            <tfoot>
               <tr>
                  <th>ID</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Data</th>
                  <th>Veiculo</th>
                  <th>PróxTroca</th>
                  <th>Troca</th>
                  <th>Local</th>
                  <th>Comércio</th>
                  <th>Total</th>
                  <th>Qtd Prod.</th>
                  <th></th>
                  <th></th>
               </tr>
            </tfoot>
         </table>
        <p><input type="submit" value="Excluir" class="btnExc" /></p>
      </form>
   </div>
<?php include_once DIR . INCLUDES . 'rodape.php'; ?>