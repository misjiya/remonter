<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/auth.php');

	include(CONTROLLER_ROOT.'countries.php');
	$controller = new Countries();
	
	if(isset($_POST['type'])){
		$type = $_POST['type'];
		
		if($type=="edit" || $type=="add"){
			$id = $_POST['id'];
			$controller->loadAddUpdateView($id);

		}else if($type=="save"){
			
			$data=array(
				'id'=>$_POST['id'],
				'countryname'=>$_POST['countryname'],
			);
			if($_POST['countryname']=="")
			{
				echo  "FAIL";
			}
			else if($controller->save($data))
			{
				echo  "OK";
			}
			else
			{
				echo  "FAIL";
			}
		}
		else if($type=="page"){
			$page = $_POST['page'];
			$controller->loadPageListView($page);

		}
		else if($type=="search"){
			$text = $_POST['text'];
			$controller->loadSearchListView($text);

		}
	}else{
		$controller->loadListView();
	}
?>