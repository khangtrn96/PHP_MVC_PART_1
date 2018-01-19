<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới số sim điện thoại</title>
 	<!-- kết với thư viện bootstrap và css-->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<?php require('show_header_view.php') ?>
	<div class="container">
		<h2 class="text-xs-center">Thêm số điện thoại ở trong form sau</h2>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="<?= base_url() ?>/index.php/AddData_controller/insertData_controller" method="post" enctype="multidata/formdata">
						<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput">Nhập số sim</label>
									<input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Vd: 09090908">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Nhập giá sim</label>
									<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Vd: 200000">
								</fieldset>
								<input type="submit" class="btn btn-success btn-block" value="Nhập vào MySQL"></input>
							</div>
							
						</div>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>