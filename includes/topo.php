<?php
ob_start();
@session_start();
$usuario = $_SESSION["id"];
//$nome = $_SESSION["nome"];
if ($usuario == "") {
    unset($_SESSION["usuario"]);
    unset($_SESSION["senha"]);
    $include = URL . INCLUDES;
    echo '<script>window.location="' . $include . 'login.php"</script>';
}
//charset="ISO-8859-2"
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Trampo Mackinson</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo URL . CSS ?>style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo URL . JS ?>jquery.min.js" ></script>
        <script type="text/javascript" src="<?php echo URL . JS ?>jquery.dataTables.min.js" ></script>
    </head>
    <body>
        <header>
            <a href="<?php echo URL ?>"><img alt="Sem foto" src="<?php echo URL . IMG ?>logo_luxu.jpg" /></a>
        </header>