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
		public function display($view,$data = array()) 
		{
			$data['view'] = $view;
			$this->load->view('admin/index',array('data' => $data));
		}
		public function index(){
			$this->layout('home');
		}
		public function item($alias = '')
		{
			$this->layout($alias);
		}
		public function conf($alias = '')
		{
			$this->layout('conference/'.$alias);
		}
		protected function get_latin_date($original_date,$format){
        $english_month = new DateTime($original_date);
        $english_month  = $english_month->format($format);

            $trans = array("January" => "Январь",
                   "February" => "февраля",
                   "March" => "марта",
                   "April" => "апреля",
                   "May" => "мая",
                   "June" => "июня",
                   "July" => "июля",
                   "August" => "августа",
                   "September" => "сентября",
                   "October" => "октября",
                   "November" => "Ноябрь",
                   "December" => "Декабрь");
        
               
        return strtr( $english_month, $trans);
    }
	}
?> 
