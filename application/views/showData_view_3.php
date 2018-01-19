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
	<?php require('show_header_view.php') ?>
	<div class="container">
		<h3 class="text-xs-center">Các sim và giá hiện có</h3>
	</div>
	<div class="container">
		<div class="row">
		<!--Với $dulieulaytucontroller đã được định nghĩa ở trong hàm index của ShowData_controller_3
		$key là từ 0 đên n-1 (với n là số dữ liệu có trong bảng so_sim)
		$value là các giá trị của trường so, gia, id
		Sau khi ấn button, sẽ chuyển dến đường dẫn deleteData/<?= $valueid ?> có trong ShowData_controller_3
		-->
			<?php foreach ($dulieulaytucontroller as $key => $value): ?>
					<div class="col-sm-3">
						<div class="card card-block">
							<h3 class="card-title">Số sim: <?= $value['so'] ?></h3>
							<p class="card-text">Gía sim <?= $value['gia'] ?></p>
							<a href="deleteData/<?= $value['id'] ?>" class="btn btn-danger"><i class="fa-trash"></i></a>
							<a href="http://127.0.0.1:4001/bai1dulieu/index.php/ShowData_controller_3/editSim/<?= $value['id'] ?> " class="btn btn-secondary"><i class="fa fa-pencil"></i></a>
						</div>
					</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>