<?php
include_once 'config/config.php';
include_once DIR . INCLUDES . 'topo.php';
ob_start();
@session_start();
$usuario = $_SESSION["id"];
if ($usuario != "") {
    include_once DIR . INCLUDES . 'menu.php';
}
else
    echo "Usuário vazio!!"
    ?>
<div id="main" role="main">
    <img src="<?php URL ?>img/joao.jpg" style="margin-left:10" width="70" height="61" alt="meuNene" />
    <h1>Página INDEX</h1>
</div>
<?php include_once DIR . INCLUDES . 'rodape.php'; ?>
