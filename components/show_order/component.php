<div id="login"></div>

<script src="../../vendors/jquery/jquery.js"></script>
<script src="../../vendors/bootstrap/js/bootstrap.js"></script>

<?php
	function show_component(){
		$actual_order = func_get_args()[0];
	
		echo "<script>
		$.ajax({
			data: {actual_order: actual_order, actual_page: actual_page, find_string: find_string},
			url: '../show_order/show_order.php',
			type: 'POST',
			cache: false,
			success: function(result){
				$('#show_order_current').html(result);
			}
		});
		</script>";
	}
?>



