<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title><?=$TITLE.'-'.BRAND?></title>

	<?php if(strtolower($TITLE)=="login"){?>
	<link href="<?=BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?=BASE_URL?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<link href="<?=BASE_URL?>assets/css/main.css" rel="stylesheet">
	<?php }else{?>
	<!-- Bootstrap core CSS     -->
	<link href="<?=BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Animation library for notifications   -->
	<link href="<?=BASE_URL?>assets/css/animate.min.css" rel="stylesheet">
	<!--  Paper Dashboard core CSS    -->
	<link href="<?=BASE_URL?>assets/css/main.css" rel="stylesheet">
	<!--  Fonts and icons -->
	<link href="<?=BASE_URL?>assets/css/themify-icons.css" rel="stylesheet">

	<!--   Core JS Files   -->
	<script src="<?=BASE_URL?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?=BASE_URL?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=BASE_URL?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?=BASE_URL?>assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?=BASE_URL?>assets/js/bootstrap-notify.js"></script>

	<!-- <script src="<?=BASE_URL?>assets/js/main.js"></script> -->
	<?php }?>

</head>
