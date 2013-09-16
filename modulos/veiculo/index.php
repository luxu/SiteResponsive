<?php
$tabela = '';
$acao= '';
if(isset($_REQUEST['tabela'])){
	$tabela = $_REQUEST['tabela'];
	$acao   = $_REQUEST['acao'];	
}

//echo "tabela = $tabela e acao = $acao";
		
if ($tabela == "veiculo")
	require('veiculo_acao.php');
else 
	require('../../index.php');
?>