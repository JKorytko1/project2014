<?php 
	include_once('main.php');
	class News extends Main
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
				$value->date = $this->get_latin_date($value->date,"F j, Y");
				$arr[$value->id] = $value;
			}
			$data ['news']= $arr;
			$this->display("admin/editor",$data);

			
		}

		public function index(){
			$news = $this->news_model->get();
			foreach ($news as $k => $v) {
				$v->date = $this->get_latin_date($v->date,"F j, Y");
			}
			$data['news'] = $news; 
			$this->layout("news",$data);


		}
		public function add(){
			if($data=$this->input->post()){
				$data['date'] =date('Y-m-d');

				$this->news_model->insert($data);
                redirect(base_url('index.php/news/list_news'), 'location', 301);
			}
			$this->display("admin/add");
		}

		public function edit(){
			
		}

		public function delete(){
			
		}


	}
?> 
 
 
