<?php
	include(HELPER_ROOT.'commonHelper.php');
	include(MODEL_ROOT.'registrationModel.php');
	Class UploadCtrl{
		public function __construct(){
			$this->helper = new CommonHelper();
			$this->model = new RegistrationModel();
		}
		public function loadUploadView(){
			$TITLE="Upload";
			include(TEMPLATE_ROOT.'upload.php');
		}
	}
?>