<?php
require_once '../../db_connect.php';

if (isset($_POST['acc_check'])){
	$Plogin = $_POST['acc_login'];
	$Ppassword = md5($_POST['acc_pass']);
	
	$login_query_sql = "SELECT * FROM m_account_users WHERE login = '$Plogin' AND password = '$Ppassword'";
	$login_pass = $pdo->query($login_query_sql)->fetchColumn();
 	if ($login_pass == 1) {
		//Создаем сессию, передаем управление другому скрипту
		session_start();
		$_SESSION['s_auth'] = 1;
		$_SESSION['s_login'] = $Plogin;
		$_SESSION['s_password'] = $Ppassword;
		//header("location: ./main.php"); 		
	}
	else echo "<script>alert('Проверьте правильность введенного логина и пароля!');</script>";
}