<?php
	include($_SERVER['DOCUMENT_ROOT'].'/remonter/dating/config.php');
	include(CONTROLLER_ROOT.'landing.php');
	$controller = new Landing();
	$helper = new commonHelper();
	if(isset($_POST['type'])){
		if($_POST['type']=="register")
		{
			// username 	: kgh9578@tghj
			// password		: 8h54jhgjh@7$
			$data=array(
					'looking'		=>@$_POST['looking'],
					'age'			=>@$_POST['age'],
					'email'			=>@$_POST['email'],
					'livein'		=>@$_POST['livein'],
					'username'		=>@$_POST['kgh9578@tghj'],
					'password'		=>$helper->encrypt_decrypt(@$_POST['8h54jhgjh@7$'],'encrypt')
			);
			if(@$data['email']=="" || @$data['username']=="" || @$data['password']=="")
			{
				echo $helper->JSONResponse(ERROR,INTERNAL_SERVER_ERROR);
				return ;
			}
			else
			{
				if(!filter_var(@$data['email'], FILTER_VALIDATE_EMAIL))
				{
					echo $helper->JSONResponse(ERROR,INVALID_EMAIL_MSG);
					return ;
				}
				if((strlen(@$data['password']))<6)
				{
					echo $helper->JSONResponse(ERROR,INVALID_PASSWORD_MSG);
					return ;
				}

				if($controller->duplicateUser(@$data['email'],@$data['username']))
				{
					echo $helper->JSONResponse(ERROR,DUPLICATE_USER);
				}
				else
				{
				   if($controller->registerUser($data))
				   {
						echo $helper->JSONResponse(SUCCESS,NEW_USER);
				   }
				   else{
						echo $helper->JSONResponse(ERROR,INTERNAL_SERVER_ERROR);
				   }
					
				}
			}
		}
	}
	else{
		$controller->loadListView();
	}
	
?>