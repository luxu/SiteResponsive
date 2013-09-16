<?php
$tabela = '';
$acao = '';
$codigo = '';
if (isset($_REQUEST['tabela'])) {
    $tabela = $_REQUEST['tabela'];
    $acao = $_REQUEST['acao'];
}
if (isset($_REQUEST['codigo'])) $codigo = $_REQUEST['codigo'];

//echo "tabela = <strong>$tabela</strong> e acao = <strong>$acao</strong> - codigo = <strong>$codigo</strong>";

if ($tabela == "trampo")
    require('trampo_acao.php');
else
    require('../../index.php');
?>