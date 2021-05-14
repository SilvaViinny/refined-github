<?php 

require_once("config.php");

date_default_timezone_set('Europe/London');

try {
	$pdo = new PDO("mysql:dbname=sysmedical;host=localhost", "root", "");

	//conexao mysql para o backyp
	$conn = mysqli_connect("localhost", "root", "", "sysmedical");
} catch (Exception $e) {
	echo "Erro ao conectar com o banco de dados! ".$e;
}

 ?>