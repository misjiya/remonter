<?php
	session_start();
	define("BASE_URL","http://localhost/remonter/");
	define("ROOT_DIR",$_SERVER['DOCUMENT_ROOT']."/remonter/");
	define("TEMPLATE_ROOT",ROOT_DIR."/bridge/templates/admin/");
	define("TEMPLATE_URL",BASE_URL."bridge/templates/admin/");

	define("CONTROLLER_ROOT",ROOT_DIR."/bridge/connectors/admin/");
	define("CONTROLLER_URL",BASE_URL."bridge/connectors/admin/");

	define("MODEL_ROOT",ROOT_DIR."/bridge/services/admin/");
	define("HELPER_ROOT",ROOT_DIR."/bridge/helper/admin/");

	define("INC",ROOT_DIR."/bridge/templates/admin/inc/");
	define("BRAND","HiddenHeart");

?>