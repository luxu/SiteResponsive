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

$erro = array();

if ($action == 'salvar') {

      $gravar = mysql_query("INSERT INTO `valores` (Localidade,Tecnologia,Conclusao,Valor)
                             VALUES('$_POST[localidade]','$_POST[tecnologia]','$_POST[conclusao]','$_POST[valor]')")
                              or die('errors+' . mysql_error());

      if ($gravar) {
         echo 'sucess+Dados gravados com sucesso!';
         return;
      } else {
         echo 'errors+Houve um erro ao gravar!';
         return;
      }
}

if ($action == 'alterar') {

      $gravar = mysql_query("UPDATE `valores` SET Localidade='$_POST[localidade]',Tecnologia='$_POST[tecnologia]',
                            Conclusao='$_POST[conclusao]', Valor='$_POST[valor]' WHERE idValor='$_POST[modulo]' LIMIT 1") or die('errors+' . mysql_error());

      if ($gravar) {
         echo 'sucess+Dados gravados com sucesso!';
         return;
      } else {
         echo 'errors+Houve um erro ao gravar!';
         return;
      }
}

// Excluindo
if ($action == 'excluir') {
   if (!empty($_POST['modulos'])) {
      foreach ($_POST['modulos'] as $modulos) {
         mysql_query("DELETE FROM `valores` WHERE idValor ='$modulos'") or die('errors+' . mysql_error());
      }
      echo 'sucess+Dados excluídos com sucesso!';
   }
}

/* * ******************************************ITENS DE MÓDULOS**************************************************************** */

// Inserindo
if ($action == 'salvarItemModulo') {

   if (empty($_POST['data'])) {
      $erro[] = 'Informe a data.';
   }

   if (empty($_POST['ec'])) {
      $erro[] = 'Informe o EC.';
   }

   if (empty($_POST['nroos'])) {
      $_POST['nroos']=00000;
   }

   if (empty($_POST['valor'])) {
      $erro[] = 'Informe o valor.';
   }

   if (count($erro) > 0) {

      echo 'errors+<h1>Erro:</h1>';
      foreach ($erro as $erros) {
         echo $erros . '<br />';
      }
      return;
   } else {

      $gravar = mysql_query("INSERT INTO `trampo` (idValor,Data,EC,NRO_OS) 
                                    VALUES('$_POST[valor]','$_POST[data]','$_POST[ec]','$_POST[nroos]')")
                             or die('errors+' . mysql_error());

      if ($gravar) {
         echo 'sucess+Dados gravados com sucesso!';
         return;
      } else {
         echo 'errors+Houve um erro ao gravar!';
         return;
      }
   }
}

// Atualizando
if ($action == 'alterarItemModulo') {

   if (empty($_POST['data'])) {
      $erro[] = 'Informe a data.';
   }

   if (empty($_POST['ec'])) {
      $erro[] = 'Informe o EC.';
   }
//
//   if (empty($_POST['nroos'])) {
//      $_POST['nroos']=00000;
//   }

//   if (empty($_POST['valor'])) {
//      $erro[] = 'Informe o valor.';
//   }

   if (count($erro) > 0) {
      echo 'errors+<h1>Erro:</h1>';
      foreach ($erro as $erros) {
         echo $erros . '<br />';
      }
      return;
   } else {

      $sql = "UPDATE `trampo` SET idValor='$_POST[valor]', Data='$_POST[data]', EC='$_POST[ec]',NRO_OS='$_POST[nroos]' WHERE idTrampo='$_POST[trampo]'";
//      echo 'sucess+'.$sql; die;
      $gravar = mysql_query($sql) or die('errors+' . mysql_error());

      if ($gravar) echo 'sucess+Dados gravados com sucesso!';
      else echo 'errors+Houve um erro ao gravar!';
      return;
   }
}

// Excluindo
if ($action == 'excluirItemModulos') {
   if (!empty($_POST['itens'])) {
      foreach ($_POST['itens'] as $itens) {
         mysql_query("DELETE FROM `trampo` WHERE idTrampo ='$itens'") or die('errors+' . mysql_error());
      }
      echo 'sucess+Dados excluídos com sucesso!';
   }
}
