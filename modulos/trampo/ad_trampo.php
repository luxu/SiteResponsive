<?php
include_once '../../config/config.php';
//include_once DIR.INCLUDES.'topo.php';
//include_once DIR.INCLUDES.'menu.php';
?>
<!DOCTYPE HTML>
  <html lang="pt-br">
   <head>
		<meta charset="UTF-8">
		<title>Trampo Mackinson</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo URL.CSS ?>style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo URL.CSS ?>jquery.autocomplete.css"/>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script type="text/javascript" src="<?php echo URL.JS ?>jquery.js"></script>
		<script type="text/javascript" src="<?php echo URL.JS ?>jquery.autocomplete.js"></script>
	</head>
    <body>
		<header>
			<a href="<?php echo URL?>"><img alt="Sem foto" src="<?php echo URL.IMG?>logo_luxu.jpg" /></a>
		</header>
            <nav class="clearfix">
				<li><a href="<?php echo URL.MODULOS?>trampo/index.php?tabela=trampo&acao=listar">Trampo</a></li>
				<li><a href="#"></a></li>
				<li><a href="<?php echo URL.MODULOS?>veiculo/index.php?tabela=veiculo&acao=listar">Veículos</a></li>
            </nav>
<h3>Cadastro de OS</h3>
	<div id="main" role="main">
		<form id="form" action="index.php" method="post">
			<input type="hidden" name="tabela" value="trampo" />
			<input type="hidden" name="acao" value="<?php echo 'gravar_incluir';?>" />
			<p><label for="data">Data</label><input type="date" name="data" id="data" value="<?php echo date('Y-m-d');?>" /></p>
			<p><label for="ec">EC</label><input type="text" value="" name="ec" id="ec" autofocus /></p>
			<p>
				<label for="conclusao">Conclusão</label>
				<select name="conclusao" id="conclusao">
				   <option value=""></option>
				   <option value="FORA-GET-INSTALAÇÃO - R$ 8,00">FORA-GET-INSTALAÇÃO - R$ 8,00</option>
				   <option value="FORA-GET-MANUTENÇÃO - R$ 8,00">FORA-GET-MANUTENÇÃO - R$ 8,00</option>
				   <option value="FORA-GET-CANCELADA - R$ 3,00">FORA-GET-CANCELADA - R$ 3,00</option>
				   <option value="FORA-GET-RETIRADA - R$ 5,00">FORA-GET-RETIRADA - R$ 5,00</option>
				   <option value="FORA-GET-PROTOCOLADA - R$ 0,00">FORA-GET-PROTOCOLADA - R$ 0,00</option>
				   <option value="FORA-CIELO-DESINSTALAÇÃO - R$ 5,00">FORA-CIELO-DESINSTALAÇÃO - R$ 5,00</option>
				   <option value="FORA-CIELO-PROTOCOLADA - R$ 0,00">FORA-CIELO-PROTOCOLADA - R$ 0,00</option>
				   <option value="FORA-CIELO-TROCA - R$ 5,00">FORA-CIELO-TROCA - R$ 5,00</option>
				   <option value="FORA-CIELO-CANCELADA - R$ 5,00">FORA-CIELO-CANCELADA - R$ 5,00</option>
				   <option value="FORA-CIELO-INSTALAÇÃO - R$ 5,00">FORA-CIELO-INSTALAÇÃO - R$ 5,00</option>
				   <option value="FORA-CIELO-ALTERAÇÃO - R$ 5,00">FORA-CIELO-ALTERAÇÃO - R$ 5,00</option>
				   <option value="FORA-CIELO_TEF-ALTERAÇÃO - R$ 4,00">FORA-CIELO_TEF-ALTERAÇÃO - R$ 4,00</option>
				   <option value="PRUDENTE-GET-INSTALAÇÃO - R$ 6,00">PRUDENTE-GET-INSTALAÇÃO - R$ 6,00</option>
				   <option value="PRUDENTE-GET-MANUTENÇÃO - R$ 6,00">PRUDENTE-GET-MANUTENÇÃO - R$ 6,00</option>
				   <option value="PRUDENTE-GET-CANCELADA - R$ 3,00">PRUDENTE-GET-CANCELADA - R$ 3,00</option>
				   <option value="PRUDENTE-GET-RETIRADA - R$ 5,00">PRUDENTE-GET-RETIRADA - R$ 5,00</option>
				   <option value="PRUDENTE-GET-PROTOCOLADA - R$ 0,00">PRUDENTE-GET-PROTOCOLADA - R$ 0,00</option>
				   <option value="PRUDENTE-CIELO-INSTALAÇÃO - R$ 5,00">PRUDENTE-CIELO-INSTALAÇÃO - R$ 5,00</option>
				   <option value="PRUDENTE-CIELO-TROCA - R$ 5,00">PRUDENTE-CIELO-TROCA - R$ 5,00</option>
				   <option value="PRUDENTE-CIELO-CANCELADA - R$ 5,00">PRUDENTE-CIELO-CANCELADA - R$ 5,00</option>
				   <option value="PRUDENTE-CIELO-DESINSTALAÇÃO - R$ 5,00">PRUDENTE-CIELO-DESINSTALAÇÃO - R$ 5,00</option>
				   <option value="PRUDENTE-CIELO-PROTOCOLADA - R$ 0,00">PRUDENTE-CIELO-PROTOCOLADA - R$ 0,00</option>
				   <option value="PRUDENTE-CIELO-ALTERAÇÃO - R$ 5,00">PRUDENTE-CIELO-ALTERAÇÃO - R$ 5,00</option>
				   <option value="PRUDENTE-CIELO_TEF-ALTERAÇÃO - R$ 4,00">PRUDENTE-CIELO_TEF-ALTERAÇÃO - R$ 4,00</option>
				   <option value="ENTREGA - R$ 1,50">ENTREGA - R$ 1,50</option>
				 </select>
			</p>
			<p><label for="qtdeec">Qtde EC</label><input type="number" value="1" name="qtdeec" id="qtdeec" /></p>
			<p><input type="submit" value="Salvar" /><input type="reset" style="display: none;" id="limpar" value="apagar" /></p>
		</form>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#ec").autocomplete("completar.php", {
					width:310,
					selectFirst: false,
					minLength: 2
				});
			});
		 </script>
	</div>
