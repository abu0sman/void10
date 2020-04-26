<div id="component_frame"></div>

<script src="../../vendors/jquery/jquery.js"></script>
<!--<script src="../../vendors/bootstrap/js/bootstrap.js"></script>-->

<script>
	$.ajax({
		/* data: {actual_order: actual_order, actual_page: actual_page, find_string: find_string}, */
		url: '../show_order/show_order.php',
		type: 'POST',
		cache: false,
		success: function(result){
			$('#component_frame').html(result);
		}
	});
</script>