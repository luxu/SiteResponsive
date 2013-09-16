<?php
	require('pecas_manutencao.php');
	$oquefazer = new pecas_manutencao();
	$acao = $_REQUEST['acao'];
	//echo '<br> pecas_acao = <strong>'.$acao.'</strong> codigo= <strong>'.$POST['codigo'].'</strong>';

	if ($acao == 'incluir') { require('pecas_form.php'); }
	if ($acao == 'listar')
	{
		$oquefazer->listar_pecas();
		require('list_pecas.php');
	}

	if ($acao == 'listarTodos')
	{
		$oquefazer->listar_todos_pecas();
		require('list_pecas.php');
	}

	
        
        if ($acao == 'gravar_incluir')
	{
		$oquefazer->gravar_incluir();
		$oquefazer->listar_pecas();
		require('list_pecas.php');
	}
	
	if ($acao == 'gravar_alterar')
	{
		$oquefazer->gravar_alterar();
		$oquefazer->listar_pecas();
		require('list_pecas.php');
	}
	
	if ($acao == 'alterar')
	{
		$oquefazer->alterar();
		require('alt_pecas.php');
	}
	
	if ($acao == 'excluir')
	{
		$oquefazer->excluir();
		$oquefazer->listar_pecas();
		require('list_pecas.php');
	}
?>