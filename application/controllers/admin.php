<?php 
	class Admin extends CI_Controller 
	{
		function __construct()
		{
			parent::__construct();
			
		}
		public function layout($view,$data = array()) 
		{
			$data['view'] = $view;
			$this->load->view('admin/index',array('data' => $data));
		}

		public function index(){

			$this->layout('admin/editor');
		}
		public function items($alias){

			$this->layout("admin/".$alias);
		}
	}
?> 
 
