<?php
	include($_SERVER['DOCUMENT_ROOT'].'/hheart/hh/config.php');
	include(CONTROLLER_ROOT.'login.php');
	$controller = new Login();
	if(isset($_POST) && !empty($_POST)){

		// acconttype 	: huy87@43thgh
        // username 	: kgh9578@tghj
        // password		: 8h54jhgjh@7$
		$data=array(
				'account_type'	=>$_POST['huy87@43thgh'],
				'username'		=>$_POST['kgh9578@tghj'],
				'password'		=>$_POST['8h54jhgjh@7$'],
		);
		if($_POST['huy87@43thgh']=="" || $_POST['kgh9578@tghj']=="" || $_POST['8h54jhgjh@7$']=="")
		{
			echo  "FAIL";
		}
		else if($controller->validate($data))
		{
			echo  "OK";
		}
		else
		{
			echo  "FAIL";
		}
	}
	else{
		session_destroy();
		$controller->loadView();
	}
?>