<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- kết với thư viện bootstrap và css-->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<div class="container">
		<h3 class="text-xs-center">Các sim và giá hiện có</h3>
		<hr>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
					<div class="col-xs-4">
						<div class="card card-block">
							<h3 class="card-title">Số sim: <?=$value['so']?></h3>
							<p class="card-text">Gía sim: <?=$value['gia']?></p>
						</div>
					</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>