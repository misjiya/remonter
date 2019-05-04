<?php
	include(MODEL_ROOT.'categoriesModel.php');
	include(HELPER_ROOT.'commonHelper.php');
	Class Categories{
		public function __construct(){
			$this->service = new CategoriesModel();
			$this->helper = new CommonHelper();
		}
		public function loadListView(){
			$TITLE="Categories";
			include(TEMPLATE_ROOT.'categories/categories.php');
		}
		public function loadAddUpdateView($id='0')
		{	
			$data=$this->service->fetchOnId($id);
			include(TEMPLATE_ROOT.'categories/add_update.php');
		}
		public function save($data)
		{
			$attribute=array(
				'categoryname'	=>$data['categoryname'],
				'profiletype'	=>$data['profiletype'],
				'slug'			=>trim(str_replace(' ','-',strtolower($data['slug']))),
				'profileno'		=>$data['profileno'],
				'girlprofileno'	=>$data['girlprofileno'],
				'guyprofileno'	=>$data['guyprofileno'],
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
            include(TEMPLATE_ROOT."categories/list.php");
		}
		public function loadSearchListView($text){
			$conlist = $this->service->fetch(0,$text);
            include(TEMPLATE_ROOT."categories/list.php");
		}
		public function updateTopCity($top,$id){
			$this->service->updateTopCity($top,$id);
		}
	}
?>