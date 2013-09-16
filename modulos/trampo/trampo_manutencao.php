<?php

require_once('../../config/conecta.php');

class trampo_manutencao {

    var $resultado;
    var $registros;

    function trampo_manutencao() {
        $this->con = new conexao();
    }

    function listar_trampo() {
        $sql = "select * from trampo ORDER BY data desc limit 20";
        $this->resultado = $this->con->banco->Execute($sql);
    }

    function listar_todos_trampo() {
        $sql = "select * from trampo ORDER BY data desc";
        $this->resultado = $this->con->banco->Execute($sql);
    }

    function gravar_incluir() {
        if (empty($_POST[nro_os])) {
            $_POST[nro_os] = 0000;
        }
        $qtdeec = $_POST['qtdeec'];
        $valor = substr($_POST[conclusao], -4);
        $vlr = str_replace(',', '.', $valor);
        $sql = "INSERT INTO trampo(Data,Conclusao,EC,NRO_OS,Valor)
			VALUES('$_POST[data]','$_POST[conclusao]','$_POST[ec]',$_POST[nro_os],$vlr)";
        for ($i = 0; $i < $qtdeec; $i++) {
            $this->resultado = $this->con->banco->Execute($sql);
        }
    }

    function gravar_alterar() {
        $valor = substr($_POST[conclusao], -4);
        $vlr = str_replace(',', '.', $valor);
        $sql = "UPDATE trampo SET Data='$_POST[data]', Conclusao='$_POST[conclusao]', EC='$_POST[ec]', NRO_OS=$_POST[nroos], Valor=$vlr WHERE idTrampo=" . $_POST["codigo"];
        $this->resultado = $this->con->banco->Execute($sql);
    }

    function alterar() {
        $sql = "select * from trampo where idTrampo = " . $_GET["codigo"];
        $this->resultado = $this->con->banco->Execute($sql);
        $this->registros = $this->resultado->FetchNextObj(); // posiciona no primeiro reg.
    }

    function excluir() {
        $sql = "delete from trampo where idTrampo = " . $_GET["codigo"];
        $this->resultado = $this->con->banco->Execute($sql);
    }

}

?> 