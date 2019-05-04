<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/auth.php');

	include(CONTROLLER_ROOT.'cities.php');
	$controller = new Cities();
	
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
				'city'=>$_POST['cityname'],
				'locality'=>$_POST['locality'],
				'top'=>$_POST['topcity'],
			);
			if($_POST['countryname']=="" && $_POST['statename']=="" && $_POST['cityname']=="")
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
		else if($type=="locality"){
			$id = $_POST['id'];
			$locality = $_POST['locality'];
			$controller->updateLocality($locality,$id);

		}else if($type=="top"){
			$id = $_POST['id'];
			$top = $_POST['top'];
			$controller->updateTopCity($top,$id);

		}
	}else{
		$controller->loadListView();
	}
?>