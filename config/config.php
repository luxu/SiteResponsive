<?php
/********************************************************  CONEXÃO PELO SITE *************************************************/
define('URL', 'http://www.luxu.com.br/SiteResponsive/');
define('DIR', '/home/luxucom/public_html/SiteResponsive/');

/*PASTAS*/
define('JS', 'js/');
define('CSS', 'css/');
define('IMG', 'img/');
define('CONSULTAS', 'consultas/');
define('INCLUDES', 'includes/');
define('MODULOS', 'modulos/');
define('FUNCTIONS','functions/');
define('PAGINAS','Paginas/');

/*CONEXÃO*/
define('USER', 'luxucom');
define('PASS', '');
define('HOST', '174.142.48.58');
define('DBNM', 'luxucom_makinson');

$conn = mysql_connect(HOST, USER, PASS);
mysql_select_db(DBNM);
?>
