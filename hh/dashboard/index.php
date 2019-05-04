<?php
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/auth.php');
	include(CONTROLLER_ROOT.'dashboard.php');
	$controller = new Dashboard();
	$controller->loadView();
?>