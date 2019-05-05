<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/dating/config.php');
	include(CONTROLLER_ROOT.'uploadCtrl.php');
	$controller = new UploadCtrl();
	$helper = new commonHelper();
	$controller->loadUploadView();
?>