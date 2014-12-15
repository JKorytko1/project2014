<?php
	class News_model extends CI_Model
	{
		private $_table="news";
		function __construct()
		{
			parent::__construct();              
		}

		public function get($id= false){
			if($id)
				$this->db->where('id',$id);
			return $this->db->from($this->_table)->get()->result();
		}
		public function insert($data = array()){
			 $this->db->insert($this->_table,$data);
		}
		
		public function update($id,$data) {
        	$this->db->where('id', $id)
               ->update($this->_table, $data);  
    	}
		public function delete($id){
			$this->db->delete($this->_table,array('id' => $id));
		}
	}
?> 
