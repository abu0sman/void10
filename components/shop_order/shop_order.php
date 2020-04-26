<br>
<form method="post">
	<input type="hidden" value="2" name="actual_order">
	<button class="btn btn-primary m-5" name="component" value="show_order">Кнопка вызова компонета</button>
</form>

<?php
	require "../main/functions.php";
	
	
	if (isset($_POST['btn'])){
		$argument = $_POST['actual_order'];
		vget::component("show_order", $argument);
	}
?> 