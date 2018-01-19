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
	<h1 class="text-xs-center display-3">Du lieu duoc insert thanh cong</h1>
	<a href="/bai1dulieu/index.php/AddData_controller" class="btn btn-info btn-lg">Quay ve trang chu <i class="fa fa-chevron-left"></i></a>
	<!-- có thể dùng dòng lệnh sau với base_url
	<a href="<?php //echo base_url()?>/index.php/AddData_controller" class="btn btn-info btn-lg"></a>
	-->
	<!--Lưu ý: Bỏ dấu // trước echo base_url để sử dụng câu lệnh trên-->

</body>
</html>