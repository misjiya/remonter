<?php 
	if(empty($_SESSION))
	{
		echo "Hello";
		header("Location:".BASE_URL."hh");exit();
	}
?>