<?
//INICIALIZA A SESSÃO
session_start();

//DESTRÓI AS VARIÁVEIS
unset($_SESSION["id"]);
unset($_SESSION["nome"]);
session_destroy();

//REDIRECIONA PARA A TELA DE LOGIN
Header("Location:login.php");
?>
