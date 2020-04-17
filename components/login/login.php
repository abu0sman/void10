<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Логин</h5>
			<!-- <button class="close" data-dismiss="modal">x</button> -->
		</div>
		
		<div class="modal-body">
			<div class="form-group">
				<lable>Логин</lable>
				<input id="acc_login" type="text" class="form-control form-control-sm"/>
			
				<lable>Пароль</lable>
				<input id="acc_pass" type="password" class="form-control form-control-sm" />
			</div>	
		</div>
		
		<div class="modal-footer">
		<button id="acc_check" class="btn btn-success">Войти</button>
		</div>
	</div>
</div>

<script>
	$('#acc_check').on( 'click', function() {
		var acc_login = $('#acc_login').val();
		var acc_pass = $('#acc_pass').val();
		
		$.ajax({
			url: '../main/backend.php', 
			data: { acc_check: 'acc_check', acc_login: acc_login, acc_pass: acc_pass  }, 
			type: 'POST', 
			cache: false,
			success: function(res) {
				// Перезагрузка стараницы
				$.ajax({
					url: '..//table_current.php',
					data: {actual_page: actual_page, id: id, department: department, chief_fio_ip: chief_fio_ip, inn: inn, address: address, tel: tel, fax: fax,  email: email},
					type: 'POST',
					cache: false,
					success: function(res) {
						$('#table_current').html(res);
					}
				});
			}			
		});
	});
</script>