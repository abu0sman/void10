<?php 
require "../../db_connect.php";
//Попытка логина, при неудаче вываливается сообщение об ошибке
if (isset($_POST['acc_check'])) {
	//require "functions.php";
	//vget::component("install", 20);
	
	 
	$Plogin = $_POST['acc_login'];
	$Ppassword = md5($_POST['acc_pass']);
	
	$login_query_sql = "SELECT * FROM m_account_users WHERE login = '$Plogin' AND password = '$Ppassword';";
	
/* 	$fd = fopen("e:\debug.txt", "w");
	fwrite($fd, $login_query_sql);
	fclose ($fd); */
	
	 
	$login_pass = $pdo->query($login_query_sql)->fetchColumn();
	if ($login_pass == 1) {
		//Создаем сессию, передаем управление другому скрипту
		session_start();
		$_SESSION['s_auth'] = 1;
		$_SESSION['s_login'] = $Plogin;
		$_SESSION['s_password'] = $Ppassword;
		header("location: main/main.php"); 		
	}
	else echo "<script>alert('Проверьте правильность введенного логина и пароля!');</script>";  

	
}
?>