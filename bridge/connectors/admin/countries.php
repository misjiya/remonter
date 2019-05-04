<?php
	include(MODEL_ROOT.'CountriesModel.php');
	Class Countries{
		public function __construct(){
			$this->service = new CountriesModel();
		}
		public function loadListView(){
			$TITLE="Countries";
			include(TEMPLATE_ROOT.'countries/countries.php');
		}
		public function loadAddUpdateView($id='0')
		{	
			$data=$this->service->fetchOnId($id);
			include(TEMPLATE_ROOT.'countries/add_update.php');
		}
		public function save($data)
		{
			$attribute = array('countryname' => $data['countryname']);
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
            include(TEMPLATE_ROOT."countries/list.php");
		}
		public function loadSearchListView($text){
			$conlist = $this->service->fetch(0,$text);
            include(TEMPLATE_ROOT."countries/list.php");
		}
	}
?>