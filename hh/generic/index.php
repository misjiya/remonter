<?php
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/auth.php');

	include(CONTROLLER_ROOT.'generic.php');
	$controller = new Generic();
	
	if(isset($_POST['type'])){
		$type = $_POST['type'];
		
		if($type=="edit" || $type=="add"){
			$id = $_POST['id'];
			$controller->loadAddUpdateView($id);

		}else if($type=="save"){
			$data=array(
				'id'			=>$_POST['id'],
				'name'			=>$_POST['name'],
				'title'			=>$_POST['title'],
				'slug'			=>$_POST['slug'],
				'description'	=>$_POST['description'],
				'body'			=>$_POST['body'],
			);
			if($_POST['name']=="" && $_POST['title']=="" && $_POST['slug']=="")
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