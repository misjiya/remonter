<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/auth.php');

	include(CONTROLLER_ROOT.'categories.php');
	$controller = new Categories();
	
	if(isset($_POST['type'])){
		$type = $_POST['type'];
		
		if($type=="edit" || $type=="add"){
			$id = $_POST['id'];
			$controller->loadAddUpdateView($id);

		}else if($type=="save"){
			
			$data=array(
				'id'			=>$_POST['id'],
				'categoryname'	=>$_POST['categoryname'],
				'profiletype'	=>$_POST['profiletype'],
				'slug'			=>$_POST['slug'],
				'profileno'		=>$_POST['profileno'],
				'girlprofileno'	=>$_POST['girlprofileno'],
				'guyprofileno'	=>$_POST['guyprofileno'],
			);
			if($_POST['categoryname']=="" && $_POST['slug']=="")
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
		else if($type=="top"){
			$id = $_POST['id'];
			$top = $_POST['top'];
			$controller->updateTopCity($top,$id);

		}
	}else{
		$controller->loadListView();
	}
?>