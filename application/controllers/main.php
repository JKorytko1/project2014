<?php 
	class Main extends CI_Controller 
	{
		function __construct()
		{
			parent::__construct();
			//echo "Hello1";exit();

		}
		public function layout($view,$data = array()) 
		{
			$data['view'] = $view;
			$this->load->view('index',array('data' => $data));
		}
		public function index(){
			$this->load->view('home');
		}
		public function item($alias = '')
		{
			$this->layout($alias);
		}
		public function conf($alias = '')
		{
			$this->layout('conference/'.$alias);
		}
	}
?> 
