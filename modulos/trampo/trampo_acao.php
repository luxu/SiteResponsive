<?php
	require('trampo_manutencao.php');
	$oquefazer = new trampo_manutencao();
	$acao = $_REQUEST['acao'];
	//echo '<br> trampo_acao = <strong>'.$acao.'</strong> codigo= <strong>'.$POST['codigo'].'</strong>';

	if ($acao == 'incluir') { require('trampo_form.php'); }
	if ($acao == 'listar')
	{
		$oquefazer->listar_trampo();
		require('list_trampo.php');
	}

	if ($acao == 'listarTodos')
	{
		$oquefazer->listar_todos_trampo();
		require('list_trampo.php');
	}

	
        
        if ($acao == 'gravar_incluir')
	{
		$oquefazer->gravar_incluir();
		$oquefazer->listar_trampo();
		require('list_trampo.php');
	}
	
	if ($acao == 'gravar_alterar')
	{
		$oquefazer->gravar_alterar();
		$oquefazer->listar_trampo();
		require('list_trampo.php');
	}
	
	if ($acao == 'alterar')
	{
		$oquefazer->alterar();
		require('alt_trampo.php');
	}
	
	if ($acao == 'excluir')
	{
		$oquefazer->excluir();
		$oquefazer->listar_trampo();
		require('list_trampo.php');
	}
?>