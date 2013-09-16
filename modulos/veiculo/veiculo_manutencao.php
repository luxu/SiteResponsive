<?php

	require_once('../../config/conecta.php');

	class veiculo_manutencao
	{
		var $resultado;
		var $registros;
		
		function veiculo_manutencao()
		{
			$this->con = new conexao();
		}

		function listar_veiculo()
		{
			$sql = "select * from veiculo";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function gravar_incluir()
		{
			$sql = "insert into veiculo(data,veiculo,kminicial,kmfinal,distanciapercorrida,litrosabastecidos) VALUES('$_POST[data]','$_POST[veiculo]',$_POST[kminicial],$_POST[kmfinal],$_POST[distanciapercorrida],$_POST[litrosabastecidos])";
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function gravar_alterar()
		{
			$sql = "UPDATE veiculo SET data='$_POST[data]',veiculo='$_POST[veiculo]', kminicial=$_POST[kminicial], kmfinal=$_POST[kmfinal],distanciapercorrida=$_POST[distanciapercorrida], litrosabastecidos=$_POST[litrosabastecidos] WHERE idveiculo=$_POST[codigo]";
			$this->resultado = $this->con->banco->Execute($sql);
		}

		function alterar()
		{
			$sql = "select * from veiculo where idveiculo = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObj(); // posiciona no primeiro reg.
		}

		function excluir()
		{
			$sql = "delete from veiculo where idveiculo = ".$_REQUEST['codigo'];
			$this->resultado = $this->con->banco->Execute($sql);
		}
		
		function total_registros()
		{
			$sql = "select count(*) as TOTAL from veiculo";
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObj(); // posiciona no primeiro reg.
			return $this->registros->TOTAL;
		}
		
	}
?> 