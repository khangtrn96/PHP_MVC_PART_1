<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa dữ liệu</title>
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
		<h3 class="text-xs-center">Sửa dữ liệu</h3>
	</div>
	<?php foreach ($dulieuthuccanxuly as $key => $value): ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-8 push-xs-2">
					<div class="card card-block">
					<!--
						../update có nghĩa là lùi lại 1 lần
						../../update có nghĩa là lùi lại 2 lần
					-->
						<form action="../updateData" method="post" >	
								<!--Cách 1:dùng disabled trong input để không có tác động vào
									Cách 2:có thể bỏ 2 dòng:
										<fieldset class="form-group">
											<label for="formGroupExampleInput">Số id</label>
										rồi sau đó bỏ text thành hidden trong type 
									
								-->
								<input name="id" type="hidden" class="form-control" id="formGroupExampleInput" placeholder="" value="<?= $value['id'] ?>">
								
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Số sim</label>
								<input name="so" type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="<?= $value['so'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Gía sim</label>
								<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="" value="<?= $value['gia'] ?>">
							</fieldset>
							<input type="submit" class="btn btn-success btn-block" value="Lưu">
						</form>
					</div>
				</div>
			</div>
		</div>
			
	<?php endforeach ?>
</body>
</html>