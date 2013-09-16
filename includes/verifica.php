<?php ob_start();
@session_start();
$usuario = $_SESSION["id"];
$senha = $_SESSION["nome"];
if ($usuario==""){
	unset($_SESSION["usuario"]);
	unset($_SESSION["senha"]);
	echo '<script>window.location="../../login.php"</script>';
}
	