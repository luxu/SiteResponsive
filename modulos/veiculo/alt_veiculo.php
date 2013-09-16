<?php
include_once '../../config/config.php';
include_once DIR.INCLUDES.'topo.php';
include_once DIR.INCLUDES.'menu.php';

?>
<div id="conteudo">
    <h4>Alteração de Veículos</h4>
	<div id="main" role="main">
		<form id="formAlt" oninput="distanciapercorrida.value=parseInt(kmfinal.value)-parseInt(kminicial.value)" action="index.php" method="post">
			<input type="hidden" name="tabela" value="veiculo" />
			<input type="hidden" name="acao" value="<?php echo 'gravar_alterar';?>" />
			<input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->idveiculo;?>" />
			<p><label for="localidade">Veículo:</label>
				<select name="veiculo" id="veiculo">
				   <option value="carro" <?php echo ($oquefazer->registros->veiculo=='carro') ? 'selected="selected"' : '';?>>CARRO</option>
				   <option value="moto" <?php echo ($oquefazer->registros->veiculo=='moto') ? 'selected="selected"' : '';?>>MOTO</option>
				</select>
			</p>
			<p><label for="data">Data</label><input type="date" name="data" id="data" value="<?php echo $oquefazer->registros->data?>"/></p>
			<p><label for="kminicial">KM Inicial</label><input type="number" id="kminicial" name="kminicial" value="<?php echo $oquefazer->registros->kminicial?>"/></p>
			<p><label for="kmfinal">KM Final</label><input type="number" id="kmfinal" name="kmfinal" value="<?php echo $oquefazer->registros->kmfinal?>"/></p>
			<p><label for="distanciapercorrida">Distancia Percorrida</label><input type="number" id="distanciapercorrida" name="distanciapercorrida" value="<?php echo $oquefazer->registros->distanciapercorrida?>" style="width:100px;" /></p>
			<p><label for="litrosabastecidos">Litros Abastecidos</label><input step="0.10" type="number" name="litrosabastecidos" id="litrosabastecidos" value="<?php echo $oquefazer->registros->litrosabastecidos?>" style="width:100px;" /></p>
			<p><input type="submit" value="Salvar" /><input type="reset" style="display: none;" id="limpar" value="apagar" /></p>
		</form>
	</div>
<?php include_once DIR.INCLUDES.'rodape.php'; ?>