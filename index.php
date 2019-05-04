<?php
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/dating/config.php');
	include(CONTROLLER_ROOT.'landing.php');
	$controller = new Landing();
	$controller->loadListView();
?>