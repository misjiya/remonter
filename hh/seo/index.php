<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/config.php');
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/hh/auth.php');

	include(CONTROLLER_ROOT.'seo.php');
	$controller = new Seo();
	
	if(isset($_POST['type'])){
		$type = $_POST['type'];
		
		if($type=="edit" || $type=="add"){
			$id = $_POST['id'];
			$controller->loadAddUpdateView($id);

		}else if($type=="save"){
			$data=array(
				'id'			=>$_POST['id'],
				'seotype'		=>$_POST['seotype'],
				'title'			=>$_POST['title'],
				'description'	=>$_POST['description'],
				'keyword'		=>$_POST['keyword'],
				'con1'			=>$_POST['con1'],
				'con2'			=>$_POST['con2'],
				'con3'			=>$_POST['con3'],
				'con4'			=>$_POST['con4'],
				'con5'			=>$_POST['con5'],
				'con6'			=>$_POST['con6'],
				'header1'		=>$_POST['header1'],
				'header2'		=>$_POST['header2'],
				'header3'		=>$_POST['header3'],
				'header4'		=>$_POST['header4'],
				'header5'		=>$_POST['header5'],
				'header6'		=>$_POST['header6'],
			);
			if($_POST['title']=="")
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