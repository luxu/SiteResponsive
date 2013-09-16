<?php
require ('adodb5/adodb.inc.php'); // biblioteca necessária para trabalhar com adodb</p>
//require ('funcoes.php');

class conexao
{
	var $tipo_banco = "mysql";
	var $servidor = "174.142.48.58";
	var $usuario = "luxucom";
	var $senha = "";
	var $banco;
	
	function conexao() // método construtor
	{
		$this->banco = NewADOConnection($this->tipo_banco);
		$this->banco->dialect = 3;
		$this->banco->debug = false;
		$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"luxucom_makinson");
	}
}

$con = new conexao();

?>
