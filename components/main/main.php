<?php require "functions.php" ?>

<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<title>void - платформа v10</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Comatible" content="ie=edge">
		<link rel="icon" type="image/png" href="imgs/logo.png" />
	
		<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="components/main/main.css">
		
		<script src="libs/jquery/jquery.js"></script>
	
	</head>
	<body>
		<div id="main_canva">
			<?php 
				$component = vget::component("sheetboard_np"); 
				foreach($component as $line) echo eval($line);
			?>
		</div>
	</body>
</html>

<?php
