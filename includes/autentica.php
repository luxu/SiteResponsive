<?php
if (isset($_POST['enviar'])) {
   require_once("../config/config.php");
   $login = $_POST['login'];
   $senha = $_POST['senha'];
   if (get_magic_quotes_gpc() == 0) {
      $login = addslashes($login);
      $senha = addslashes($senha);
   }
   $senha = md5($senha);
   $sql = mysql_query("SELECT id, nome FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("ERRO NO COMANDO SQL");
   $row = mysql_num_rows($sql);
   if ($row == 0) {
      echo '<script>window.location="'.$include.'login.php"</script>';
   } else {
     $id = mysql_result($sql, 0, "id"); 
     $nome = mysql_result($sql, 0, "nome");
	session_start();
	$_SESSION['id']    =   $id;
	$_SESSION['nome']  =   $nome;
	header("Location:../index.php");
   }
} else {
   header("Location: ../modulos/login.php");
}