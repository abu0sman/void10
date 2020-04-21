<br>
<form method="post">
	<button class="btn btn-primary m-5" name="component" value="show_order">Кнопка вызова компонета</button>
</form>

<?php
	require "../main/functions.php";
	$argument = 200;
	
	if (isset($_POST['btn'])){
		vget::component("show_order", $argument);
	}
?>