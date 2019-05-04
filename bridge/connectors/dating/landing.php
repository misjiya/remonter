<?php
	include(HELPER_ROOT.'commonHelper.php');
	Class Landing{
		public function __construct(){
			$this->helper = new CommonHelper();
		}
		public function loadListView(){
			$TITLE="Dating App";
			$TopCities=$this->helper->fetchTopCities();
			$SeoContent=$this->helper->fetchSeoContent();
			$GenericPages=$this->helper->fetchGenericPages();
			include(TEMPLATE_ROOT.'dating.php');
		}

		public function registerUser($data){
			return $this->helper->registerUser($data);
		}
	}
?>