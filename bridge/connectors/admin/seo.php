<?php
	include(MODEL_ROOT.'seoModel.php');
	include(HELPER_ROOT.'commonHelper.php');
	Class Seo{
		public function __construct(){
			$this->service = new SeoModel();
			$this->helper = new CommonHelper();
		}
		public function loadListView(){
			$TITLE="SEO Content";
			include(TEMPLATE_ROOT.'seo/seo.php');
		}
		public function loadAddUpdateView($id='0')
		{	
			$data=$this->service->fetchOnId($id);
			include(TEMPLATE_ROOT.'seo/add_update.php');
		}
		public function save($data)
		{
			$attribute=array(
				'seotype'		=>$data['seotype'],
				'title'			=>$data['title'],
				'description'	=>$data['description'],
				'keyword'		=>$data['keyword'],
				'con1'			=>$data['con1'],
				'con2'			=>$data['con2'],
				'con3'			=>$data['con3'],
				'con4'			=>$data['con4'],
				'con5'			=>$data['con5'],
				'con6'			=>$data['con6'],
				'header1'		=>$data['header1'],
				'header2'		=>$data['header2'],
				'header3'		=>$data['header3'],
				'header4'		=>$data['header4'],
				'header5'		=>$data['header5'],
				'header6'		=>$data['header6'],
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
            include(TEMPLATE_ROOT."seo/list.php");
		}
		public function loadSearchListView($text){
			$conlist = $this->service->fetch(0,$text);
            include(TEMPLATE_ROOT."seo/list.php");
		}
	}
?>