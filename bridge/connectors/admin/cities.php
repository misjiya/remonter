<?php
	include(MODEL_ROOT.'citiesModel.php');
	include(HELPER_ROOT.'commonHelper.php');
	Class Cities{
		public function __construct(){
			$this->service = new CitiesModel();
			$this->helper = new CommonHelper();
		}
		public function loadListView(){
			$TITLE="Cities";
			include(TEMPLATE_ROOT.'cities/cities.php');
		}
		public function loadAddUpdateView($id='0')
		{	
			$data=$this->service->fetchOnId($id);
			$countries=$this->helper->fetchAllCountries();
			$states=$this->helper->fetchAllStates();
			include(TEMPLATE_ROOT.'cities/add_update.php');
		}
		public function save($data)
		{
			$attribute = array(
				'country' 	=> $data['country'],
				'state' 	=> $data['state'],
				'city' 		=> $data['city'],
				'locality' 	=> $data['locality'],
				'top' 		=> $data['top']
			);
			$id=$data['id'];
			if($id!="0" && $id!="")
			{
				$response=$this->service->update($attribute,$id);
			}
			else
			{
				$response=$this->service->insert($attribute);
			}
			return $response;
		}
		public function loadPageListView($page)
		{
			$conlist = $this->service->fetch($page);
            include(TEMPLATE_ROOT."cities/list.php");
		}
		public function loadSearchListView($text){
			$conlist = $this->service->fetch(0,$text);
            include(TEMPLATE_ROOT."cities/list.php");
		}
		public function updateLocality($locality,$id){
			$this->service->updateLocality($locality,$id);
		}
		public function updateTopCity($top,$id){
			$this->service->updateTopCity($top,$id);
		}
	}
?>