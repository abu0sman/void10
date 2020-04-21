<div id="login"></div>

<script src="../../vendors/jquery/jquery.js"></script>
<script src="../../vendors/bootstrap/js/bootstrap.js"></script>

<?php
//
function show_component(){
	echo "<script>
		$.ajax({
			url: '../login/login.php',
			type: 'POST',
			cache: false,
			success: function(result){
				$('#login').html(result);
			}
		});
	</script>";
}
?>