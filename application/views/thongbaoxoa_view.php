<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông báo xoá</title>
	<!-- kết với thư viện bootstrap và css-->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
 	<?php require('show_header_view.php') ?>
	<h3 class="text-xs-center">Bạn đã xoá thành công</h3>
	<div class="container text-xs-center">
		<a href="/bai1dulieu/index.php/ShowData_controller_3/" class="btn btn-info">Quay về trang chủ</a>
	</div>
</body>
</html>