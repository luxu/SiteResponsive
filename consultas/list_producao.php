<?php
include_once '../config/config.php';
include_once DIR . INCLUDES . 'topo.php';
include_once DIR . INCLUDES . 'menu.php';
include_once DIR . FUNCTIONS . 'jquery.php';
DataTable();
ajaxjQuery(URL.PAGINAS.'index.php','ec','location.href="'.URL.CONSULTAS.'list_trampo.php";');
$data = "'".date('Y-m-d')."'";
$resultMod = mysql_query("SELECT idTrampo, Data, EC, Conclusao, Valor FROM trampo WHERE Data = $data") or die(mysql_error());

$resultMod2 = mysql_query("SELECT idTrampo, Data, EC, Conclusao, Valor FROM trampo WHERE Data = $data") or die(mysql_error());
  
$total = 0;$qtdMaquina = 0;$cielo = 0;$get = 0;
    if (mysql_num_rows($resultMod2) > 0){
       while ($rowMod = mysql_fetch_object($resultMod2)){
			$qtdMaquina++;
			$total += $rowMod->Valor;
			if(strpos($rowMod->Conclusao, "GET")){
					$get++;
			}else {	$cielo++; }
       }
    }
?>
<div id="main" role="main">
		<h2>Produções do dia</h2>
		<a href="<?php echo URL . CONSULTAS ?>listarDiaDoMes.php"><h3>Dias</h3></a>
		<form id="form">
			<table width="200" border="1" cellspacing="0" cellpadding="0">
			  <tr align="center">
				<td>GET</td>
				<td>CIELO</td>
				<td>QT</td>
				<td>$$</td>
			  </tr>
			  <tr align="center">
				<td><?php echo $get; ?></td>
				<td><?php echo $cielo; ?></td>
				<td><?php echo $qtdMaquina; ?></td>
				<td><?php echo 'R$ ' . $total . ',00'; ?></td>
			  </tr>
			</table>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
				   <tr>
						<th >EC</th>
						<th>Tecnologia</th>
						<th>Vlr</th>
						<th></th>
				   </tr>
				</thead>
				<?php if (mysql_num_rows($resultMod) > 0): ?>
				<tbody>
				   <?php while ($rowMod = mysql_fetch_object($resultMod)):?>
					  <tr>
						 <th ><?php echo $rowMod->EC; ?></th>
						 <th><?php echo ($rowMod->Tecnologia) ? 'CIELO' : 'GET'; ?></th>
						 <th><?php echo $rowMod->Valor;?></th>
					  <th>
							<a href="<?php echo URL . PAGINAS ?>alt_trampo.php?idTrampo=<?php echo $rowMod->idTrampo?>&valor=<?php echo $rowMod->Valor?>">
								<!-- <img src="<?php echo URL . IMG ?>bt_edit.png" alt ="" title="Alterar" -->
								editar
							</a>
						</th>
					  </tr>
					  <?php endwhile; ?>
				</tbody>
				<?php else: ?>
				   <tr><th colspan="4">Nenhum registro encontrado!</th></tr>
				<?php endif; ?>
		   <tfoot>
			   <tr>
					<th >EC</th>
					<th>Tecnologia</th>
					<th>Vlr</th>
					<th></th>
			   </tr>
			</tfoot>
         </table>
      </form>
</div>
<?php include_once DIR . INCLUDES . 'rodape.php'; ?>
