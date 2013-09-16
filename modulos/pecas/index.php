<?php

include '../../config/config.php';

$action = '';

if (isset($_POST['action']) && !empty($_POST['action'])) {
   $action = $_POST['action'];
}
if (isset($_GET['action']) && !empty($_GET['action'])) {
   $action = $_GET['action'];
}

if (empty($action)) {
   echo '<script>history.back();</script>';
}

//$erro = array();

// Salvar
if ($action == 'salvar') {
      $sql = " INSERT INTO `pecas`";
      $sql .= "(descricao,preco,data,veiculo,proxTroca,troca,local,comercio,total,qtdProduto)";
      $sql .=" VALUES('";
      $sql .="$_POST[descricao]','$_POST[preco]','";
      $sql .="$_POST[data]','$_POST[veiculo]','";
      $sql .="$_POST[proxTroca]','$_POST[troca]','";
      $sql .="$_POST[local]','$_POST[comercio]','";
      $sql .="$_POST[total]','$_POST[qtdProduto]')";
      
//      echo 'errors+'.$sql;die;

      $gravar = mysql_query($sql) or die('errors+' . mysql_error());
      if ($gravar) {
         echo 'sucess+Dados gravados com sucesso!';
         return;
      } else {
         echo 'errors+Houve um erro ao gravar!';
         return;
      }
}

// Alterar
if ($action == 'alterar') {

      $sql  = "UPDATE `pecas` SET ";
      $sql .= "descricao='$_POST[descricao]',preco='$_POST[preco]',";
      $sql .= "data='$_POST[data]',veiculo='$_POST[veiculo]',";
      $sql .= "proxTroca='$_POST[proxTroca]', troca='$_POST[troca]',";
      $sql .= "local='$_POST[local]', comercio='$_POST[comercio]',";
      $sql .= "total='$_POST[total]', qtdProduto='$_POST[qtdProduto]' ";
      $sql .= "WHERE idpecas=".$_POST[modulo]."";

//      echo 'errors+'.$sql;die;
      
      $gravar = mysql_query($sql) or die('errors+' . mysql_error());
      if ($gravar) {
         echo 'sucess+Dados gravados com sucesso!';
         return;
      } else {
         echo 'errors+Houve um erro ao gravar!';
         return;
      }
}

// Excluir
if ($action == 'excluir') {
   if (!empty($_POST['modulos'])) {
      foreach ($_POST['modulos'] as $modulos) {
         mysql_query("DELETE FROM `veiculo` WHERE idveiculo ='$modulos'") or die('errors+' . mysql_error());
      }
      echo 'sucess+Dados excluídos com sucesso!';
   }
}