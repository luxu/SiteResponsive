<?
	$hostname = "174.142.48.58";
	$user = "luxucom";
	$pass = "L3ux@4BrL#";
	$basedados = "luxucom_makinson";
	$connect = mysql_connect($hostname,$user,$pass) or die ("Imposs�vel estabelecer conexao com o servidor de banco de dados");
	mysql_select_db($basedados)	or die ("Impossivel estabelecer conex�o com o banco de dados");
	$q=strtolower ($_GET["q"]);
	$sql = "SELECT * FROM trampo WHERE EC LIKE '%$q%'";
	$query = mysql_query($sql) or die ("Erro". mysql_query());
	while($reg=mysql_fetch_array($query)){ echo $reg["EC"]."|".$reg["EC"]."\n"; }
?>

