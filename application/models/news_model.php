<?php
	class News_model extends CI_Model
	{
		private $_table="news";
		function __construct()
		{
			parent::__construct();              
		}

		public function get(){
			return $this->db->from($this->_table)->get()->result();
		}
		public function insert($data = array()){
			 $this->db->insert($this->_table,$data);
		}
		public function delete($id){
			$this->db->delete($this->_table,$id);
		}
	}
?> 
