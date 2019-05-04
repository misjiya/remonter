<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/dating/config.php');
	include(CONTROLLER_ROOT.'landing.php');
	$controller = new Landing();
	$controller->loadListView();
?>