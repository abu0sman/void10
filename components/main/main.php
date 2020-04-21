<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<title>void - платформа v10</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Comatible" content="ie=edge">
		<link rel="icon" type="image/png" href="imgs/logo.png" />
	
		<link rel="stylesheet" href="../../vendors/bootstrap/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="components/main/main.css">-->
		
		<!--<script src="libs/jquery/jquery.js"></script>-->
	
	</head>
	<body>
		<div id="main_frame">
			<?php
				if(!(isset($_POST['component']))){
					$_POST['component'] ='';
					$component = $_POST['component'];
					vget::component("shop_order", 10);
				}
				
				else if ($_POST['component'] == 'show_order' ) vget::component("show_order", 10);
				
				/* 
				if (file_exists("../../db_connect.php")){
					if (isset($_SESSION['s_auth']))	vget::component("show_order", 10);
					else vget::component("login");
				}
				else vget::component("install", 20); 
				*/
			?>
		</div>
	</body>
</html>
