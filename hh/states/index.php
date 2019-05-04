<?php
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/auth.php');

	include(CONTROLLER_ROOT.'states.php');
	$controller = new States();
	
	if(isset($_POST['type'])){
		$type = $_POST['type'];
		
		if($type=="edit" || $type=="add"){
			$id = $_POST['id'];
			$controller->loadAddUpdateView($id);

		}else if($type=="save"){
			
			$data=array(
				'id'=>$_POST['id'],
				'country'=>$_POST['countryname'],
				'state'=>$_POST['statename'],
			);
			if($_POST['countryname']=="" && $_POST['statename']=="")
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