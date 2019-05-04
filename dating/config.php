<?php
	define("BASE_URL","http://localhost/remonter/");
	define("ROOT_DIR",$_SERVER['DOCUMENT_ROOT']."/remonter/");
	define("TEMPLATE_ROOT",ROOT_DIR."/bridge/templates/dating/");
	define("TEMPLATE_URL",BASE_URL."bridge/templates/dating/");

	define("CONTROLLER_ROOT",ROOT_DIR."/bridge/connectors/dating/");
	define("CONTROLLER_URL",BASE_URL."bridge/connectors/dating/");

	define("MODEL_ROOT",ROOT_DIR."/bridge/services/dating/");
	define("HELPER_ROOT",ROOT_DIR."/bridge/helper/dating/");

	define("INC",ROOT_DIR."/bridge/templates/dating/inc/");
	define("BRAND","HiddenHeart");

	$link = $_SERVER['PHP_SELF'];
	$link_array = explode('/',$link);
	$slug=$link_array[2];
	define("SLUG",$slug);
	//---------------------Response--------------------
	define("SUCCESS","success");
	define("ERROR","error");
	define("INTERNAL_SERVER_ERROR","Internal server error.");
	define("DUPLICATE_USER","Oops ! you are alredy registered.");
	define("NEW_USER","Thank you for register.");
	define("INVALID_EMAIL_MSG","Oops! your email id is not valid.");
	define("INVALID_PASSWORD_MSG","Oops! password should be atleast 6 characters.");

?>