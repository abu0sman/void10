<?php
setlocale(LC_ALL, "ru_RU.UTF-8"); 

$db_hostname = "127.0.0.1";
$db_database = "void9";
$db_username = "usr";
$db_password = "password";

try{
	$pdo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
	$pdo -> exec("SET CHARACTER SET utf8");
}
catch (PDOExeption $log){
	echo "Невозможно установить соединение с БД";
}

?>
