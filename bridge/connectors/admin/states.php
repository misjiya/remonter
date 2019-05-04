<?php
	include(MODEL_ROOT.'statesModel.php');
	include(HELPER_ROOT.'commonHelper.php');
	Class States{
		public function __construct(){
			$this->service = new StatesModel();
			$this->helper = new CommonHelper();
		}
		public function loadListView(){
			$TITLE="States";
			include(TEMPLATE_ROOT.'states/states.php');
		}
		public function loadAddUpdateView($id='0')
		{	
			$data=$this->service->fetchOnId($id);
			$countries=$this->helper->fetchAllCountries();
			include(TEMPLATE_ROOT.'states/add_update.php');
		}
		public function save($data)
		{
			$attribute = array(
				'country' => $data['country'],
				'state' => $data['state']
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
            include(TEMPLATE_ROOT."states/list.php");
		}
		public function loadSearchListView($text){
			$conlist = $this->service->fetch(0,$text);
            include(TEMPLATE_ROOT."states/list.php");
		}
	}
?>