<?php
include_once '../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
include_once DIR . FUNCTIONS . 'jquery.php';

DataTable();
$query = mysql_query("select idTrampo,Data,EC from trampo group by Data") or die(mysql_error());
$qtdDatas = 0;
while ($row = mysql_fetch_array($query)) {
   $qtdDatas++;
}
$resultMod = mysql_query("select idTrampo,Data,EC from trampo group by Data") or die(mysql_error());
//                        date_default_timezone_set( 'America/Sao_Paulo' );
setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );

?>
<div id="conteudo">
      <h1>Listagem dos Dias Trabalhados</h1>

      <form id="form">
        <input type="hidden" name="action" id="action" value="excluirItemModulos"/>
        Quantidade de dias:<input type="number" value="<?php echo $qtdDatas;  ?>"/>
        <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
            <thead>
               <tr>
                  <th>idTrampo</th>
                  <th>Data</th>
                  <th>Dia</th>
               </tr>
            </thead>
            <?php if (mysql_num_rows($resultMod) > 0): ?>
            <tbody>
               <?php while ($rowMod = mysql_fetch_object($resultMod)):?>
                  <tr>
                     <th><?php echo $rowMod->idTrampo; ?></th>
                     <th><?php
                        $d=explode("-",$rowMod->Data);
                        echo $d[2]."/".$d[1]."/".$d[0];
                     ?></th>
                     <th><?php
                        echo strftime( '%A', strtotime( $rowMod->Data ) );
                     ?></th>
                  </tr>
                  <?php endwhile; ?>
            </tbody>
            <?php else: ?>
               <tr><th colspan="4">Nenhum registro encontrado!</th></tr>
            <?php endif; ?>
           <tfoot>
               <tr>
                  <th>idTrampo</th>
                  <th>Data</th>
                  <th>Dia</th>
               </tr>
            </tfoot>
         </table>
      </form>
   </div>
