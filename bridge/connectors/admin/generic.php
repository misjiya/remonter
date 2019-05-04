<?php
	include(MODEL_ROOT.'genericModel.php');
	include(HELPER_ROOT.'commonHelper.php');
	Class Generic{
		public function __construct(){
			$this->service = new GenericModel();
			$this->helper = new CommonHelper();
		}
		public function loadListView(){
			$TITLE="Generic Page";
			include(TEMPLATE_ROOT.'generic/generic.php');
		}
		public function loadAddUpdateView($id='0')
		{	
			$data=$this->service->fetchOnId($id);
			include(TEMPLATE_ROOT.'generic/add_update.php');
		}
		public function save($data)
		{
			$attribute=array(
				'id'			=>$data['id'],
				'name'			=>$data['name'],
				'title'			=>$data['title'],
				'slug'			=>trim(str_replace(' ','-',strtolower($data['slug']))),
				'description'	=>$data['description'],
				'body'			=>$data['body'],
			);
			$id=$data['id'];
			if($id!="0" && $id!="")
			{
				$response=$this->service->update($attribute,$id);		
			}
			else
			{
				$response=$this->service->insert($attribute);
				if($response){
					$dir = ROOT_DIR.trim(str_replace(' ','-',strtolower($data['slug'])));
					$file_to_write ='index.php';
					$content_to_write = "<h3>".$_POST['title']."<h3>";

					if( is_dir($dir) === false )
					{
						mkdir($dir);
					}
					$genericpages_contents = ROOT_DIR.'/dating/genericpages/index.php';
					//$file_to_write=file_get_contents($genericpages_contents);
					$fp = fopen($genericpages_contents, "r");
					$content_to_write = fread($fp, filesize($genericpages_contents));
					$file = fopen($dir . '/' . $file_to_write,"w");
					fwrite($file, $content_to_write);
					fclose($file);
				}
			}
			return $response;
		}
		public function loadPageListView($page)
		{
			$conlist = $this->service->fetch($page);
            include(TEMPLATE_ROOT."generic/list.php");
		}
		public function loadSearchListView($text){
			$conlist = $this->service->fetch(0,$text);
            include(TEMPLATE_ROOT."generic/list.php");
		}
	}
?>