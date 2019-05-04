<?php
	include(HELPER_ROOT.'commonHelper.php');
	include(MODEL_ROOT.'registrationModel.php');
	Class Landing{
		public function __construct(){
			$this->helper = new CommonHelper();
			$this->model = new RegistrationModel();
		}
		public  function  duplicateUser($email,$username){
			return $this->model->duplicateUser($email,$username);
		}
		public function loadListView(){
			$TITLE="Dating App";
			$TopCities=$this->helper->fetchTopCities();
			$SeoContent=$this->helper->fetchSeoContent();
			$GenericPages=$this->helper->fetchGenericPages();
			include(TEMPLATE_ROOT.'dating.php');
		}

		public function registerUser($data){
			$attribute=$this->model->registerUser($data);
			$this->helper->insertUserProfileOnGender($attribute);
		}
	}
?>