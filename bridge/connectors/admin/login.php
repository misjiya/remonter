<?php
	include(MODEL_ROOT.'loginModel.php');
	Class Login{
		public function __construct(){
			$this->service = new LoginModel();
		}
		public function loadView(){
			$TITLE="Login";
			include(TEMPLATE_ROOT.'login/login.php');
		}
		public function validate($data)
		{
			$attribute=array(
				'account_type'	=>$data['account_type'],
				'username'		=>$data['username'],
				'password'		=>$data['password'],
			);
			$result=$this->service->validate($attribute);
			if(!empty($result))
			{
				$_SESSION['USERNAME']=$result['username'];
				$_SESSION['ACCOUNTTYPE']=$result['account_type'];
				$_SESSION['ACCESSTYPE']=$result['access_type'];
				return true;
			}
			else
			{
				return false;
			}
			
		}
	}
?>