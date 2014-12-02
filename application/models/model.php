<?
	class Model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();              
		}

		function add_style()
		{
			$data['base'] = $this->config->item('base_url');
 			$data['css'] = $this->config->item('css'); 
			return $data; 
		}
	}
?>