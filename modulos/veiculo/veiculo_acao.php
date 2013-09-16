<?php

	require('veiculo_manutencao.php');
	
	$oquefazer = new veiculo_manutencao();
	
	$acao = $_REQUEST['acao'];
	
	//echo 'acao = '.$acao;

	if ($acao == 'incluir')
	{
		require('veiculo_form.php');
	}

	if ($acao == 'listar')
	{
		$oquefazer->listar_veiculo();
		require('list_veiculo.php');
	}

	if ($acao == 'gravar_incluir')
	{
		$oquefazer->gravar_incluir();
		$oquefazer->listar_veiculo();
		require('list_veiculo.php');
	}
	
	if ($acao == 'gravar_alterar')
	{
		$oquefazer->gravar_alterar();
		$oquefazer->listar_veiculo();
		require('list_veiculo.php');
	}
	
	if ($acao == 'alterar')
	{
		$oquefazer->alterar();
		require('alt_veiculo.php');
	}
	
	if ($acao == 'excluir')
	{
		$oquefazer->excluir();
		$oquefazer->listar_veiculo();
		require('list_veiculo.php');
	}

?>