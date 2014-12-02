<?php 
	include_once('admin.php');
	class News extends Admin
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('news_model');
			
		}
		public function list_news(){
			$data = $this->news_model->get();
			$arr = array();
			foreach ($data as $key => $value) {
				$arr[$value->id] = $value;
			}
			$data ['news']= $arr;
			$this->layout("admin/editor",$data);

			
		}

		public function add(){
			if($data=$this->input->post()){
				$this->news_model->insert($data);
                redirect(base_url('index.php/news/list_news'), 'location', 301);
			}
			$this->layout("admin/add");
		}

		public function edit(){
			
		}

		public function delete(){
			
		}


	}
?> 
 
 
