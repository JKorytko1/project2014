<?php 
	class Admin extends CI_Controller 
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('ion_auth', null, 'auth_lib');
			
		}
		public function layout($view,$data = array()) 
		{
			$data['view'] = $view;
			$this->load->view('admin/index',array('data' => $data));
		}

		public function index(){
			if (!$this->auth_lib->logged_in()) {
            redirect(base_url('index.php/admin/login/'), 'location', 301);
        	} else {
            if ($this->auth_lib->is_admin($this->auth_lib->get_user_id())) {
                redirect(base_url('index.php/news/list_news'), 'location', 301);
            } else {
               // show_404();
            }
        }

			//$this->layout('admin/editor');
		}
		 public function login() {
        if (!$this->auth_lib->logged_in()) {
        	echo "hello";
        	$this->load->view("admin/login");
            //$this->mysmarty->change_views_dir(APPPATH . 'modules/admin/views');
            //$this->mysmarty->display('login.tpl');
        } else {
            $this->load->model('auth/ion_auth_model', 'User');
            //$user = $this->auth_lib->user()->row();
            //$group = array();
           //foreach($this->User->get_users_groups($user->id)->result_array() as $g)
            //    $group[] = $g->id;
            //if (in_array(2, $group))
            //    $url = base_url('admin/blog');
           // else
                $url = base_url('admin/items/editor.php');
            redirect($url, 'location', 301);
        }
    }
		public function items($alias){

			$this->layout("admin/".$alias);
		}
		
	}
?> 
 
