<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/auth.php');
	include(CONTROLLER_ROOT.'dashboard.php');
	$controller = new Dashboard();
	$controller->loadView();
?>